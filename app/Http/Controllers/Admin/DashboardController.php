<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\HabisPakai\Pengurangan;
use App\Models\Barang\HabisPakai\PenguranganList;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\GantiRugi;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\PenyewaanPembayaran;
use App\Models\Pesanan;
use App\Models\SuratJalan;
use App\Models\SuratJalanBarang;
use App\Models\SuratJalanBarangHabisPakai;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total = $this->getTotal();
        $ringkasan_penyewaan = $this->getRingkasanPenyewaan();
        $years = $this->getYear();
        $page_attr = ['title' => 'Dashboard'];
        $donat = collect();

        $data = compact(
            'page_attr',
            'total',
            'years',
            'ringkasan_penyewaan',
            'donat'
        );
        $data['compact'] = $data;
        if (auth_has_role('General Manager')) {
            return view('gm.dashboard', $data);
        } else if (auth_has_role('Kepala Bagian Warehouse')) {
            return view('gudang.dashboard', $data);
        }
        return view('admin.dashboard', $data);
    }

    private function getTotal()
    {
        $table = User::tableName;
        $tableNames = config('permission.table_names');
        $t_roles = $tableNames['roles'];
        $t_model_has_roles = $tableNames['model_has_roles'];

        $total = collect();
        // total penyewaan
        $total->penyewaan = Penyewaan::where('status', '<>', '0')
            ->where('status', '<>', '9')
            ->count();

        // total pesanan
        $total->pesanan = Pesanan::count();

        // total customer
        $total->customer = Customer::count();

        // total karyawan
        $total->karyawan = User::leftJoin($t_model_has_roles, "$t_model_has_roles.model_id", '=', "$table.id")
            ->leftJoin($t_roles, "$t_roles.id", '=', "$t_model_has_roles.role_id")
            ->where("$t_roles.name", '<>', config('app.super_admin_role'))->count();

        // qty barang rusak
        $total->barang_rusak = Sewa::sum('qty_rusak');

        $total->ganti_rugi = GantiRugi::count();

        return $total;
    }

    private function getRingkasanPenyewaan()
    {
        $result = collect();
        $hari_ini = date('Y-m-d');

        // Penyewaan
        // Penyewaan yang belum selesai
        $result->penyewaan = Penyewaan::where('status', '<>', 0)
            ->where('status', '<', 5)->count();

        // Total penyewaan
        $result->total_penyewaan = Penyewaan::where('status', '<>', 0)
            ->where('status', '<=', 5)->count();

        // Penyewaan Hari ini
        // barang diambil dan penggunaan nya hari ini
        $result->penyewaan_hari_ini = Penyewaan::where('status', 3)->whereRaw("('$hari_ini' >= tanggal_pakai_dari and '$hari_ini' <= tanggal_pakai_sampai)")->count();

        // Pembayaran
        // Penyewaan yang belum lunas
        $result->pembayaran = Penyewaan::where('status', '<>', 0)
            ->where('status_pembayaran', '<', 1)->count();

        // jumlah total pembayaran
        $result->jml_pembayaran = PenyewaanPembayaran::count();

        //  Pengambilan Barang
        // Penyewaan yang barang nya belum dikirim
        $result->pengambilan = Penyewaan::where('status', '=', 2)->count();

        // barang yang harus di kirim hari ini
        $result->pengiriman_hari_ini = Penyewaan::where('status', '=', 2)->where('tanggal_kirim', $hari_ini)->count();

        //  Pengembalian Barang
        // Penyewaan yang barang nya sedang ada di luar
        $result->pengembalian = Penyewaan::where('status', '=', 3)->count();

        // barang yang harus di kirim hari ini
        $result->pengembalian_hari_ini = Penyewaan::where('status', '=', 3)->where('tanggal_pakai_sampai', '<', $hari_ini)->count();

        //  Ganti Rugi
        // Penyewan yang ganti rugi nya belum selesai
        $result->ganti_rugi = GantiRugi::where('status', '<', 2)->count();

        return $result;
    }

    // statistik
    public function getYear()
    {
        // menggunakan tanggal reciving order
        $t_penyewaan = Penyewaan::tableName;
        $get = DB::table($t_penyewaan)
            ->selectRaw("distinct(year(tanggal_order)) as year")
            ->where('status', '<>', 0)->get();
        return $get;
    }

    private function monthForLoop(?int $year = null)
    {
        $year = $year ?? date('Y');
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $item = collect();
            if ($i == 12) {
                $item->start = "$year-12-01";
                $year++;
                $item->end = date('Y-m-d', strtotime("$year-01-01 - 1 days"));
                $item->name = Carbon::parse($item->start)->isoFormat("MMM");
            } else {
                $month = $i < 9 ?  "0$i" : $i;
                $item->start = "$year-$month-01";
                $month++;
                $item->end = date('Y-m-d', strtotime("$year-$month-01 - 1 days"));
                $item->name = Carbon::parse($item->start)->isoFormat("MMM");
            }
            $results[] = $item;
        }
        return $results;
    }

    public function reciving_order(Request $request)
    {
        $year_ = $request->year ?? date('Y');
        $results = [];
        $years = $this->monthForLoop($year_);
        foreach ($years as $month) {
            $item['name'] = $month->name;
            $item['data'] = Penyewaan::where('status', '<>', '0')
                ->where('status', '<>', '9')
                ->where('tanggal_order', '>=', $month->start)
                ->where('tanggal_order', '<=', $month->end)
                ->count();
            $results[] = $item;
        }
        return response()->json(['data' => $results, 'title' => "Reciving Order $year_"]);
    }

    public function penyewaan_barang_rusak(Request $request)
    {
        $t_surat_jalan = SuratJalan::tableName;
        $table = SuratJalanBarang::tableName;
        $year_ = $request->year ?? date('Y');
        $results = [];
        $years = $this->monthForLoop($year_);
        foreach ($years as $month) {
            $item['name'] = $month->name;
            $item['data'] = SuratJalanBarang::selectRaw("count(*) as barang, ifnull(sum(surat_jalan_barang.pengembalian_rusak),0) as qty")
                ->join($t_surat_jalan, "$t_surat_jalan.id", '=', "$table.surat_jalan")
                ->where("$t_surat_jalan.status", '4') // status selesai
                ->where("$t_surat_jalan.tanggal", '>=', $month->start)
                ->where("$t_surat_jalan.tanggal", '<=', $month->end)
                ->where("$table.pengembalian_rusak", '>', 0)
                ->limit(1)->first();
            $results[] = $item;
        }
        return response()->json(['data' => $results, 'title' => "Penyewaan Barang Rusak $year_"]);
    }

    public function penyewaan_barang_hilang(Request $request)
    {
        $t_surat_jalan = SuratJalan::tableName;
        $table = SuratJalanBarang::tableName;
        $year_ = $request->year ?? date('Y');
        $results = [];
        $years = $this->monthForLoop($year_);
        foreach ($years as $month) {
            $item['name'] = $month->name;
            $item['data'] = SuratJalanBarang::selectRaw("count(*) as barang, ifnull(sum(surat_jalan_barang.pengembalian_hilang),0) as qty")
                ->join($t_surat_jalan, "$t_surat_jalan.id", '=', "$table.surat_jalan")
                ->where("$t_surat_jalan.status", '4') // status selesai
                ->where("$t_surat_jalan.tanggal", '>=', $month->start)
                ->where("$t_surat_jalan.tanggal", '<=', $month->end)
                ->where("$table.pengembalian_hilang", '>', 0)
                ->limit(1)->first();
            $results[] = $item;
        }
        return response()->json(['data' => $results, 'title' => "Penyewaan Barang Hilang $year_"]);
    }

    public function penggunaan_bhs(Request $request)
    {
        $t_pengurangan = Pengurangan::tableName;
        $table = PenguranganList::tableName;
        $year_ = $request->year ?? date('Y');
        $results = [];
        $years = $this->monthForLoop($year_);
        foreach ($years as $month) {
            $item['name'] = $month->name;
            $item['data'] = PenguranganList::selectRaw("count(*) as barang, ifnull(sum($table.qty),0) as qty")
                ->join($t_pengurangan, "$t_pengurangan.id", '=', "$table.pengurangan")
                ->whereNotNull("$t_pengurangan.penyewaan") // ada penyewaan
                ->whereRaw("(date($t_pengurangan.tanggal) >= '$month->start' and date($t_pengurangan.tanggal) <= '$month->end')")
                ->first();
            $results[] = $item;
        }
        return response()->json(['data' => $results, 'title' => "Penggunaan Barang Habis Pakai $year_"]);
    }

    public function ganti_rugi(Request $request)
    {
        $t_penyewaan = Penyewaan::tableName;
        $table = GantiRugi::tableName;


        $year_ = $request->year ?? date('Y');
        $results = [];
        $years = $this->monthForLoop($year_);
        foreach ($years as $month) {
            $item['name'] = $month->name;
            $item['data'] = GantiRugi::selectRaw("ifnull(sum($table.dibayar_barang),0) as barang, ifnull(sum($table.dibayar),0) as uang")
                ->join($t_penyewaan, "$t_penyewaan.id", '=', "$table.penyewaan_id")
                ->where("$t_penyewaan.status", 5) // penyewaan selesai
                ->where("$t_penyewaan.tanggal_kirim", '>=', $month->start)
                ->where("$t_penyewaan.tanggal_kirim", '<=', $month->end)
                ->first();
            $results[] = $item;
        }
        return response()->json(['data' => $results, 'title' => "Perbandingan Ganti Rugi Barang Dengan Uang $year_"]);
    }

    // revisi
    public function barang_sewa(Request $request)
    {
        $t_a = PenyewaanBarang::tableName;
        $t_b = Penyewaan::tableName;
        $t_c = Sewa::tableName;
        $year = $request->year ?? date('Y');
        $results = PenyewaanBarang::selectRaw("$t_c.nama as name, SUM($t_a .qty) data")
            ->join($t_b, "$t_b.id", '=', "$t_a.penyewaan")
            ->join($t_c, "$t_c.id", '=', "$t_a.barang")
            ->whereRaw("YEAR($t_b.tanggal_order) = '$year'")
            ->groupBy("$t_a.barang")->get();

        return response()->json(['data' => $results, 'title' => "Barang Sewa"]);
    }

    public function barang_hs(Request $request)
    {
        $t_a = SuratJalanBarangHabisPakai::tableName;
        $t_b = SuratJalan::tableName;
        $t_c = Penyewaan::tableName;
        $t_d = HabisPakai::tableName;
        $year = $request->year ?? date('Y');
        $results = SuratJalanBarangHabisPakai::selectRaw("$t_d.nama as name, SUM($t_a.qty) data")
            ->join($t_b, "$t_b.id", '=', "$t_a.surat_jalan")
            ->join($t_c, "$t_c.id", '=', "$t_b.penyewaan")
            ->join($t_d, "$t_d.id", '=', "$t_a.barang_id")
            ->whereRaw("YEAR($t_c.tanggal_order) = '$year'")
            ->groupBy("$t_a.barang_id")->get();

        return response()->json(['data' => $results, 'title' => "Barang Sewa"]);
    }
}
