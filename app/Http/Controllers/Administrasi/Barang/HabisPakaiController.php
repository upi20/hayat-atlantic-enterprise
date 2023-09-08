<?php

namespace App\Http\Controllers\Administrasi\Barang;

use App\Http\Controllers\Controller;
use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use App\Models\Barang\HabisPakai;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class HabisPakaiController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string', 'max:255'],
        'kode' => ['required', 'string', 'unique:' . HabisPakai::tableName . ',kode', 'max:8'],
        'keterangan' => ['nullable', 'string'],
        'jenis' => ['required', 'int'],
        'satuan' => ['required', 'int'],
        'harga' => ['required', 'int'],
    ];
    private $query = [];
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }

        $jenis = Jenis::all();
        $satuan = Satuan::all();
        $page_attr = [
            'title' => 'Barang Habis Pakai',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        if (auth_has_role('General Manager')) {
            return view('gm.barang.habis_pakai', compact('page_attr', 'jenis', 'satuan'));
        }
        return view('administrasi.barang.habis_pakai', compact('page_attr', 'jenis', 'satuan'));
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            $model = new HabisPakai();

            $model->nama = $request->nama;
            $model->kode = $request->kode;
            $model->keterangan = $request->keterangan;
            $model->jenis = $request->jenis;
            $model->satuan = $request->satuan;
            $model->harga = $request->harga;

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
            $model = HabisPakai::findOrFail($request->id);
            $this->validate_model['kode'][2] = $this->validate_model['kode'][2] . ",$request->id";
            $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_model));

            $model->nama = $request->nama;
            $model->kode = $request->kode;
            $model->keterangan = $request->keterangan;
            $model->jenis = $request->jenis;
            $model->satuan = $request->satuan;
            $model->harga = $request->harga;

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

    public function delete(HabisPakai $model): mixed
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
        return HabisPakai::findOrFail($request->id);
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = HabisPakai::tableName;
        $t_jenis = Jenis::tableName;
        $t_satuan = Satuan::tableName;

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

        // jenis
        $c_jenis = 'jenis_str';
        $this->query[$c_jenis] = "$t_jenis.nama";
        $this->query["{$c_jenis}_alias"] = $c_jenis;

        // satuan
        $c_satuan = 'satuan_str';
        $this->query[$c_satuan] = "$t_satuan.nama";
        $this->query["{$c_satuan}_alias"] = $c_satuan;

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
            $c_jenis,
            $c_satuan,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = HabisPakai::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin($t_jenis, "$t_jenis.id", '=', "$table.jenis")
            ->leftJoin($t_satuan, "$t_satuan.id", '=', "$table.satuan")
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
        $filters = ['updated_by', 'created_by', 'jenis', 'satuan'];
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
                "$table.kode",
                "$table.jenis",
                "$table.satuan",
                "$table.harga",
                "$table.qty",
                "$table.keterangan",
                "$table.updated_by",
                "$table.created_by",
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
            $model = User::select(['id', DB::raw("concat(kode,' | ',nama) as text")])
                ->whereRaw("(
                    `nama` like '%$request->search%' or
                    `kode` like '%$request->search%' or
                    `keterangan` like '%$request->search%' or
                    `jenis` like '%$request->search%' or
                    `satuan` like '%$request->search%' or
                    `harga` like '%$request->search%' or
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
