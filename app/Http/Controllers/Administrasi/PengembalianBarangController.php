<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\Satuan;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;
use App\Models\Barang\Sewa\Pengurangan;
use App\Models\Barang\Sewa\PenguranganList;
use App\Models\Customer;
use App\Models\SuratJalan;
use App\Models\SuratJalanBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;
use PDF;

class PengembalianBarangController extends Controller
{
    private $validate_model = [
        'surat_jalan' => ['required', 'int'],
        'tanggal' => ['required', 'date'],
        'keterangan' => ['nullable', 'string'],
    ];

    public function index(Request $request)
    {
        $page_attr = [
            'title' => 'Pengembalian Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        return view('administrasi.pengembalian.pengembalian', compact('page_attr'));
    }

    public function list(Penyewaan $model)
    {
        $page_attr = [
            'title' => 'Pengembalian Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'SuratJalan', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];
        DB::beginTransaction();
        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_surat_jalan_barang = SuratJalanBarang::tableName;
        $t_surat_jalan = SuratJalan::tableName;
        $t_satuan = Satuan::tableName;

        // ambil penyewaan barang yang data barang nya belum ada di surat_jalan barang
        $where = <<<SQL
            ($t_penyewaan_barang.barang not in ( 
                select $t_surat_jalan_barang.barang from $t_surat_jalan_barang 
                    join $t_surat_jalan on $t_surat_jalan.id = $t_surat_jalan_barang.surat_jalan
                    where $t_surat_jalan.penyewaan = '$model->id' 
                )) and 
            $t_penyewaan_barang.penyewaan = '$model->id'
        SQL;
        $penyewaan_barangs = PenyewaanBarang::whereRaw($where)->get();

        // buat data surat_jalan
        $surat_jalan = SuratJalan::where('penyewaan', $model->id)->first();
        if (is_null($surat_jalan)) {
            $surat_jalan = new SuratJalan();
            $surat_jalan->penyewaan = $model->id;
            $surat_jalan->tanggal = $model->tanggal_kirim;
            $surat_jalan->tanggal = $model->tanggal_kirim;
            $surat_jalan->created_by = auth()->user()->id;
            $surat_jalan->save();
        }

        // cek surat_jalan 
        foreach ($penyewaan_barangs as $barang) {
            $peng_b = new SuratJalanBarang();
            $peng_b->barang = $barang->barang;
            $peng_b->qty = $barang->qty;
            $peng_b->surat_jalan = $surat_jalan->id;
            $peng_b->created_by = auth()->user()->id;
            $peng_b->save();
        }

        // buat surat_jalan list barang
        $barang_disewa_qty = <<<SQL
            (select qty from $t_penyewaan_barang where 
                $t_penyewaan_barang.penyewaan = '$model->id' and
                $t_penyewaan_barang.barang = $t_surat_jalan_barang.barang limit 1)
        SQL;
        $surat_jalan_barangs = SuratJalanBarang::select([
            DB::raw("$t_surat_jalan_barang.*"),
            DB::raw("$t_barang.qty_ada as barang_stok"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_satuan.nama as barang_satuan"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.id as barang_id"),
            DB::raw("$barang_disewa_qty as barang_disewa_qty"),
        ])
            ->leftJoin($t_barang, "$t_barang.id", "=", "$t_surat_jalan_barang.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
            ->where("$t_surat_jalan_barang.surat_jalan", $surat_jalan->id)->get();
        $customer = Customer::find($model->customer);
        DB::commit();
        return view('administrasi.pengembalian.list', compact('page_attr', 'model', 'surat_jalan', 'surat_jalan_barangs', 'customer'));
    }

    public function save(Request $request)
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();
            $model = SuratJalan::findOrFail($request->surat_jalan);
            $t_surat_jalan_barang = SuratJalanBarang::tableName;
            $t_barang = Sewa::tableName;

            // jika barang sudah di kirim
            if ($model->status > 3) {
                return response()->json([
                    'message' => 'Barang sudah diambil tidak bisa di ubah lagi.',
                    'error' => null,
                ], 401);
            }

            // belum sinkron dengan tanggal pengiriman di tabel panyewaan
            $model->status = 3;
            $model->updated_by = auth()->user()->id;
            $model->save();

            // update list barang
            foreach ($request->baik as $id => $qty) {
                $barang = SuratJalanBarang::selectRaw("$t_surat_jalan_barang.* ,$t_barang.nama as barang_nama")
                    ->join($t_barang, "$t_barang.id", "=", "$t_surat_jalan_barang.barang")
                    ->where("$t_surat_jalan_barang.id", $id)->first();

                $baik = $qty;
                $hilang = $request->hilang[$id];
                $rusak = $request->rusak[$id];
                $disewa = $barang->qty;
                $total = $baik + $hilang + $rusak;

                if ($disewa != $total) {
                    return response()->json([
                        'message' => "Total pengembalian $barang->barang_nama lebih/kurang dari penyewaan. Mohon periksa kembali",
                        'error' => null,
                    ], 401);
                }

                $barang->pengembalian_qty = $baik;
                $barang->pengembalian_hilang = $hilang;
                $barang->pengembalian_rusak = $rusak;
                $barang->updated_by = auth()->user()->id;
                $barang->save();
            }
            DB::commit();

            $model->barangs = SuratJalanBarang::where('surat_jalan', $model->id)->get();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function konfirmasi(SuratJalan $model)
    {
        DB::beginTransaction();
        $model->status = 4;
        $model->save();

        // penyewaan
        $penyewaan = Penyewaan::findOrFail($model->penyewaan);
        $penyewaan->status = 4;
        $penyewaan->save();

        // Data barang sewa berubah
        $barangs = SuratJalanBarang::where('surat_jalan', $model->id)->get();
        $hilang_cek = false;
        foreach ($barangs as $j_barang) {
            if ($j_barang->pengembalian_rusak > 0) $hilang_cek = true;
        }

        if ($hilang_cek) {
            $pengurangan = new Pengurangan();
            $pengurangan->nama = "Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor";
            $pengurangan->tanggal = $model->tanggal;
            $tanggal_penyewaan = $penyewaan->tanggal_pakai_dari == $penyewaan->tanggal_pakai_sampai
                ? $penyewaan->tanggal_pakai_dari :
                "$penyewaan->tanggal_pakai_dari s/d $penyewaan->tanggal_pakai_sampai";
            $pengurangan->keterangan = "Penyewaan Tanggal $tanggal_penyewaan, Di $penyewaan->kepada Lokasi $penyewaan->lokasi";
            $pengurangan->created_by = auth()->user()->id;
            $pengurangan->save();
        }

        foreach ($barangs as $j_barang) {
            $barang = Sewa::findOrFail($j_barang->barang);
            // kurangi barang di sewakan
            $barang->qty_disewakan = $barang->qty_disewakan - $j_barang->qty;

            // qty ada tambah barang pengmbalian dengan kondisi baik
            $barang->qty_ada = $barang->qty_ada + $j_barang->pengembalian_qty;

            // jika rusak maka di balikin ke rusak
            $barang->qty_rusak = $barang->qty_rusak + $j_barang->pengembalian_rusak;

            // jika hilang maka kurangi total
            $barang->qty_rusak = $barang->qty_rusak - $j_barang->pengembalian_hilang;

            // kemudian masukan ke pengurangan barang
            if ($j_barang->pengembalian_hilang > 0) {
                $pengurangan_barang = new PenguranganList();
                $pengurangan_barang->pengurangan = $pengurangan->id;
                $pengurangan_barang->barang = $j_barang->barang;
                $pengurangan_barang->created_by = auth()->user()->id;
                $pengurangan_barang->save();
            }

            $barang->save();
        }

        DB::commit();
        return ($model);
    }
}
