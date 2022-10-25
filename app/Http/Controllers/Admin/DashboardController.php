<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\GantiRugi;
use App\Models\Penyewaan;
use App\Models\SuratJalan;
use App\Models\SuratJalanBarang;
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
        $donat->status_penyewaan = $this->status_penyewaan();

        $data = compact(
            'page_attr',
            'total',
            'years',
            'ringkasan_penyewaan',
            'donat'
        );
        $data['compact'] = $data;
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

        // total customer
        $total->customer = Customer::count();

        // total karyawan
        $total->karyawan = User::leftJoin($t_model_has_roles, "$t_model_has_roles.model_id", '=', "$table.id")
            ->leftJoin($t_roles, "$t_roles.id", '=', "$t_model_has_roles.role_id")
            ->where("$t_roles.name", '<>', config('app.super_admin_role'))->count();

        // qty barang rusak
        $total->barang_rusak = Sewa::sum('qty_rusak');

        return $total;
    }

    private function getRingkasanPenyewaan()
    {
        $result = collect();

        // Penyewaan
        // Penyewaan yang belum selesai
        $result->penyewaan = Penyewaan::where('status', '<>', 0)
            ->where('status', '<', 5)->count();

        // Pembayaran
        // Penyewaan yang belum lunas
        $result->pembayaran = Penyewaan::where('status', '<>', 0)
            ->where('status_pembayaran', '<', 1)->count();

        //  Pengambilan Barang
        // Penyewaan yang barang nya belum dikirim
        $result->pengambilan = Penyewaan::where('status', '=', 2)->count();

        //  Pengembalian Barang
        // Penyewaan yang barang nya sedang ada di luar
        $result->pengembalian = Penyewaan::where('status', '=', 3)->count();

        //  Ganti Rugi
        // Penyewan yang ganti rugi nya belum selesai
        $result->ganti_rugi = GantiRugi::where('status', '<', 2)->count();

        return $result;
    }

    // donat status penyewaan
    private function status_penyewaan()
    {
        $results = [];

        $fun = function ($status, $name) {
            $item = [];
            $item['name'] = $name;
            $item['data'] = Penyewaan::where('status', $status)->count();
            return $item;
        };

        $results[] = $fun(1, 'Penyewaan Dibuat');
        $results[] = $fun(2, 'Faktur Dibuat');
        $results[] = $fun(3, 'Barang Diambil');
        $results[] = $fun(4, 'Barang Dikembalikan');
        $results[] = $fun(5, 'Selesai');
        $results[] = $fun(9, 'Dibatalkan');
        return $results;
    }

    // statistik
    private function getYear()
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
        foreach ($years as $year) {
            $item['name'] = $year->name;
            $item['data'] = Penyewaan::where('status', '<>', '0')
                ->where('status', '<>', '9')
                ->where('tanggal_order', '>=', $year->start)
                ->where('tanggal_order', '<=', $year->end)
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
        foreach ($years as $year) {
            $item['name'] = $year->name;
            $item['data'] = SuratJalanBarang::selectRaw("count(*) as barang, ifnull(sum(surat_jalan_barang.pengembalian_rusak),0) as qty")
                ->join($t_surat_jalan, "$t_surat_jalan.id", '=', "$table.surat_jalan")
                ->where("$t_surat_jalan.status", '4') // status selesai
                ->where("$t_surat_jalan.tanggal", '>=', $year->start)
                ->where("$t_surat_jalan.tanggal", '<=', $year->end)
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
        foreach ($years as $year) {
            $item['name'] = $year->name;
            $item['data'] = SuratJalanBarang::selectRaw("count(*) as barang, ifnull(sum(surat_jalan_barang.pengembalian_hilang),0) as qty")
                ->join($t_surat_jalan, "$t_surat_jalan.id", '=', "$table.surat_jalan")
                ->where("$t_surat_jalan.status", '4') // status selesai
                ->where("$t_surat_jalan.tanggal", '>=', $year->start)
                ->where("$t_surat_jalan.tanggal", '<=', $year->end)
                ->where("$table.pengembalian_hilang", '>', 0)
                ->limit(1)->first();
            $results[] = $item;
        }
        return response()->json(['data' => $results, 'title' => "Penyewaan Barang Hilang $year_"]);
    }
}
