<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\GantiRugi;
use App\Models\GantiRugi\GantiRugiPembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class GantiRugiController extends Controller
{
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
        $page_attr = [
            'title' => 'Ganti Rugi Detail',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Ganti Rugi', 'url' => h_prefix(null, 2)],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $customer = $model->getCustomer;

        return view('administrasi.ganti_rugi.detail', compact('page_attr', 'model', 'customer'));
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
            $ganti_rugi_nomor = GantiRugiPembayaran::max('no_surat') + 1;

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
            $ganti_rugi_uang->save();

            // ganti rugi header
            $ganti_rugi->dibayar = $ganti_rugi->dibayar + $request->nominal;
            $ganti_rugi->sisa = $ganti_rugi->sisa - $request->nominal;
            if ($ganti_rugi->status == 0) {
                $ganti_rugi->status = 1;
            }

            if ($ganti_rugi->sisa <= 0) {
                $ganti_rugi->status = 2;
            }
            $ganti_rugi->save();

            // return data detail ganti rugi
            $customer = $ganti_rugi->getCustomer;

            DB::commit();

            return response()->json(compact('ganti_rugi', 'customer'));
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
            $c_tanggal_str
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
        // $f = [$c_created_by, $c_updated_by];
        // // loop filter
        // foreach ($f as $v) {
        //     if ($f_c($v)) {
        //         $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
        //     }
        // }

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
}
