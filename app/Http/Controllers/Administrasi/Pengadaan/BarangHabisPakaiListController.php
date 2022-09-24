<?php

namespace App\Http\Controllers\Administrasi\Pengadaan;

use App\Http\Controllers\Controller;
use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\HabisPakai\Pengadaan;
use App\Models\Barang\HabisPakai\PengadaanList;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class BarangHabisPakaiListController extends Controller
{
    private $validate_model = [
        'pengadaan' => ['required', 'int'],
        'barang' => ['required', 'int'],
        'harga' => ['required', 'int', 'min:1', 'max:9999999999'],
        'qty' => ['required', 'int', 'min:1', 'max:9999999999'],
    ];

    private $query = [];
    public function index(Request $request, Pengadaan $model)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }
        $page_attr = [
            'title' => 'Data Pengadaan Barang Habis Pakai',
            'breadcrumbs' => [
                ['name' => 'Pengadaan Barang'],
                ['name' => 'List Barang', 'url' => h_prefix(null, 2)],
            ],
            'navigation' => h_prefix(null, 2)
        ];
        return view('administrasi.pengadaan.barang_habis_pakai_list', compact('page_attr', 'model'));
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();

            // tambah qty barang
            $barang = HabisPakai::findOrFail($request->barang);
            $barang->qty = $barang->qty + $request->qty;
            $barang->save();

            $model = new PengadaanList();
            $model->pengadaan = $request->pengadaan;
            $model->barang = $request->barang;
            $model->harga = $request->harga;
            $model->qty = $request->qty;
            $model->created_by = auth()->user()->id;
            $model->save();

            DB::commit();
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
            $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_model));

            DB::beginTransaction();
            $model = PengadaanList::findOrFail($request->id);

            // kurangi qty barang
            $barang_old = HabisPakai::findOrFail($model->barang);
            $barang_old->qty = $barang_old->qty - $model->qty;
            $barang_old->save();

            // tambah tambah qty barang
            $barang = HabisPakai::findOrFail($request->barang);
            $barang->qty = $barang->qty + $request->qty;
            $barang->save();

            // simpan data barang
            $model->pengadaan = $request->pengadaan;
            $model->barang = $request->barang;
            $model->harga = $request->harga;
            $model->qty = $request->qty;
            $model->updated_by = auth()->user()->id;
            $model->save();

            DB::commit();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(PengadaanList $model): mixed
    {
        try {
            DB::beginTransaction();
            // kurangi qty barang
            $barang_old = HabisPakai::findOrFail($model->barang);
            $barang_old->qty = $barang_old->qty - $model->qty;
            $barang_old->save();

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
        $t_barang = HabisPakai::tableName;
        $t_jenis = Jenis::tableName;
        $t_satuan = Satuan::tableName;
        $table = PengadaanList::tableName;

        $model = PengadaanList::selectRaw("
            $table.id,
            $table.harga,
            $table.qty,
            $t_barang.id as barang_id, 
            $t_barang.qty as barang_qty_total,
            concat($t_barang.kode,' | ',$t_barang.nama, ' (', $t_barang.qty, ') ') as barang_nama, 
            `$t_jenis`.`nama` as jenis, 
            `$t_satuan`.`nama` as satuan")
            ->leftJoin($t_barang, "$t_barang.id", '=', "$table.barang")
            ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
            ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
            ->where("$table.id", $request->id)->first();
        return $model;
    }

    public function barang_select2(Request $request)
    {
        try {
            $pengadaan = $request->pengadaan;
            $t_barang = HabisPakai::tableName;
            $t_pengadaan_list = PengadaanList::tableName;
            $t_jenis = Jenis::tableName;
            $t_satuan = Satuan::tableName;

            $list_id = $request->list_id;
            $list = PengadaanList::find($list_id);
            $barang = is_null($list) ? '' : $list->barang;

            $model = HabisPakai::selectRaw("
                $t_barang.id,
                concat($t_barang.kode,' | ',$t_barang.nama, ' (', $t_barang.qty, ') ') as text,
                $t_barang.harga,
                $t_barang.qty as barang_qty_total,
                `$t_jenis`.`nama` as jenis, 
                `$t_satuan`.`nama` as satuan")
                ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
                ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
                ->whereRaw(<<<SQL
                    ( `$t_jenis`.`nama` like '%$request->search%' or
                    `$t_satuan`.`nama` like '%$request->search%' or
                    `$t_barang`.`nama` like '%$request->search%' or
                    `$t_barang`.`kode` like '%$request->search%' or
                    `$t_barang`.`harga` like '%$request->search%' or
                    `$t_barang`.`id` like '%$request->search%'
                    ) and (($t_barang.id not in (SELECT barang FROM `$t_pengadaan_list` WHERE `$t_pengadaan_list`.`pengadaan` = '$pengadaan')) or $t_barang.id = '$barang')
                SQL)
                ->limit(10);

            $result = $model->get()->toArray();
            return response()->json(['results' => $result]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = PengadaanList::tableName;
        $t_barang = HabisPakai::tableName;

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
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y %H:%i:%s', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y %H:%i:%s', $c_updated));
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

        // barang
        $c_barang_nama = 'barang_nama';
        $this->query[$c_barang_nama] = "$t_barang.nama";
        $this->query["{$c_barang_nama}_alias"] = $c_barang_nama;

        $c_barang_kode = 'barang_kode';
        $this->query[$c_barang_kode] = "$t_barang.kode";
        $this->query["{$c_barang_kode}_alias"] = $c_barang_kode;

        $c_barang_qty_total = 'barang_qty_total';
        $this->query[$c_barang_qty_total] = "$t_barang.qty";
        $this->query["{$c_barang_qty_total}_alias"] = $c_barang_qty_total;

        $c_total_harga = 'total_harga';
        $this->query[$c_total_harga] = "($table.qty * $table.harga)";
        $this->query["{$c_total_harga}_alias"] = $c_total_harga;
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
            $c_barang_kode,
            $c_barang_nama,
            $c_total_harga,
            $c_barang_qty_total,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = PengadaanList::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by")
            ->leftJoin($t_barang, "$t_barang.id", '=', "$table.barang");

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
        $filters = ['updated_by', 'created_by', 'pengadaan'];
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
}