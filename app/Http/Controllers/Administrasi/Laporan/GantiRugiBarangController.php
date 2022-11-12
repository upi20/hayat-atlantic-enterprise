<?php

namespace App\Http\Controllers\Administrasi\Laporan;

use App\Http\Controllers\Controller;
use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\GantiRugi;
use App\Models\GantiRugi\GantiRugiBarang;
use App\Models\GantiRugi\GantiRugiPembayaran;
use App\Models\Penyewaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use PDF;

class GantiRugiBarangController extends Controller
{
    private $query = [];

    public function index(Request $request)
    {
        // date default
        $month = date('m');
        $year = date('Y');
        $date_end = '';
        $date_start = '';
        if ($month == 12) {
            $date_start = "$year-12-01";
            $year++;
            $date_end = date('Y-m-d', strtotime("$year-01-01 - 1 days"));
        } else {
            $month = $month < 9 ?  "0$month" : $month;
            $date_start = "$year-$month-01";
            $month++;
            $date_end = date('Y-m-d', strtotime("$year-$month-01 - 1 days"));
        }

        if (request()->ajax()) {
            return $this->datatable($request);
        }

        $page_attr = [
            'title' => 'Laporan Ganti Rugi',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Laporan'],
            ]
        ];
        return view('administrasi.laporan.ganti_rugi', compact('page_attr', 'date_end', 'date_start'));
    }

    public function datatable(Request $request): mixed
    {
        // ganti rugi [id, Nomor, Tanggal, Keterangan]
        // customer [nama, alamat]
        // penyewaan [Kepada, Lokasi]

        $table = GantiRugi::tableName;

        $t_penyewaan = Penyewaan::tableName;
        $t_customer = Customer::tableName;

        // cusotm query
        // ========================================================================================================
        // // creted at and updated at
        // $date_format_fun = function (string $select, string $format, string $alias) use ($table): array {
        //     $str = <<<SQL
        //         (DATE_FORMAT($table.$select, '$format'))
        //     SQL;
        //     return [$alias => $str, ($alias . '_alias') => $alias];
        // };
        // $c_tanggal = 'tanggal_str';
        // $c_tanggal_kembali = 'tanggal_kembali_str';
        // $this->query = array_merge($this->query, $date_format_fun('tanggal', '%d-%b-%Y', $c_tanggal));
        // $this->query = array_merge($this->query, $date_format_fun('tanggal_kembali', '%d-%b-%Y', $c_tanggal_kembali));

        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            return $this->query[$col] . ' as ' . $this->query[$col . '_alias'];
        };

        // customer
        $c_customer = 'customer_nama';
        $this->query[$c_customer] = "$t_customer.nama";
        $this->query["{$c_customer}_alias"] = $c_customer;

        // alamat
        $c_alamat = 'customer_alamat';
        $this->query[$c_alamat] = "$t_customer.alamat";
        $this->query["{$c_alamat}_alias"] = $c_alamat;

        // number
        $c_number = 'penyewaan_number';
        $this->query[$c_number] = "$t_penyewaan.number";
        $this->query["{$c_number}_alias"] = $c_number;

        // kepada
        $c_kepada = 'penyewaan_kepada';
        $this->query[$c_kepada] = "$t_penyewaan.kepada";
        $this->query["{$c_kepada}_alias"] = $c_kepada;

        // lokasi
        $c_lokasi = 'penyewaan_lokasi';
        $this->query[$c_lokasi] = "$t_penyewaan.lokasi";
        $this->query["{$c_lokasi}_alias"] = $c_lokasi;

        // id
        $c_penyewaan_id = 'penyewaan_id';
        $this->query[$c_penyewaan_id] = "$t_penyewaan.id";
        $this->query["{$c_penyewaan_id}_alias"] = $c_penyewaan_id;

        // dibayar_total
        $c_dibayar_total = 'dibayar_total';
        $this->query[$c_dibayar_total] = "($table.dibayar + dibayar_barang)";
        $this->query["{$c_dibayar_total}_alias"] = $c_dibayar_total;

        $model_filter = [
            $c_customer,
            $c_alamat,
            $c_kepada,
            $c_lokasi,
            $c_penyewaan_id,
            $c_number,
            $c_dibayar_total
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);

        $model = GantiRugi::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->join($t_penyewaan, "$t_penyewaan.id", '=', "$table.penyewaan_id")
            ->join($t_customer, "$t_customer.id", '=', "$t_penyewaan.customer");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [$c_customer, $c_alamat, $c_kepada, $c_lokasi];

        // loop filter
        foreach ($f as $v) {
            if ($f_c($v)) {
                $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = [];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }

        $model->where("$table.status", '>=', 1);

        // custom tanggal
        $t_ganti_rugi_uang = GantiRugiPembayaran::tableName;
        $t_ganti_rugi_barang = GantiRugiBarang::tableName;
        $dari_tanggal = $request->filter['dari_tanggal'];
        $sampai_tanggal = $request->filter['sampai_tanggal'];
        $sql = <<<SQL
            (((select count(*) from $t_ganti_rugi_uang as z 
                where z.ganti_rugi_id = $table.id and z.status=1 and
                (z.tanggal >= '$dari_tanggal' and z.tanggal <= '{$sampai_tanggal}') ) > 0)
                or
            ((select count(*) from $t_ganti_rugi_barang as y 
                where y.ganti_rugi_id = $table.id and y.status=1 and
                (y.tanggal >= '$dari_tanggal' and y.tanggal <= '{$sampai_tanggal}') ) > 0))
        SQL;

        $model->whereRaw($sql);

        // $model->whereRaw("($table.tanggal >= '{$request->filter['dari_tanggal']}' and $table.tanggal <= '{$request->filter['sampai_tanggal']}')");
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $this->query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            $search = str_replace("'", "\\'", $search);
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $search_add = ['id', 'penyewaan_id', 'customer', 'nama', 'keterangan', 'no_surat', 'jumlah_barang', 'total_qty_barang', 'nominal', 'dibayar', 'dibayar_barang', 'sisa', 'status', 'updated_by', 'created_by', 'created_at', 'updated_at'];
            $search_add = array_map(function ($v) use ($table) {
                return "$table.$v";
            }, $search_add);
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

    public function cetak_laporan(Request $request)
    {
        $ganti_rugi = $this->datatable($request);
        $t_barang_sewa = Sewa::tableName;
        $t_satuan = Satuan::tableName;

        // custom tanggal
        $t_ganti_rugi_uang = GantiRugiPembayaran::tableName;
        $t_ganti_rugi_barang = GantiRugiBarang::tableName;
        $filter_dari_tanggal = $request->filter['dari_tanggal'];
        $filter_sampai_tanggal = $request->filter['sampai_tanggal'];

        $ganti_rugis = $this->datatable($request);
        $ganti_rugis = $ganti_rugis->original['data'];
        $dari_tanggal = Carbon::parse($request->filter['dari_tanggal'])
            ->isoFormat("D MMMM Y");
        $sampai_tanggal = Carbon::parse($request->filter['sampai_tanggal'])
            ->isoFormat("D MMMM Y");
        $search = request('search');
        $search = isset($search['value']) ? $search['value'] : null;


        for ($i = 0; $i < count($ganti_rugis); $i++) {

            // ganti rugi uang
            $uangs = GantiRugiPembayaran::selectRaw("
                $t_ganti_rugi_uang.no_surat,
                $t_ganti_rugi_uang.nama,
                (DATE_FORMAT($t_ganti_rugi_uang.tanggal, '%d-%b-%Y')) as tanggal_str,
                $t_ganti_rugi_uang.oleh,
                $t_ganti_rugi_uang.nominal
            ")
                ->where("$t_ganti_rugi_uang.ganti_rugi_id", $ganti_rugis[$i]['id'])
                ->where("$t_ganti_rugi_uang.status", 1)
                ->whereRaw("($t_ganti_rugi_uang.tanggal >= '$filter_dari_tanggal' and $t_ganti_rugi_uang.tanggal <= '$filter_sampai_tanggal')")
                ->orderBy("$t_ganti_rugi_uang.tanggal", 'desc')->get();

            // ganti rugi barang
            $barangs = GantiRugiBarang::selectRaw("
                $t_ganti_rugi_barang.no_surat,
                (DATE_FORMAT($t_ganti_rugi_barang.tanggal, '%d-%b-%Y')) as tanggal_str,
                $t_ganti_rugi_barang.oleh,
                $t_barang_sewa.kode,
                $t_barang_sewa.nama as barang,
                $t_satuan.nama as satuan,
                $t_ganti_rugi_barang.qty
            ")
                ->join($t_barang_sewa, "$t_barang_sewa.id", '=', "$t_ganti_rugi_barang.barang")
                ->join($t_satuan, "$t_satuan.id", '=', "$t_barang_sewa.satuan")
                ->where("$t_ganti_rugi_barang.ganti_rugi_id", $ganti_rugis[$i]['id'])
                ->where("$t_ganti_rugi_barang.status", 1)
                ->whereRaw("($t_ganti_rugi_barang.tanggal >= '$filter_dari_tanggal' and $t_ganti_rugi_barang.tanggal <= '$filter_sampai_tanggal')")
                ->orderBy("$t_ganti_rugi_barang.tanggal", 'desc')->get();

            $ganti_rugis[$i]['uangs'] = (object) $uangs;
            $ganti_rugis[$i]['barangs'] = (object) $barangs;
            $ganti_rugis[$i] = (object) $ganti_rugis[$i];
        }

        // parse to object
        $data = compact('ganti_rugis', 'dari_tanggal', 'sampai_tanggal', 'search');
        $data['compact'] = $data;

        // dd($data['ganti_rugis']);
        // return view('administrasi.laporan.ganti_rugi_cetak', $data);
        view()->share('administrasi.laporan.ganti_rugi_cetak', $data);
        $pdf = PDF::loadView('administrasi.laporan.ganti_rugi_cetak', $data)
            ->setPaper('a4', 'landscape');

        $name = "Laporan Pengembalian Barang $dari_tanggal-$sampai_tanggal.pdf";
        return $pdf->stream($name);
        exit();
    }
}
