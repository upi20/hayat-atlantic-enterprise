<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class CustomerController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string', 'max:255'],
        'alamat' => ['required', 'string'],
        'no_telepon' => ['nullable', 'string'],
        'no_whatsapp' => ['nullable', 'string'],
    ];
    private $query = [];
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }
        $page_attr = [
            'title' => 'Customer',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        return view('administrasi.customer', compact('page_attr'));
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            $model = new Customer();

            $model->nama = $request->nama;
            $model->no_telepon = $request->no_telepon;
            $model->no_whatsapp = $request->no_whatsapp;
            $model->alamat = $request->alamat;
            $model->created_by = auth()->user()->id;
            $model->save();

            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {
            $model = Customer::findOrFail($request->id);
            $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_model));

            $model->nama = $request->nama;
            $model->no_telepon = $request->no_telepon;
            $model->no_whatsapp = $request->no_whatsapp;
            $model->alamat = $request->alamat;
            $model->updated_by = auth()->user()->id;

            $model->save();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Customer $model): mixed
    {
        try {
            $model->delete();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        return Customer::findOrFail($request->id);
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = Customer::tableName;

        // cusotm query
        // ========================================================================================================
        // creted at and updated at
        $date_format_fun = function (string $select, string $format, string $alias) use ($table): array {
            $str = <<<SQL
                (DATE_FORMAT($table.$select, '$format'))
            SQL;
            return [$alias => $str, ($alias . '_alias') => $alias];
        };

        $c_created = 'created';
        $c_created_str = 'created_str';
        $c_updated = 'updated';
        $c_updated_str = 'updated_str';
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));

        // created_by
        $c_created_by = 'created_by_str';
        $t_created_by = 'b';
        $this->query[$c_created_by] = "$t_created_by.name";
        $this->query["{$c_created_by}_alias"] = $c_created_by;

        // updated_by
        $c_updated_by = 'updated_by_str';
        $t_updated_by = 'c';
        $this->query[$c_updated_by] = "$t_updated_by.name";
        $this->query["{$c_updated_by}_alias"] = $c_updated_by;
        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            return $this->query[$col] . ' as ' . $this->query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_created_by,
            $c_updated_by,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = Customer::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        // $f = [$c_created_by, $c_updated_by];
        // // loop filter
        // foreach ($f as $v) {
        //     if ($f_c($v)) {
        //         $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
        //     }
        // }

        // filter custom
        $filters = ['updated_by', 'created_by'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $this->query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $search_add = [
                "$table.nama",
                "$table.no_telepon",
                "$table.no_whatsapp",
                "$table.alamat",
                "$table.updated_by",
                "$table.created_by",
                "$table.updated_by",
            ];

            $search_arr = array_merge($model_filter, $search_add);

            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });
        // create datatable
        return $datatable->make(true);
    }

    public function select2(Request $request)
    {
        try {
            $model = User::select(['id', DB::raw("concat(no_telepon,' | ',nama) as text")])
                ->whereRaw("(
                    `nama` like '%$request->search%' or
                    `no_telepon` like '%$request->search%' or
                    `id` like '%$request->search%'
                    )")
                ->limit(50);

            $result = $model->get()->toArray();
            return response()->json(['results' => array_merge([['id' => '', 'text' => 'Semua']], $result)]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }
}
