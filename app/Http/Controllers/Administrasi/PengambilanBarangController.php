<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;

use App\Models\Faktur;
use App\Models\FakturBarang;
use App\Models\Pengambilan;
use App\Models\PengambilanBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\PenyewaanPembayaran;
use App\Models\User;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PengambilanBarangController extends Controller
{
    private $validate_model = [
        'tanggal' => ['required', 'date'],
    ];

    private $query = [];

    public function index(Request $request)
    {
        $page_attr = [
            'title' => 'Pengambilan Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        return view('administrasi.pengambilan.pengambilan', compact('page_attr'));
    }

    public function list(Penyewaan $model, Request $request)
    {
        $page_attr = [
            'title' => 'Pengambilan Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pengambilan', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $t_barang = Sewa::tableName;
        $table = PenyewaanBarang::tableName;
        $barangs = PenyewaanBarang::select([
            DB::raw("$table.*"),
            DB::raw("$t_barang.qty_ada as barang_stok"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.id as barang_id"),
        ])
            ->leftJoin($t_barang, "$t_barang.id", "=", "$table.barang")
            ->where("$table.penyewaan", $model->id)->get();

        // buat data pengambilan
        $pengambilan = Pengambilan::where('penyewaan', $model->id)->first();
        if (is_null($pengambilan)) {
            $pengambilan = new Pengambilan();
            $pengambilan->penyewaan = $model->id;
            $pengambilan->save();
        }
        $pengambilan->tanggal = is_null($pengambilan->tanggal) ? date('Y-m-d') : $pengambilan->tanggal;

        // buat pengambilan list barang
        $pengambilan_barangs = PengambilanBarang::where('pengambilan', $pengambilan->id)->get();
        $penyewaan_barangs_count = $barangs->count();

        // cek pengambilan 
        if ($penyewaan_barangs_count != $pengambilan_barangs->count()) {
        }

        // dd($penyewaan_barangs_count);

        // dd($pengambilan_barangs->count());




        return view('administrasi.pengambilan.list', compact('page_attr', 'model', 'barangs', 'pengambilan'));
    }
}
