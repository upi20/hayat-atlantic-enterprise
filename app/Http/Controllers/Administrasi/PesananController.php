<?php

namespace App\Http\Controllers\Administrasi;

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
use App\Models\Pesanan;
use App\Models\PesananBarang;
use App\Models\SuratJalan;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PesananController extends Controller
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
            return Pesanan::datatable($request);
        }

        $page_attr = [
            'title' => 'Pesanan',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];

        $customers = Customer::orderBy('nama')->get();
        $barangs = Sewa::with(['getSatuan'])->orderBy('nama')->get();
        return view('administrasi.pesanan.pesanan', compact('page_attr', 'customers', 'barangs'));
    }

    public function insert(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            $model = new Pesanan();
            $model->customer_id = $request->customer_id;
            $model->tanggal_pakai_dari = $request->tanggal_pakai_dari;
            $model->tanggal_pakai_sampai = $request->tanggal_pakai_sampai;
            $model->total_harga = $request->total_harga;
            $model->updated_by = auth()->user()->id;
            $model->save();

            $barangs = json_decode($request->datas);
            foreach ($barangs as $barang) {
                $new = new PesananBarang();
                $new->pesanan_id = $model->id;
                $new->barang_id = $barang->id;
                $new->qty = $barang->qty;
                $new->stok = $barang->stok;
                $new->harga = $barang->harga;
                $new->updated_by = auth()->user()->id;
                $new->save();
            }

            DB::commit();
            $model->barangs;
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
            DB::beginTransaction();
            $model = Pesanan::findOrFail($request->id);
            $model->customer_id = $request->customer_id;
            $model->tanggal_pakai_dari = $request->tanggal_pakai_dari;
            $model->tanggal_pakai_sampai = $request->tanggal_pakai_sampai;
            $model->total_harga = $request->total_harga;
            $model->updated_by = auth()->user()->id;
            $model->save();

            // delete barang
            $model->barangs()->delete();

            // insert barang
            $barangs = json_decode($request->datas);
            foreach ($barangs as $barang) {
                $new = new PesananBarang();
                $new->pesanan_id = $model->id;
                $new->barang_id = $barang->id;
                $new->qty = $barang->qty;
                $new->stok = $barang->stok;
                $new->harga = $barang->harga;
                $new->updated_by = auth()->user()->id;
                $new->save();
            }

            DB::commit();
            $model->barangs;
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function status(Request $request): mixed
    {
        try {
            $model = Pesanan::findOrFail($request->id);
            $model->status = $request->status;
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

    public function find(Request $request)
    {
        $pesanan = Pesanan::findOrFail($request->id);
        $pesanan->barangs;
        return $pesanan;
    }

    public function delete(Pesanan $model): mixed
    {
        try {
            DB::beginTransaction();
            // delete barang
            $model->barangs()->delete();

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
}
