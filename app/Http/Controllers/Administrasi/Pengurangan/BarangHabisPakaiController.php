<?php

namespace App\Http\Controllers\Administrasi\Pengurangan;

use App\Http\Controllers\Controller;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\HabisPakai\Pengurangan;
use App\Models\Barang\HabisPakai\PenguranganList;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class BarangHabisPakaiController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string', 'max:255'],
        'keterangan' => ['nullable', 'string'],
        'tanggal' => ['required', 'string'],
    ];
    private $query = [];
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }
        $page_attr = [
            'title' => 'Pengurangan Barang Habis Pakai',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pengurangan'],
            ]
        ];
        return view('administrasi.pengurangan.barang_habis_pakai', compact('page_attr'));
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            $model = new Pengurangan();

            $model->nama = $request->nama;
            $model->tanggal = $request->tanggal;
            $model->keterangan = $request->keterangan;
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
            $model = Pengurangan::findOrFail($request->id);
            $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_model));

            $model->nama = $request->nama;
            $model->tanggal = $request->tanggal;
            $model->keterangan = $request->keterangan;
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

    public function delete(Pengurangan $model): mixed
    {
        try {
            DB::beginTransaction();
            // delete data model list
            $pengurangan_list = PenguranganList::where('pengurangan', $model->id)->get();
            foreach ($pengurangan_list as $pengurangan) {
                $barang = HabisPakai::findOrFail($pengurangan->barang);
                $barang->qty = $barang->qty + $pengurangan->qty;
                $barang->save();
                $pengurangan->delete();
            }

            // delete model
            $model->delete();
            DB::commit();
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
        return Pengurangan::findOrFail($request->id);
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = Pengurangan::tableName;
        $t_pengurangan_barang = PenguranganList::tableName;

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
        $c_tanggal_str = 'tanggal_str';
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));
        $this->query = array_merge($this->query, $date_format_fun('tanggal', '%d-%b-%Y %H:%i:%s', $c_tanggal_str));

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

        $c_barang_jumlah = 'barang_jumlah';
        $this->query[$c_barang_jumlah] = <<<SQL
        (select count(*) from $t_pengurangan_barang where $t_pengurangan_barang.pengurangan = $table.id)
        SQL;
        $this->query["{$c_barang_jumlah}_alias"] = $c_barang_jumlah;

        $c_barang_total_qty = 'barang_total_qty';
        $this->query[$c_barang_total_qty] = <<<SQL
        (select sum($t_pengurangan_barang.qty) from $t_pengurangan_barang where $t_pengurangan_barang.pengurangan = $table.id)
        SQL;
        $this->query["{$c_barang_total_qty}_alias"] = $c_barang_total_qty;
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
            $c_tanggal_str,
            $c_barang_jumlah,
            $c_barang_total_qty,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = Pengurangan::select(array_merge([
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
        foreach ($model_filter as $v) {
            // custom pencarian
            $datatable->filterColumn($this->query["{$v}_alias"], function ($query, $keyword) use ($v) {
                $query->whereRaw("({$this->query[$v]} like '%$keyword%')");
            });
        }

        // create datatable
        return $datatable->make(true);
    }

    public function select2(Request $request)
    {
        try {
            $model = User::select(['id', DB::raw("concat(tanggal,' | ',nama) as text")])
                ->whereRaw("(
                    `nama` like '%$request->search%' or
                    `tanggal` like '%$request->search%' or
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
