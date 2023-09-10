<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Controller;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\HabisPakai\Pengadaan as HabisPakaiPengadaan;
use App\Models\Barang\HabisPakai\PengadaanList as HabisPakaiPengadaanList;
use App\Models\Barang\HabisPakai\Pengurangan as HabisPakaiPengurangan;
use App\Models\Barang\HabisPakai\PenguranganList as HabisPakaiPenguranganList;
use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;
use App\Models\Barang\Sewa\Pengadaan;
use App\Models\Barang\Sewa\PengadaanList;
use App\Models\Barang\Sewa\Pengurangan;
use App\Models\Barang\Sewa\PenguranganList;
use App\Models\Customer;
use App\Models\Faktur;
use App\Models\GantiRugi;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\PenyewaanPembayaran;
use App\Models\SuratJalan;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PenyewaanController extends Controller
{
    private $validate_model = [
        'customer' => ['required', 'int'],
        'lokasi' => ['required', 'string'],
        'kepada' => ['required', 'string'],
        'tanggal_pakai_dari' => ['required', 'date'],
        'tanggal_pakai_sampai' => ['required', 'date'],
        'tanggal_kirim' => ['required', 'date'],
        'tanggal_order' => ['required', 'string'],
        'durasi_pakai' => ['required', 'int'],
    ];

    private $validate_model_barang = [
        'penyewaan' => ['required', 'int'],
        'barang' => ['required', 'int'],
        'keterangan' => ['nullable', 'string'],
        'harga' => ['required', 'int', 'min:1', 'max:9999999999'],
        'qty' => ['required', 'int', 'min:1', 'max:9999999999'],
    ];

    private $query = [];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }

        $page_attr = [
            'title' => 'Penyewaan',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        $dashboardController = new DashboardController();
        $years = $dashboardController->getYear();
        if (auth_has_role(6)) {
            return view('gm.penyewaan.penyewaan', compact('page_attr', 'years'));
        } else if (auth_has_role([7, 8])) {
            return view('gudang.penyewaan.penyewaan', compact('page_attr', 'years'));
        }
        return view('administrasi.penyewaan.penyewaan', compact('page_attr', 'years'));
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

        // tanggal_kembali
        $c_tanggal_kembali = 'tanggal_kembali';
        $this->query[$c_tanggal_kembali] = "$t_surat_jalan.tanggal_kembali";
        $this->query["{$c_tanggal_kembali}_alias"] = $c_tanggal_kembali;

        // tanggal_kembali
        $c_tanggal_kembali_str = 'tanggal_kembali_str';
        $this->query[$c_tanggal_kembali_str] = "(DATE_FORMAT($t_surat_jalan.tanggal_kembali, '%d-%b-%Y'))";
        $this->query["{$c_tanggal_kembali_str}_alias"] = $c_tanggal_kembali_str;

        // tanggal_kembali
        $c_tanggal_pengambilan = 'tanggal_pengambilan';
        $this->query[$c_tanggal_pengambilan] = "$t_surat_jalan.tanggal";
        $this->query["{$c_tanggal_pengambilan}_alias"] = $c_tanggal_pengambilan;

        // tanggal_pengambilan
        $c_tanggal_pengambilan_str = 'tanggal_pengambilan_str';
        $this->query[$c_tanggal_pengambilan_str] = "(DATE_FORMAT($t_surat_jalan.tanggal, '%d-%b-%Y'))";
        $this->query["{$c_tanggal_pengambilan_str}_alias"] = $c_tanggal_pengambilan_str;

        // status
        $c_status_str = 'status_str';
        $this->query[$c_status_str] = <<<SQL
            (if($table.status = 1,'Belum Selesai', 
            if($table.status = 2,'Pengiriman Barang', 
            if($table.status = 3,'Barang di Customer', 
            if($table.status = 4,'Pengambalian Barang', 
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
            if($t_surat_jalan.status = 3,'Pengambilan Disimpan',
            if($t_surat_jalan.status = 4,'Pengambilan Selesai', 'Data Dibuat')))))
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
            $c_status_ganti_rugi,
            $c_tanggal_kembali,
            $c_tanggal_kembali_str,
            $c_tanggal_pengambilan,
            $c_tanggal_pengambilan_str,
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

        if (isset($request->filter['bulan']) && isset($request->filter['tahun'])) {
            $bulan = $request->filter['bulan'];
            $tahun = $request->filter['tahun'];
            $bulan_next = $bulan == 12 ? 1 : $bulan + 1;
            $tahun_next = $bulan == 12 ? $tahun + 1 : $tahun;
            $model->whereRaw("($table.tanggal_order >= '$tahun-$bulan-01' and $table.tanggal_order < '$tahun_next-$bulan_next-01')");
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

    public function delete(Penyewaan $model): mixed
    {
        try {
            DB::beginTransaction();

            // data pembayaran ========================================================================================
            $pembayarans = PenyewaanPembayaran::where('penyewaan', $model->id)->get();
            foreach ($pembayarans as $pembayaran) {
                $faktur = $pembayaran->faktur;
                $faktur_barangs = $faktur->barangs;

                // delete faktur barang
                foreach ($faktur_barangs as $barang) {
                    $barang->delete();
                }

                // delete faktur
                $faktur->delete();
            }
            // delete pembayaran
            foreach ($pembayarans as $pembayaran) {
                $pembayaran->delete();
            }

            // Data surat jalan =======================================================================================
            $surat_jalan = SuratJalan::where('penyewaan', $model->id)->first();
            $surat_jalan_barang_sewa = $surat_jalan->barang_sewas;
            $surat_jalan_barang_habis_pakai = $surat_jalan->barang_habis_pakais;

            // delete surat jalan barang
            foreach ($surat_jalan_barang_sewa as $barang_sewa) {
                $barang_data = $barang_sewa->barang_data;
                if ($surat_jalan->status >= 4) {
                    // status 4 Pengembalian Selesai berarti barang rusak atau hilang sudah di simpan ke stok
                    // ubah barang rusak dan barang hilang

                    // set barang rusak
                    $barang_data->qty_rusak = $barang_data->qty_rusak - $barang_sewa->pengembalian_rusak;

                    // set barang rusak di qty ada
                    $barang_data->qty_ada = $barang_data->qty_ada + $barang_sewa->pengembalian_rusak;
                    $barang_data->save();
                }
                // status 2 Barang Dikirim, 3 Pengambilan Disimpan
                else if ($surat_jalan->status >= 2 && $surat_jalan->status < 4) {
                    // ubah barang rusak dan barang hilang
                    // set barang disewa
                    $barang_data->qty_disewakan = $barang_data->qty_disewakan - $barang_sewa->qty;

                    // set barang ada
                    $barang_data->qty_ada = $barang_data->qty_ada + $barang_sewa->qty;
                    $barang_data->save();
                }

                $barang_sewa->delete();
            }

            // delete surat jalan habis pakai
            foreach ($surat_jalan_barang_habis_pakai as $barang_habis_pakai) {
                $barang_habis_pakai->delete();
            }

            // delete surat jalan
            $surat_jalan->delete();

            // Data ganti rugi ========================================================================================
            $ganti_rugi = GantiRugi::where('penyewaan_id', $model->id)->first();
            if ($ganti_rugi) {
                $ganti_rugi_list_barangs = $ganti_rugi->list_barang ?? [];
                $ganti_rugi_pembayarans = $ganti_rugi->pembayaran ?? [];
                $ganti_rugi_ganti_barangs = $ganti_rugi->ganti_barangs ?? [];

                // delete ganti list barang
                foreach ($ganti_rugi_list_barangs as $barang) {
                    $barang->delete();
                }

                // delete ganti pembayaran
                foreach ($ganti_rugi_pembayarans as $pembayaran) {
                    $pembayaran->delete();
                }

                // delete ganti barang
                foreach ($ganti_rugi_ganti_barangs as $barang) {
                    $barang->delete();
                }

                // delete ganti rugi
                $ganti_rugi->delete();
            }

            // Sinkron data barang ====================================================================================
            // delete pengadaan barang (sinkron dengan data barang) sewa
            $pengadaans = Pengadaan::where('penyewaan', $model->id)->get();
            foreach ($pengadaans as $pengadaan) {
                $pengadaan_barang_sewa = PengadaanList::where('pengadaan', $pengadaan->id)->get();
                foreach ($pengadaan_barang_sewa as $pengadaan) {
                    $barang = Sewa::findOrFail($pengadaan->barang);
                    $barang->qty_total = $barang->qty_total - $pengadaan->qty;
                    $barang->qty_ada = $barang->qty_ada - $pengadaan->qty;
                    $barang->save();
                    $pengadaan->delete();
                }
                // delete pengadaan
                $pengadaan->delete();
            }

            // delete pengurangan barang (sinkron dengan data barang) sewa
            $pengurangans = Pengurangan::where('penyewaan', $model->id)->get();
            foreach ($pengurangans as $pengurangan) {
                $pengurangan_barang_sewa = PenguranganList::where('pengurangan', $pengurangan->id)->get();
                foreach ($pengurangan_barang_sewa as $pengurangan) {
                    $barang = Sewa::findOrFail($pengurangan->barang);
                    $barang->qty_total = $barang->qty_total + $pengurangan->qty;
                    $barang->qty_ada = $barang->qty_ada + $pengurangan->qty;
                    $barang->save();
                    $pengurangan->delete();
                }
                // delete pengurangan
                $pengurangan->delete();
            }

            // delete pengurangan barang (sinkron dengan data barang) habis pakai
            $pengurangans = HabisPakaiPengurangan::where('penyewaan', $model->id)->get();
            foreach ($pengurangans as $pengurangan) {
                $pengurangan_barang_sewa = HabisPakaiPenguranganList::where('pengurangan', $pengurangan->id)->get();
                foreach ($pengurangan_barang_sewa as $pengurangan) {
                    $barang = HabisPakai::findOrFail($pengurangan->barang);
                    $barang->qty = $barang->qty + $pengurangan->qty;
                    $barang->save();
                    $pengurangan->delete();
                }
                // delete pengurangan
                $pengurangan->delete();
            }

            // delete penyewaan barang
            $penyewaan_barangs = $model->barangs;
            foreach ($penyewaan_barangs as $barang) {
                $barang->delete();
            }

            // delete penyewaan
            $model->delete();
            DB::commit();
            return response()->json($model);

            // old ====================================================================================================
            // penyewaan bisa di hapus jika status nya sama dengan 1
            // if ($model->status == 1 || $model->status == 9) {
            //     $model->delete();
            //     return response()->json($model);
            // } else {
            //     return response()->json([
            //         'message' => 'Peyewaan tidak dapat dihapus karena faktur sudah dibuat. silahkan batalkan saja.',
            //         'error' => '',
            //     ], 500);
            // }
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function detail(Request $request): mixed
    {
        $table = Penyewaan::tableName;
        $t_user = User::tableName;
        $t_faktur = Faktur::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_barang = Sewa::tableName;
        $t_customer = Customer::tableName;
        $t_pembayaran = PenyewaanPembayaran::tableName;
        $t_created_by = 'b';
        $t_updated_by = 'c';

        $model = Penyewaan::select([
            DB::raw("$table.id"),
            DB::raw("$table.number"),
            DB::raw("$table.lokasi"),
            DB::raw("$table.kepada"),
            DB::raw("$table.total_harga"),
            DB::raw("($table.total_harga - $table.dibayar) as sisa"),
            DB::raw("$table.dibayar"),
            DB::raw("($t_customer.nama) as customer"),
            DB::raw("($t_customer.alamat) as customer_alamat"),
            DB::raw("($t_customer.no_telepon) as customer_no_telepon"),
            DB::raw("($t_customer.no_whatsapp) as customer_no_whatsapp"),
            DB::raw("date_format($table.created_at,'%W, %d %M %Y %H:%i:%s') as created_at_str"),
            DB::raw("date_format($table.updated_at,'%W, %d %M %Y %H:%i:%s') as updated_at_str"),
            DB::raw("date_format($table.tanggal_pakai_dari,'%d-%b-%Y') as tanggal_pakai_dari"),
            DB::raw("date_format($table.tanggal_pakai_sampai,'%d-%b-%Y') as tanggal_pakai_sampai"),
            DB::raw("date_format($table.tanggal_kirim,'%d-%b-%Y') as tanggal_kirim"),
            DB::raw("date_format($table.tanggal_order,'%d-%b-%Y') as tanggal_order"),
            DB::raw("(DATEDIFF($table.tanggal_pakai_sampai, $table.tanggal_pakai_sampai)+1) as tanggal_pakai_lama"),
            DB::raw("$table.status"),
            DB::raw(<<<SQL
                (if($table.status = 1,'Penyewaan Dibuat', 
                if($table.status = 2,'Faktur Dibuat', 
                if($table.status = 3,'Barang Diambil', 
                if($table.status = 4,'Barang Dikembalikan', 
                if($table.status = 5,'Selesai',  
                if($table.status = 9,'Dibatalkan',  'Tidak Diketahui')))))))as status_str
            SQL),
            DB::raw("$table.status_pembayaran"),
            DB::raw("(if($table.status_pembayaran = 1,'Lunas', 'Belum Lunas')) as status_pembayaran_str"),

            DB::raw("$t_created_by.name as created_by_str"),
            DB::raw("$t_updated_by.name as updated_by_str"),
        ])
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by")
            ->leftJoin($t_customer, "$t_customer.id", '=', "$table.customer")
            ->where("$table.id", $request->id)->first();

        if (is_null($model)) return abort(404);
        // barang list =================================================================================================
        $barangs = PenyewaanBarang::select([
            DB::raw("$t_penyewaan_barang.id"),
            DB::raw("$t_penyewaan_barang.qty"),
            DB::raw("$t_penyewaan_barang.harga"),
            DB::raw("($t_penyewaan_barang.harga * $t_penyewaan_barang.qty) as harga_total"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("date_format($t_penyewaan_barang.created_at,'%d-%b-%Y') as created_at_str"),
            DB::raw("date_format($t_penyewaan_barang.updated_at,'%d-%b-%Y') as updated_at_str"),
            DB::raw("$t_created_by.name as created_by_str"),
            DB::raw("$t_updated_by.name as updated_by_str"),
        ])
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$t_penyewaan_barang.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$t_penyewaan_barang.updated_by")
            ->leftJoin($t_barang, "$t_barang.id", '=', "$t_penyewaan_barang.barang")
            ->where('penyewaan', $model->id)
            ->get();
        $model->barangs = $barangs;

        $pembayarans = PenyewaanPembayaran::select([
            DB::raw("$t_pembayaran.id"),
            DB::raw("$t_pembayaran.nama"),
            DB::raw("$t_pembayaran.nominal"),
            DB::raw("$t_pembayaran.keterangan"),
            DB::raw("$t_faktur.no_faktur"),
            DB::raw("$t_faktur.jumlah"),
            DB::raw("$t_faktur.sisa"),
            DB::raw("date_format($t_pembayaran.tanggal,'%d-%b-%Y') as tanggal"),
            DB::raw("date_format($t_pembayaran.created_at,'%d-%b-%Y') as created_at_str"),
            DB::raw("date_format($t_pembayaran.updated_at,'%d-%b-%Y') as updated_at_str"),
            DB::raw("$t_created_by.name as created_by_str"),
            DB::raw("$t_updated_by.name as updated_by_str"),
        ])
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$t_pembayaran.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$t_pembayaran.updated_by")
            ->leftJoin($t_faktur, "$t_faktur.pembayaran", '=', "$t_pembayaran.id")
            ->where('penyewaan', $model->id)
            ->get();
        $model->pembayarans = $pembayarans;

        return $model;
    }

    // reciving order =================================================================================================
    public function reciving_order(Request $request)
    {
        if (request()->ajax()) {
            return $this->reciving_order_datatable($request);
        }

        $user_id = auth()->user()->id;
        $model = Penyewaan::where('status', 0)->where('created_by', $user_id)->first();
        if (is_null($model)) {
            $model = new Penyewaan();
            $model->status = 0;
            $model->created_by = $user_id;
            $max_id = Penyewaan::max('number');
            $max_id = $max_id ?? 'SP/00001';
            $max_id = (int)str_replace('SP/', '', $max_id);
            $max_id++;
            $model->number = 'SP/' . str_pad($max_id, 5, '0', STR_PAD_LEFT);
            $model->save();
        }
        $customer = Customer::find($model->customer);

        $model->customer_nama = is_null($customer) ? null : $customer->nama;
        if ($model->tanggal_pakai_dari != null) {
            $date = date_create($model->tanggal_pakai_dari);
            $date2 = date_create($model->tanggal_pakai_sampai);
            $model->durasi_pakai = $date->diff($date2)->d + 1;
        } else {
            $model->durasi_pakai = 1;
        }

        if (is_null($model->tanggal_order)) {
            $model->tanggal_order = date('Y-m-d');
        }

        $page_attr = [
            'title' => 'Reciving Order',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Penyewaan Barang', 'url' => h_prefix(null, 1)],
            ],
            'navigation' => h_prefix(null, 1)
        ];
        $is_edit = false;
        return view('administrasi.penyewaan.reciving_order', compact('page_attr', 'model', 'is_edit'));
    }

    public function reciving_order_update(Penyewaan $model, Request $request)
    {
        if (!is_admin() && $model->status > 2) {
            return abort(404);
        }

        if (request()->ajax()) {
            return $this->reciving_order_datatable($request);
        }

        $page_attr = [
            'title' => 'Reciving Order',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Penyewaan Barang', 'url' => h_prefix(null, 2)],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $customer = Customer::find($model->customer);

        $model->customer_nama = is_null($customer) ? null : $customer->nama;
        if ($model->tanggal_pakai_dari != null) {
            $date = date_create($model->tanggal_pakai_dari);
            $date2 = date_create($model->tanggal_pakai_sampai);
            $model->durasi_pakai = $date->diff($date2)->d + 1;
        } else {
            $model->durasi_pakai = 1;
        }

        $is_edit = true;
        return view('administrasi.penyewaan.reciving_order', compact('page_attr', 'model', 'is_edit'));
    }

    public function reciving_order_datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = PenyewaanBarang::tableName;
        $t_barang = Sewa::tableName;

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
        $this->query[$c_barang_qty_total] = "($t_barang.qty_total-$t_barang.qty_rusak)";
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
        $model = PenyewaanBarang::select(array_merge([
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
        $filters = ['updated_by', 'created_by', 'penyewaan'];
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
                "$table.penyewaan",
                "$table.barang",
                "$table.qty",
                "$table.harga",
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
        $result = $datatable->make(true)->getData();

        // total penyewaan
        $penyewaan = PenyewaanBarang::selectRaw("sum(harga * qty) as total")->where('penyewaan', $f_c('penyewaan'))->first();

        $result->total = $penyewaan->total;
        return $result;
    }

    public function save(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            $model = Penyewaan::find($request->id);

            if (!is_admin() && $model->status > 2) {
                return response()->json([
                    'message' => 'Reciving order tidak boleh diubah, ketika barang sudah diambil.',
                ], 500);
            }

            if ($request->is_edit == 0) {
                $model->status = 1;
                $model->created_by = auth()->user()->id;
            } else {
                $model->updated_by = auth()->user()->id;
            }

            $model->number = $request->number;
            $model->customer = $request->customer;
            $model->lokasi = $request->lokasi;
            $model->kepada = $request->kepada;
            $model->tanggal_kirim = $request->tanggal_kirim;
            $model->tanggal_pakai_dari = $request->tanggal_pakai_dari;
            $model->tanggal_pakai_sampai = $request->tanggal_pakai_sampai;
            $model->tanggal_order = $request->tanggal_order;
            $model->total_harga = $request->total_harga ?? 0;
            $model->save();

            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function customer_select2(Request $request)
    {
        try {
            $model = Customer::selectRaw("id, concat(nama,' | ',alamat) as text, alamat, nama")
                ->whereRaw("(
                    `nama` like '%$request->search%' or
                    `alamat` like '%$request->search%' or
                    `no_whatsapp` like '%$request->search%' or
                    `no_telepon` like '%$request->search%' or
                    `id` like '%$request->search%'
                    )")
                ->limit(50)
                ->orderBy('updated_at', 'desc')->get()->toArray();

            if ($request->semua = 1) {
                $model = array_merge([['id' => '', 'text' => 'Semua']], $model);
            }

            return response()->json(['results' => $model]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }

    public function barang_select2(Request $request)
    {
        try {
            $penyewaan = $request->penyewaan;
            $penyewaan_model = Penyewaan::selectRaw("tanggal_pakai_dari as dari,
                tanggal_pakai_sampai as sampai,
                concat(date_format(tanggal_pakai_dari, '%d-%b-%Y'), ' s/d ',date_format(tanggal_pakai_sampai, '%d-%b-%Y')) tanggal")
                ->where('id', $penyewaan)->first();

            $t_barang = Sewa::tableName;
            $t_penyewaan_barang = PenyewaanBarang::tableName;
            $t_jenis = Jenis::tableName;
            $t_satuan = Satuan::tableName;
            $t_penyewaan = Penyewaan::tableName;

            $list_id = $request->list_id;
            $list = PenyewaanBarang::find($list_id);
            $barang = is_null($list) ? '' : $list->barang;

            $query_stok_pada_tanggal = <<<SQL
                (ifnull(( select sum(qty) from $t_penyewaan_barang as z 
                    join $t_penyewaan as y on y.id = z.penyewaan
                    where 
                    (z.barang = $t_barang.id 
                    and ( 
                        (y.tanggal_pakai_dari >= '$penyewaan_model->dari' && y.tanggal_pakai_dari <= '$penyewaan_model->sampai') or 
                        (y.tanggal_pakai_sampai >= '$penyewaan_model->dari' && y.tanggal_pakai_sampai <= '$penyewaan_model->sampai') 
                    )) 
                    and (y.id != '$penyewaan' and ((y.status = 1 or y.status = 2) and (y.status <> 9)))),0))
            SQL;

            $model = Sewa::selectRaw("
                $t_barang.id,
                concat($t_barang.kode,' | ',$t_barang.nama, ' (', ($t_barang.qty_total-$t_barang.qty_rusak), ') ') as text,
                $t_barang.harga,
                (($t_barang.qty_total-$t_barang.qty_rusak) - $query_stok_pada_tanggal) as barang_qty_total,
                `$t_jenis`.`nama` as jenis, 
                `$t_satuan`.`nama` as satuan,
                ('$penyewaan_model->tanggal') as pada_tanggal")
                ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
                ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
                ->whereRaw(<<<SQL
                    ( `$t_jenis`.`nama` like '%$request->search%' or
                    `$t_satuan`.`nama` like '%$request->search%' or
                    `$t_barang`.`nama` like '%$request->search%' or
                    `$t_barang`.`kode` like '%$request->search%' or
                    `$t_barang`.`harga` like '%$request->search%' or
                    `$t_barang`.`id` like '%$request->search%'
                    ) and (($t_barang.id not in (SELECT barang FROM `$t_penyewaan_barang` WHERE `$t_penyewaan_barang`.`penyewaan` = '$penyewaan')) or $t_barang.id = '$barang')
                SQL)
                ->limit(50);

            $result = $model->get()->toArray();
            return response()->json(['results' => $result]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }

    public function reciving_order_barang_insert(Request $request)
    {
        $request->validate($this->validate_model_barang);
        DB::beginTransaction();
        $model = new PenyewaanBarang();
        $model->penyewaan = $request->penyewaan;
        $model->barang = $request->barang;
        $model->keterangan = $request->keterangan;
        $model->harga = $request->harga;
        $model->qty = $request->qty;
        $model->created_by = auth()->user()->id;
        $model->save();

        DB::commit();
        return response()->json($model);
    }

    public function reciving_order_barang_update(Request $request)
    {
        $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_model_barang));
        DB::beginTransaction();
        $model = PenyewaanBarang::findOrFail($request->id);
        $model->penyewaan = $request->penyewaan;
        $model->barang = $request->barang;
        $model->keterangan = $request->keterangan;
        $model->harga = $request->harga;
        $model->qty = $request->qty;
        $model->updated_by = auth()->user()->id;
        $model->save();

        DB::commit();
        return response()->json($model);
    }

    public function reciving_order_barang_delete(PenyewaanBarang $model): mixed
    {
        try {
            DB::beginTransaction();
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

    public function reciving_order_barang_find(Request $request)
    {
        $t_barang = Sewa::tableName;
        $t_jenis = Jenis::tableName;
        $t_satuan = Satuan::tableName;
        $table = PenyewaanBarang::tableName;

        $model = PenyewaanBarang::selectRaw("
            $table.id,
            $table.penyewaan,
            $table.harga,
            $table.qty,
            $t_barang.id as barang_id, 
            ($t_barang.qty_total-$t_barang.qty_rusak) as barang_qty_total,
            concat($t_barang.kode,' | ',$t_barang.nama, ' (', ($t_barang.qty_total-$t_barang.qty_rusak), ') ') as barang_nama, 
            `$t_jenis`.`nama` as jenis, 
            `$t_satuan`.`nama` as satuan")
            ->leftJoin($t_barang, "$t_barang.id", '=', "$table.barang")
            ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
            ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
            ->where("$table.id", $request->id)->first();

        $penyewaan_model = Penyewaan::selectRaw("tanggal_pakai_dari as dari,
            tanggal_pakai_sampai as sampai,
            concat(date_format(tanggal_pakai_dari, '%d-%b-%Y'), ' s/d ',date_format(tanggal_pakai_sampai, '%d-%b-%Y')) tanggal")
            ->where('id', $model->penyewaan)->first();

        $model->pada_tanggal = $penyewaan_model->tanggal;
        return $model;
    }

    public function batalkan(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'alasan' => 'required|string',
        ]);
        DB::beginTransaction();
        $model = Penyewaan::findOrFail($request->id);
        $model->status = 9;
        $model->batal_keterangan = $request->keterangan;
        $model->batal_tanggal = date('Y-m-d H:i:s');
        $model->batal_oleh = auth()->user()->id;
        $model->save();

        DB::commit();
        return response()->json($model);
    }

    public function selesai(Penyewaan $model)
    {
        try {
            DB::beginTransaction();
            $model->status = 5;
            $model->save();

            // proses ganti rugi barang
            if ($model->ganti_rugi) {

                $penyewaan = $model;
                $pengadaan = new Pengadaan();
                $pengadaan->nama = "Ganti Rugi Barang Saat Penyewaan Dengan Surat Jalan Nomor $model->no_surat_jalan";
                $pengadaan->tanggal = date("Y-m-d H:i:s");
                $tanggal_penyewaan = $penyewaan->tanggal_pakai_dari == $penyewaan->tanggal_pakai_sampai
                    ? $penyewaan->tanggal_pakai_dari :
                    "$penyewaan->tanggal_pakai_dari s/d $penyewaan->tanggal_pakai_sampai";
                $pengadaan->keterangan = "Tanggal $tanggal_penyewaan, Di $penyewaan->kepada Lokasi $penyewaan->lokasi";
                $pengadaan->created_by = auth()->user()->id;
                $pengadaan->penyewaan = $penyewaan->id;
                $pengadaan->save();

                // simpan barang list
                foreach ($model->ganti_rugi->list_barang as $ganti_barang) {
                    // tambah qty barang
                    $barang = Sewa::findOrFail($ganti_barang->barang);
                    $barang->qty_total = $barang->qty_total + $ganti_barang->qty_diganti;
                    $barang->qty_ada = $barang->qty_ada + $ganti_barang->qty_diganti;
                    $barang->save();

                    $model = new PengadaanList();
                    $model->pengadaan = $pengadaan->id;
                    $model->barang = $ganti_barang->barang;
                    $model->harga = $ganti_barang->harga;
                    $model->qty = $ganti_barang->qty_diganti;
                    $model->created_by = auth()->user()->id;
                    $model->save();
                }
            }

            DB::commit();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }
}
