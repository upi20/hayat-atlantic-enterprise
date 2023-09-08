<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\Pesanan;
use App\Models\PesananBarang;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    private $validate_model = [
        'pesanan_id' => ['required', 'int'],
        'barang_id' => ['required', 'int'],
        'qty' => ['required', 'int'],
        'harga' => ['required', 'int'],
        'stok' => ['required', 'int'],
    ];

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

    public function detail(Pesanan $model): mixed
    {
        $page_attr = [
            'title' => 'Pesanan Detail',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pesanan', 'url' => h_prefix(min: 2)],
            ],
            'navigation' => h_prefix(min: 2)
        ];

        $customers = Customer::orderBy('nama')->get();
        $barangs = Sewa::with(['getSatuan'])->orderBy('nama')->get();
        return view('administrasi.pesanan.detail', compact('page_attr', 'customers', 'barangs', 'model'));
    }

    public function detail_datatable(Request $request)
    {
        return PesananBarang::datatable($request);
    }

    public function detail_insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $cek = PesananBarang::whereBarangId($request->barang_id)->wherePesananId($request->pesanan_id)->count();
            if ($cek > 0) return response()->json(['message' => 'Barang Sudah Ada',], 400);

            DB::beginTransaction();
            $model = new PesananBarang();
            $model->pesanan_id = $request->pesanan_id;
            $model->barang_id = $request->barang_id;
            $model->qty = $request->qty;
            $model->harga = $request->harga;
            $model->stok = $request->stok;
            $model->updated_by = auth()->user()->id;
            $model->save();

            // refresh total harga
            Pesanan::refreshTotalHarga($request->pesanan_id);

            DB::commit();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function detail_update(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = PesananBarang::find($request->id);
            if ($model->barang_id != $request->barang_id) {
                $cek = PesananBarang::whereBarangId($request->barang_id)->wherePesananId($request->pesanan_id)->count();
                if ($cek > 0) return response()->json(['message' => 'Barang Sudah Ada',], 400);
            }

            DB::beginTransaction();
            $model->pesanan_id = $request->pesanan_id;
            $model->barang_id = $request->barang_id;
            $model->qty = $request->qty;
            $model->harga = $request->harga;
            $model->stok = $request->stok;
            $model->updated_by = auth()->user()->id;
            $model->save();

            // refresh total harga
            Pesanan::refreshTotalHarga($request->pesanan_id);

            DB::commit();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function detail_find(Request $request): mixed
    {
        try {
            return PesananBarang::findOrFail($request->id);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function detail_delete(PesananBarang $model): mixed
    {
        try {
            DB::beginTransaction();
            $pesanan_id = $model->pesanan_id;
            $model->delete();

            Pesanan::refreshTotalHarga($pesanan_id);

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
