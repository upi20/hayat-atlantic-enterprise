<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Controller;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\Penyewaan;
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
        $dashboardController = new DashboardController();
        $years = $dashboardController->getYear();
        return view('administrasi.pesanan.pesanan', compact('page_attr', 'customers', 'barangs', 'years'));
    }

    public function insert(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            $model = new Pesanan();
            if (is_null($request->customer_baru)) {
                // Customer lama
                $model->customer_id = $request->customer_id;
                $model->customer_nama = null;
                $model->customer_no_telepon = null;
                $model->customer_alamat = null;

                if (is_null($request->customer_id)) return response()->json(['message' => 'Customer belum dipilih'], 400);
            } else {
                // Customer baru
                $model->customer_id = null;
                $model->customer_nama = $request->customer_nama;
                $model->customer_no_telepon = $request->customer_no_telepon;
                $model->customer_alamat = $request->customer_alamat;

                if (is_null($request->customer_nama)) return response()->json(['message' => 'Nama Customer Harus di isi'], 400);
                if (is_null($request->customer_no_telepon)) return response()->json(['message' => 'No Telepon Customer Harus di isi'], 400);
                if (is_null($request->customer_alamat)) return response()->json(['message' => 'Alamat Customer Harus di isi'], 400);
            }


            $model->tanggal_pakai_dari = $request->tanggal_pakai_dari;
            $model->tanggal_pakai_sampai = $request->tanggal_pakai_sampai;
            $model->total_harga = $request->total_harga;
            $model->created_by = auth()->user()->id;
            $model->save();

            $barangs = json_decode($request->datas);
            foreach ($barangs as $barang) {
                $new = new PesananBarang();
                $new->pesanan_id = $model->id;
                $new->barang_id = $barang->id;
                $new->qty = $barang->qty;
                $new->stok = $barang->stok;
                $new->harga = $barang->harga;
                $new->created_by = auth()->user()->id;
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
            if (is_null($request->customer_baru)) {
                // Customer lama
                $model->customer_id = $request->customer_id;
                $model->customer_nama = null;
                $model->customer_no_telepon = null;
                $model->customer_alamat = null;

                if (is_null($request->customer_id)) return response()->json(['message' => 'Customer belum dipilih'], 400);
            } else {
                // Customer baru
                $model->customer_id = null;
                $model->customer_nama = $request->customer_nama;
                $model->customer_no_telepon = $request->customer_no_telepon;
                $model->customer_alamat = $request->customer_alamat;

                if (is_null($request->customer_nama)) return response()->json(['message' => 'Nama Customer Harus di isi'], 400);
                if (is_null($request->customer_no_telepon)) return response()->json(['message' => 'No Telepon Customer Harus di isi'], 400);
                if (is_null($request->customer_alamat)) return response()->json(['message' => 'Alamat Customer Harus di isi'], 400);
            }

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
            DB::beginTransaction();
            $pesanan = Pesanan::findOrFail($request->id);
            $pesanan->status = $request->status;
            $pesanan->updated_by = auth()->user()->id;

            // simpan customer baru
            if ($request->status == 2 && is_null($pesanan->customer_id)) {
                $customer = new Customer();
                $customer->nama = $pesanan->customer_nama;
                $customer->no_telepon = $pesanan->customer_no_telepon;
                $customer->alamat = $pesanan->customer_alamat;
                $customer->created_by = auth()->user()->id;
                $customer->save();

                $pesanan->customer_id = $customer->id;
            }
            $pesanan->save();

            // simpan penyewaan
            if ($request->status == 2) Penyewaan::insertFromPesanan($pesanan);
            DB::commit();
            return response()->json($pesanan);
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
        $pesanan->customer;
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

            return response()->json(['results' => $model]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }
}
