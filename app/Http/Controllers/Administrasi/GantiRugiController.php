<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\GantiRugi;
use App\Models\GantiRugi\GantiListBarang;
use App\Models\GantiRugi\GantiRugiBarang;
use App\Models\GantiRugi\GantiRugiPembayaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use PDF;

class GantiRugiController extends Controller
{
    private $validate_barang = [
        'ganti_rugi' => ['required', 'int'],
        'barang' => ['required', 'int'],
        'tanggal' => ['required', 'date'],
        'oleh' => ['required', 'string'],
        'keterangan' => ['nullable', 'string'],
    ];

    private $validate_uang = [
        'ganti_rugi' => ['required', 'int'],
        'nama' => ['required', 'string'],
        'oleh' => ['required', 'string'],
        'tanggal' => ['required', 'date'],
        'nominal' => ['required', 'int', 'min:1'],
        'keterangan' => ['nullable', 'string'],
    ];

    private $query = [];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }
        $page_attr = [
            'title' => 'Ganti Rugi',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        return view('administrasi.ganti_rugi.list', compact('page_attr'));
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $t_customer = Customer::tableName;
        $table = GantiRugi::tableName;

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
        $model = GantiRugi::select(array_merge([
            DB::raw("$table.*"),
            DB::raw("$table.nominal - $table.dibayar as sisa"),
            DB::raw("$t_customer.nama as customer_nama"),
            DB::raw("$t_customer.alamat as customer_alamat"),
            DB::raw("$t_customer.no_telepon as customer_no_telepon"),
            DB::raw("$t_customer.no_whatsapp as customer_no_whatsapp"),
        ], $to_db_raw))
            ->leftJoin($t_customer, "$t_customer.id", '=', "$table.customer")
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
        $filters = ['updated_by', 'created_by', 'customer'];
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
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table, $t_customer) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $search_add = [
                "$table.penyewaan_id",
                "$table.customer",
                "$table.nama",
                "$table.keterangan",
                "$table.no_surat",
                "$table.jumlah_barang",
                "$table.total_qty_barang",
                "$table.nominal",
                "$table.dibayar",
                "$table.dibayar_barang",
                "$table.sisa",
                "$table.status",
                "$table.updated_by",
                "$table.created_by",
                "$t_customer.nama",
                "$t_customer.alamat",
                "$t_customer.no_telepon",
                "$t_customer.no_whatsapp",
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

    public function detail(GantiRugi $model)
    {
        $barangs = $this->get_list_barang($model->id);
        $page_attr = [
            'title' => 'Ganti Rugi Detail',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Ganti Rugi', 'url' => h_prefix(null, 2)],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $customer = $model->getCustomer;
        $penyewaan = $model->penyewaan;

        return view('administrasi.ganti_rugi.detail', compact('page_attr', 'model', 'customer', 'barangs', 'penyewaan'));
    }

    public function simpan_status(GantiRugi $ganti_rugi, Request $request)
    {
        try {
            $request->validate([
                'detail_status' => 'required|int'
            ]);
            DB::beginTransaction();
            $ganti_rugi->status = $request->detail_status;
            $ganti_rugi->save();

            // return data detail ganti rugi
            $customer = $ganti_rugi->getCustomer;

            DB::commit();

            $barangs = $this->get_list_barang($ganti_rugi->id);
            return response()->json(compact('ganti_rugi', 'customer', 'barangs'));
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    private function get_list_barang($ganti_rugi_id)
    {
        $table = GantiListBarang::tableName;
        $t_satuan = Satuan::tableName;
        $t_barang = Sewa::tableName;
        $barangs = GantiListBarang::selectRaw("
        $table.*,
        $t_satuan.nama as satuan,
        $t_barang.nama as barang_nama,
        $t_barang.kode as barang_kode
        ")
            ->leftJoin($t_barang, "$t_barang.id", "=", "$table.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
            ->where("$table.ganti_rugi_id", $ganti_rugi_id)->get();

        return $barangs;
    }

    // Ganti rugi uang ============================================================================================
    public function uang_insert(Request $request)
    {
        try {
            $request->validate($this->validate_uang);
            DB::beginTransaction();
            $ganti_rugi = GantiRugi::find($request->ganti_rugi);

            // ganti rugi pembayaran
            $ganti_rugi_uang = new GantiRugiPembayaran();

            // penomoran
            $max_id = GantiRugiPembayaran::max('no_surat');
            $max_id = $max_id ?? 'GRU/00001';
            $max_id = (int)str_replace('GRU/', '', $max_id);
            $max_id++;
            $ganti_rugi_nomor = 'GRU/' . str_pad($max_id, 5, '0', STR_PAD_LEFT);

            $ganti_rugi_uang->no_surat = $ganti_rugi_nomor;
            $ganti_rugi_uang->ganti_rugi_id = $ganti_rugi->id;
            $ganti_rugi_uang->tanggal = $request->tanggal;
            $ganti_rugi_uang->oleh = $request->oleh;
            $ganti_rugi_uang->keterangan = $request->keterangan;
            $ganti_rugi_uang->nominal = $request->nominal;
            $ganti_rugi_uang->nama = $request->nama;
            $ganti_rugi_uang->pembayaran_sebelumnya = $ganti_rugi->dibayar;
            $ganti_rugi_uang->status = 1;
            $ganti_rugi_uang->created_by = auth()->user()->id;


            // ganti rugi header
            $ganti_rugi->dibayar = $ganti_rugi->dibayar + $request->nominal;
            $sisa = $ganti_rugi->nominal - ($ganti_rugi->dibayar + $ganti_rugi->dibayar_barang);
            $ganti_rugi->sisa = $sisa;
            // $ganti_rugi->sisa = $sisa < 0 ? 0 : $sisa;
            if ($ganti_rugi->sisa >= 0) {
                $ganti_rugi->status = 1;
            }

            if ($ganti_rugi->sisa <= 0) {
                $ganti_rugi->status = 2;
            }
            // simpan ganti rugi uang
            $ganti_rugi_uang->dibayar = $ganti_rugi->dibayar;
            $ganti_rugi_uang->sisa = $sisa;
            $ganti_rugi_uang->save();

            // simpan ganti rugi
            $ganti_rugi->save();

            // return data detail ganti rugi
            $customer = $ganti_rugi->getCustomer;

            DB::commit();

            $barangs = $this->get_list_barang($ganti_rugi->id);
            return response()->json(compact('ganti_rugi', 'customer', 'barangs'));
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function uang_batalkan(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|int',
                'alasan' => 'required|string',
            ]);
            DB::beginTransaction();
            $ganti_rugi_uang = GantiRugiPembayaran::find($request->id);

            if ($ganti_rugi_uang->status == 0) {
                return response()->json([
                    'message' => 'Pembayaran sudah di batalkan.',
                ], 500);
            }

            $ganti_rugi_uang->pembatalan_alasan = $request->alasan;
            $ganti_rugi_uang->status = 0;
            $ganti_rugi_uang->updated_by = auth()->user()->id;
            $ganti_rugi_uang->save();

            // ganti rugi header
            $ganti_rugi = $ganti_rugi_uang->ganti_rugi;
            $ganti_rugi->dibayar = $ganti_rugi->dibayar - $ganti_rugi_uang->nominal;
            $sisa = $ganti_rugi->nominal - ($ganti_rugi->dibayar + $ganti_rugi->dibayar_barang);
            $ganti_rugi->sisa = $sisa;
            // $ganti_rugi->sisa = $sisa < 0 ? 0 : $sisa;
            if ($ganti_rugi->sisa >= 0) {
                $ganti_rugi->status = 1;
            }

            if ($ganti_rugi->sisa <= 0) {
                $ganti_rugi->status = 2;
            }
            $ganti_rugi->save();

            // return data detail ganti rugi
            $customer = $ganti_rugi->getCustomer;

            DB::commit();

            $barangs = $this->get_list_barang($ganti_rugi->id);
            return response()->json(compact('ganti_rugi', 'customer', 'barangs'));
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function uang_datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = GantiRugiPembayaran::tableName;

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
        $this->query = array_merge($this->query, $date_format_fun('tanggal', '%d-%b-%Y', $c_tanggal_str));

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

        // dibatalkan
        $c_dibatalkan = 'dibatalkan';
        $this->query[$c_dibatalkan] = "if($table.status = 0,'Ya','Tidak')";
        $this->query["{$c_dibatalkan}_alias"] = $c_dibatalkan;
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
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = GantiRugiPembayaran::select(array_merge([
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
        $f = [$c_dibatalkan];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v)) {
                $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = ['updated_by', 'created_by', 'ganti_rugi_id'];
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
                "$table.ganti_rugi_id",
                "$table.nama",
                "$table.no_surat",
                "$table.tanggal",
                "$table.oleh",
                "$table.keterangan",
                "$table.nominal",
                "$table.pembayaran_sebelumnya",
                "$table.status",
                "$table.pembatalan_alasan",
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
    // Ganti rugi uang ============================================================================================

    // Ganti rugi barang ============================================================================================
    public function barang_select2(Request $request)
    {

        try {
            $ganti_rugi_id = $request->ganti_rugi;
            $table = GantiListBarang::tableName;
            $t_barang = Sewa::tableName;
            $t_jenis = Jenis::tableName;
            $t_satuan = Satuan::tableName;
            $search = $request->search;

            $sisa = "(($table.qty_rusak + $table.qty_hilang) - $table.qty_diganti)";

            $model = GantiListBarang::selectRaw("$t_barang.id, concat($t_barang.kode,' | ',$t_barang.nama, ' (', $sisa, ')') as text, $t_satuan.nama as satuan, $sisa as sisa")
                ->whereRaw("(
                    $t_jenis.nama like '%$search%' or
                    $t_satuan.nama like '%$search%' or
                    $t_barang.nama like '%$search%' or
                    $t_barang.kode like '%$search%' or
                    $t_barang.id like '%$search%'
                    )")
                ->leftJoin($t_barang, "$t_barang.id", '=', "$table.barang")
                ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
                ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
                ->where("$table.ganti_rugi_id", $ganti_rugi_id)
                ->whereRaw("$sisa > 0")
                ->limit(50);

            $result = $model->get()->toArray();
            return response()->json(['results' => array_merge([['id' => '', 'text' => 'Semua']], $result)]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }

    public function barang_insert(Request $request)
    {
        try {
            $request->validate($this->validate_barang);
            DB::beginTransaction();
            $ganti_rugi = GantiRugi::find($request->ganti_rugi);

            // ganti rugi barang buat harga dan diganti
            $ganti_rugi_list = GantiListBarang::where('ganti_rugi_id', $request->ganti_rugi)
                ->where('barang', $request->barang)->first();
            $ganti_rugi_list->qty_diganti = $ganti_rugi_list->qty_diganti + $request->qty;
            $ganti_rugi_list->updated_by = auth()->user()->id;
            $ganti_rugi_list->save();

            // ganti rugi barang
            $ganti_rugi_barang = new GantiRugiBarang();

            // penomoran
            $max_id = GantiRugiBarang::max('no_surat');
            $max_id = $max_id ?? 'GRB/00001';
            $max_id = (int)str_replace('GRB/', '', $max_id);
            $max_id++;
            $ganti_rugi_nomor = 'GRB/' . str_pad($max_id, 5, '0', STR_PAD_LEFT);

            $ganti_rugi_barang->no_surat = $ganti_rugi_nomor;
            $ganti_rugi_barang->ganti_rugi_id = $ganti_rugi->id;
            $ganti_rugi_barang->tanggal = $request->tanggal;
            $ganti_rugi_barang->oleh = $request->oleh;
            $ganti_rugi_barang->keterangan = $request->keterangan;
            $ganti_rugi_barang->barang = $request->barang;
            $ganti_rugi_barang->status = 1;
            $ganti_rugi_barang->qty = $request->qty;
            $ganti_rugi_barang->created_by = auth()->user()->id;
            $ganti_rugi_barang->save();

            // ganti rugi header
            $nominal = $request->qty * $ganti_rugi_list->harga;

            $ganti_rugi->dibayar_barang = $ganti_rugi->dibayar_barang + $nominal;
            $sisa = $ganti_rugi->nominal - ($ganti_rugi->dibayar + $ganti_rugi->dibayar_barang);
            $ganti_rugi->sisa = $sisa;
            // $ganti_rugi->sisa = $sisa < 0 ? 0 : $sisa;
            if ($ganti_rugi->sisa >= 0) {
                $ganti_rugi->status = 1;
            }

            if ($ganti_rugi->sisa <= 0) {
                $ganti_rugi->status = 2;
            }
            $ganti_rugi->save();

            // return data detail ganti rugi
            $customer = $ganti_rugi->getCustomer;

            DB::commit();

            $barangs = $this->get_list_barang($ganti_rugi->id);
            return response()->json(compact('ganti_rugi', 'customer', 'barangs'));
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function barang_batalkan(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|int',
                'alasan' => 'required|string',
            ]);
            DB::beginTransaction();
            $ganti_rugi_barang = GantiRugiBarang::find($request->id);

            if ($ganti_rugi_barang->status == 0) {
                return response()->json([
                    'message' => 'Pembayaran sudah di batalkan.',
                ], 500);
            }

            $ganti_rugi_barang->pembatalan_alasan = $request->alasan;
            $ganti_rugi_barang->status = 0;
            $ganti_rugi_barang->updated_by = auth()->user()->id;
            $ganti_rugi_barang->save();

            // ganti list barang
            $ganti_list_barang = GantiListBarang::where('ganti_rugi_id', $ganti_rugi_barang->ganti_rugi_id)
                ->where('barang', $ganti_rugi_barang->barang)->first();

            $ganti_list_barang->qty_diganti = $ganti_list_barang->qty_diganti - $ganti_rugi_barang->qty;
            $nominal = $ganti_list_barang->harga * $ganti_rugi_barang->qty;
            $ganti_list_barang->save();

            // ganti rugi header
            $ganti_rugi = $ganti_rugi_barang->ganti_rugi;

            $ganti_rugi->dibayar_barang = $ganti_rugi->dibayar_barang - $nominal;
            $sisa = $ganti_rugi->nominal - ($ganti_rugi->dibayar + $ganti_rugi->dibayar_barang);

            $ganti_rugi->sisa = $sisa;
            // $ganti_rugi->sisa = $sisa < 0 ? 0 : $sisa;
            if ($ganti_rugi->sisa >= 0) {
                $ganti_rugi->status = 1;
            }

            if ($ganti_rugi->sisa <= 0) {
                $ganti_rugi->status = 2;
            }
            $ganti_rugi->save();

            // return data detail ganti rugi
            $customer = $ganti_rugi->getCustomer;

            DB::commit();

            $barangs = $this->get_list_barang($ganti_rugi->id);
            return response()->json(compact('ganti_rugi', 'customer', 'barangs'));
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function barang_datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $t_barang = Sewa::tableName;
        $table = GantiRugiBarang::tableName;
        $t_list_barang = GantiListBarang::tableName;
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
        $c_tanggal_str = 'tanggal_str';
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));
        $this->query = array_merge($this->query, $date_format_fun('tanggal', '%d-%b-%Y', $c_tanggal_str));

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

        // harga
        $c_harga = 'harga';
        $this->query[$c_harga] = <<<SQL
            (SELECT harga from $t_list_barang 
                where $t_list_barang.barang = $table.barang 
                and $t_list_barang.ganti_rugi_id = $table.ganti_rugi_id 
                limit 1)
        SQL;
        $this->query["{$c_harga}_alias"] = $c_harga;

        // dibatalkan
        $c_dibatalkan = 'dibatalkan';
        $this->query[$c_dibatalkan] = "if($table.status = 0,'Ya','Tidak')";
        $this->query["{$c_dibatalkan}_alias"] = $c_dibatalkan;
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
            $c_harga
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = GantiRugiBarang::select(array_merge([
            DB::raw("$table.*"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_satuan.nama as satuan"),
        ], $to_db_raw))
            ->leftJoin($t_barang, "$t_barang.id", '=', "$table.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [$c_dibatalkan];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v)) {
                $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = ['updated_by', 'created_by', 'ganti_rugi_id'];
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
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table, $t_barang, $t_list_barang, $t_satuan) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $search_add = [
                "$table.ganti_rugi_id",
                "$table.nama",
                "$table.no_surat",
                "$table.tanggal",
                "$table.oleh",
                "$table.keterangan",
                "$table.qty",
                "$table.pembayaran_sebelumnya",
                "$table.status",
                "$table.pembatalan_alasan",
                "$table.updated_by",
                "$table.created_by",
                "$table.updated_by",
                "$t_barang.nama",
                "$t_barang.kode",
                "$t_list_barang.harga",
                "$t_satuan.nama",
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
    // Ganti rugi barang ============================================================================================

    public function faktur(GantiRugiPembayaran $ganti_rugi)
    {
        $ganti_rugi->tanggal_str = Carbon::parse($ganti_rugi->tanggal)
            ->isoFormat("D MMMM Y");

        $ganti_rugi_head = $ganti_rugi->ganti_rugi;
        $customer = $ganti_rugi->ganti_rugi->getCustomer;
        $penyewaan = $ganti_rugi->ganti_rugi->penyewaan;
        $surat_jalan = $penyewaan->surat_jalan;

        $data = compact('ganti_rugi', 'ganti_rugi_head', 'customer', 'penyewaan', 'surat_jalan');
        $data['compact'] = $data;

        // return $data;

        // return view('administrasi.ganti_rugi.faktur_pembayaran', $data);

        view()->share('administrasi.ganti_rugi.faktur_pembayaran', $data);
        $pdf = PDF::loadView('administrasi.ganti_rugi.faktur_pembayaran', $data)
            ->setPaper('a4', 'landscape');

        $name = "Invoice Ganti Rugi Uang $ganti_rugi->no_surat .pdf";
        return $pdf->stream($name);
        exit();
    }

    public function surat_terima(GantiRugi $ganti_rugi, Request $request)
    {
        $barang_diganti = GantiRugiBarang::with('getBarang')->where('ganti_rugi_id', $ganti_rugi->id)->orderBy('tanggal', 'desc')->get();

        $data = compact('ganti_rugi', 'barang_diganti');
        $data['compact'] = $data;

        // return $ganti_rugi->list_barang;

        // return view('administrasi.ganti_rugi.surat_terima_barang', $data);

        view()->share('administrasi.ganti_rugi.surat_terima_barang', $data);
        $pdf = PDF::loadView('administrasi.ganti_rugi.surat_terima_barang', $data)
            ->setPaper('a4', 'landscape');

        $name = "Invoice Ganti Rugi Barang $ganti_rugi->no_surat .pdf";
        return $pdf->stream($name);
        exit();
    }
}
