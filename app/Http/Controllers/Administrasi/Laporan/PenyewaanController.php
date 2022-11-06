<?php

namespace App\Http\Controllers\Administrasi\Laporan;

use App\Http\Controllers\Controller;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;
use App\Models\Barang\Sewa\Pengadaan;
use App\Models\Barang\Sewa\PengadaanList;
use App\Models\Customer;
use App\Models\Faktur;
use App\Models\GantiRugi;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\PenyewaanPembayaran;
use App\Models\SuratJalan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use PDF;

class PenyewaanController extends Controller
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
            'title' => 'Laporan Penyewaan',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Laporan'],
            ]
        ];
        return view('administrasi.laporan.penyewaan', compact('page_attr', 'date_end', 'date_start'));
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = Penyewaan::tableName;
        $t_customer = Customer::tableName;
        $t_surat_jalan = SuratJalan::tableName;
        $t_ganti_rugi = GantiRugi::tableName;

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
        $c_tanggal_pakai_dari_str = 'tanggal_pakai_dari_str';
        $c_tanggal_pakai_sampai_str = 'tanggal_pakai_sampai_str';
        $c_tanggal_kirim_str = 'tanggal_kirim_str';
        $c_tanggal_order_str = 'tanggal_order_str';
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));
        $this->query = array_merge($this->query, $date_format_fun('tanggal_pakai_dari', '%d-%b-%Y', $c_tanggal_pakai_dari_str));
        $this->query = array_merge($this->query, $date_format_fun('tanggal_pakai_sampai', '%d-%b-%Y', $c_tanggal_pakai_sampai_str));
        $this->query = array_merge($this->query, $date_format_fun('tanggal_kirim', '%d-%b-%Y', $c_tanggal_kirim_str));
        $this->query = array_merge($this->query, $date_format_fun('tanggal_order', '%d-%b-%Y', $c_tanggal_order_str));

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

        // customer
        $c_customer_nama = 'customer_nama';
        $this->query[$c_customer_nama] = "$t_customer.nama";
        $this->query["{$c_customer_nama}_alias"] = $c_customer_nama;

        // customer
        $c_customer_alamat = 'customer_alamat';
        $this->query[$c_customer_alamat] = "$t_customer.alamat";
        $this->query["{$c_customer_alamat}_alias"] = $c_customer_alamat;

        // status
        $c_status_str = 'status_str';
        $this->query[$c_status_str] = <<<SQL
            (if($table.status = 1,'Penyewaan Dibuat', 
            if($table.status = 2,'Faktur Dibuat', 
            if($table.status = 3,'Barang Diambil', 
            if($table.status = 4,'Barang Dikembalikan', 
            if($table.status = 5,'Selesai',  
            if($table.status = 9,'Dibatalkan',  'Tidak Diketahui')))))))
        SQL;
        $this->query["{$c_status_str}_alias"] = $c_status_str;

        // status_pembayaran
        $c_status_pembayaran_str = 'status_pembayaran_str';
        $this->query[$c_status_pembayaran_str] = <<<SQL
            (if($table.status_pembayaran = 1,'Lunas', 'Belum Lunas'))
        SQL;
        $this->query["{$c_status_pembayaran_str}_alias"] = $c_status_pembayaran_str;

        // status_pengambilan
        $c_status_pengambilan_str = 'status_pengambilan_str';
        $this->query[$c_status_pengambilan_str] = <<<SQL
            (if($t_surat_jalan.status = 1,'Data Disimpan', 
            if($t_surat_jalan.status = 2,'Barang Dikirim',
            if($t_surat_jalan.status = 3,'Pengembalian Disimpan',
            if($t_surat_jalan.status = 4,'Pengembalian Selesai', 'Data Dibuat')))))
        SQL;
        $this->query["{$c_status_pengambilan_str}_alias"] = $c_status_pengambilan_str;

        // proses_penyewaan
        $c_proses_penyewaan = 'proses_penyewaan';
        $this->query[$c_proses_penyewaan] = <<<SQL
            (if($t_surat_jalan.status = 0,'pengiriman', 
            if($t_surat_jalan.status = 1,'pengiriman',
            if($t_surat_jalan.status = 2,'pengembalian',
            if($t_surat_jalan.status = 3,'pengembalian', 
            if($t_surat_jalan.status = 4,'pengembalian', 'pengiriman'))))))
        SQL;
        $this->query["{$c_proses_penyewaan}_alias"] = $c_proses_penyewaan;

        // status_pengambilan
        $c_status_pengambilan = 'status_pengambilan';
        $this->query[$c_status_pengambilan] = "$t_surat_jalan.status";
        $this->query["{$c_status_pengambilan}_alias"] = $c_status_pengambilan;

        // status_ganti_rugi
        $c_status_ganti_rugi_str = 'status_ganti_rugi_str';
        $this->query[$c_status_ganti_rugi_str] = <<<SQL
                    (if($t_ganti_rugi.status = 0,'Data Dibuat',
                    if($t_ganti_rugi.status = 1,'Proses',
                    if($t_ganti_rugi.status = 2,'Selesai',
                    if($t_ganti_rugi.status is null,'Selesai', 'Tidak diketahui')))))
                SQL;
        $this->query["{$c_status_ganti_rugi_str}_alias"] = $c_status_ganti_rugi_str;

        // status_ganti_rugi
        $c_status_ganti_rugi = 'status_ganti_rugi';
        $this->query[$c_status_ganti_rugi] = <<<SQL
                    (if($t_ganti_rugi.status is null, 2 ,$t_ganti_rugi.status))
                SQL;
        $this->query["{$c_status_ganti_rugi}_alias"] = $c_status_ganti_rugi;

        // sisa
        $c_sisa = 'sisa';
        $this->query[$c_sisa] = <<<SQL
            ifnull(($table.total_harga - $table.dibayar),0)
        SQL;
        $this->query["{$c_sisa}_alias"] = $c_sisa;

        // pakai hari
        $c_pakai_hari = 'pakai_hari';
        $this->query[$c_pakai_hari] = '(DATEDIFF(tanggal_pakai_sampai, tanggal_pakai_dari)+1)';
        $this->query["{$c_pakai_hari}_alias"] = $c_pakai_hari;

        // tanggal_pengambilan
        $c_tanggal_pengambilan = 'tanggal_pengambilan';
        $this->query[$c_tanggal_pengambilan] = "date_format($t_surat_jalan.tanggal, '%d-%b-%Y')";
        $this->query["{$c_tanggal_pengambilan}_alias"] = $c_tanggal_pengambilan;
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
            $c_tanggal_pakai_dari_str,
            $c_tanggal_pakai_sampai_str,
            $c_tanggal_order_str,
            $c_customer_nama,
            $c_pakai_hari,
            $c_tanggal_kirim_str,
            $c_status_str,
            $c_status_pembayaran_str,
            $c_sisa,
            $c_tanggal_pengambilan,
            $c_status_pengambilan,
            $c_status_pengambilan_str,
            $c_proses_penyewaan,
            $c_customer_alamat,
            $c_status_ganti_rugi_str,
            $c_status_ganti_rugi
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = Penyewaan::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by")
            ->leftJoin($t_surat_jalan, "$t_surat_jalan.penyewaan", '=', "$table.id")
            ->leftJoin($t_ganti_rugi, "$t_ganti_rugi.penyewaan_id", '=', "$table.id")
            ->leftJoin($t_customer, "$t_customer.id", '=', "$table.customer");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [$c_status_pengambilan_str, $c_proses_penyewaan];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v)) {
                $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = ['updated_by', 'created_by', 'customer', 'status', 'status_pembayaran', 'status_pengembalian'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }

        $model->where("$table.status", '<>', 0);

        $model->whereRaw("($table.tanggal_order >= '{$request->filter['dari_tanggal']}' and $table.tanggal_order <= '{$request->filter['sampai_tanggal']}')");
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
            $search_add = ['customer', 'lokasi', 'tanggal_kirim', 'tanggal_pakai_dari', 'tanggal_pakai_sampai', 'kepada', 'tanggal_order', 'status', 'total_harga', 'dibayar', 'status_pembayaran', 'batal_keterangan', 'batal_tanggal', 'batal_oleh', 'updated_by', 'created_by', 'number'];
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
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_barang_sewa = Sewa::tableName;
        $t_barang_hbs = HabisPakai::tableName;
        $t_satuan = Satuan::tableName;

        $penyewaans = $this->datatable($request);
        $penyewaans = $penyewaans->original['data'];
        $dari_tanggal = Carbon::parse($request->filter['dari_tanggal'])
            ->isoFormat("D MMMM Y");
        $sampai_tanggal = Carbon::parse($request->filter['sampai_tanggal'])
            ->isoFormat("D MMMM Y");
        $search = request('search');
        $search = isset($search['value']) ? $search['value'] : null;


        $total_harga = 0;
        $dibayar = 0;

        for ($i = 0; $i < count($penyewaans); $i++) {
            // list barangs
            $barangs = PenyewaanBarang::selectRaw("
                $t_barang_sewa.kode,
                $t_barang_sewa.nama as barang,
                $t_satuan.nama as nama,
                $t_penyewaan_barang.qty as qty,
                $t_penyewaan_barang.harga as harga,
                ($t_penyewaan_barang.harga*$t_penyewaan_barang.qty) as total_harga,
                $t_penyewaan_barang.keterangan as keterangan
            ")
                ->join($t_barang_sewa, "$t_barang_sewa.id", '=', "$t_penyewaan_barang.barang")
                ->join($t_satuan, "$t_satuan.id", '=', "$t_barang_sewa.satuan")
                ->where("$t_penyewaan_barang.penyewaan", '=', $penyewaans[$i]['id'])
                ->orderBy("$t_barang_sewa.nama")->get();

            $penyewaans[$i]['barangs'] = (object) $barangs;
            $penyewaans[$i] = (object) $penyewaans[$i];

            $total_harga += $penyewaans[$i]->total_harga;
            $dibayar += $penyewaans[$i]->dibayar;
        }

        // parse to object

        // dd($penyewaans);

        $sisa = $total_harga - $dibayar;

        $data = compact('penyewaans', 'dari_tanggal', 'sampai_tanggal', 'search', 'total_harga', 'dibayar', 'sisa');


        $data['compact'] = $data;

        // dd($data);
        // return view('administrasi.laporan.penyewaan_cetak', $data);
        view()->share('administrasi.laporan.penyewaan_cetak', $data);
        $pdf = PDF::loadView('administrasi.laporan.penyewaan_cetak', $data)
            ->setPaper('a4', 'landscape');

        $name = "Laporan Penyewaan $dari_tanggal-$sampai_tanggal.pdf";
        return $pdf->stream($name);
        exit();
    }
}
