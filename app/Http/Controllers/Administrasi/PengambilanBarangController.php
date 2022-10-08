<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\Satuan;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\SuratJalan;
use App\Models\SuratJalanBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;
use PDF;

class PengambilanBarangController extends Controller
{
    private $validate_model = [
        'surat_jalan' => ['required', 'int'],
        'tanggal' => ['required', 'date'],
        'keterangan' => ['nullable', 'string'],
    ];

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

    public function list(Penyewaan $model)
    {
        $page_attr = [
            'title' => 'Pengambilan Barang',
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
        return view('administrasi.pengambilan.list', compact('page_attr', 'model', 'surat_jalan', 'surat_jalan_barangs', 'customer'));
    }

    public function save(Request $request)
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();
            $model = SuratJalan::findOrFail($request->surat_jalan);

            // jika barang sudah di kirim
            if ($model->status > 1) {
                return response()->json([
                    'message' => 'Barang sudah diambil tidak bisa di ubah lagi.',
                    'error' => null,
                ], 401);
            }

            // belum sinkron dengan tanggal pengiriman di tabel panyewaan
            $model->tanggal = $request->tanggal;
            $model->status = 1;
            $model->keterangan = $request->keterangan;
            $model->updated_by = auth()->user()->id;
            $model->save();

            // update list barang
            foreach ($request->qtys as $id => $qty) {
                $barang = SuratJalanBarang::findOrFail($id);
                $barang->qty = $qty;
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

    public function surat_jalan(Penyewaan $model)
    {
        $page_attr = [
            'title' => 'SuratJalan Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'SuratJalan', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_surat_jalan_barang = SuratJalanBarang::tableName;
        $t_surat_jalan = SuratJalan::tableName;
        $t_satuan = Satuan::tableName;
        $t_penyewaan = Penyewaan::tableName;

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
        $surat_jalan = SuratJalan::select([
            DB::raw("$t_surat_jalan.*"),
            DB::raw("date_format($t_surat_jalan.tanggal, '%W, %d %M %Y') as tanggal_str"),
            DB::raw("date_format($t_surat_jalan.tanggal, '%W, %d %M %Y') as tanggal_str"),

            DB::raw("date_format($t_penyewaan.tanggal_pakai_dari, '%W, %d %M %Y') as tanggal_pakai_dari"),
            DB::raw("date_format($t_penyewaan.tanggal_pakai_sampai, '%W, %d %M %Y') as tanggal_pakai_sampai"),
            DB::raw("(DATEDIFF($t_penyewaan.tanggal_pakai_sampai, $t_penyewaan.tanggal_pakai_dari)+1) as pakai_hari"),
        ])
            ->join($t_penyewaan, "$t_penyewaan.id", '=', "$t_surat_jalan.penyewaan")
            ->where("$t_surat_jalan.penyewaan", $model->id)->first();

        // nomor surat
        if (is_null($surat_jalan->no_surat_jalan)) {
            $nomor = SuratJalan::max('no_surat_jalan') ?? 0;
            $surat_jalan->no_surat_jalan = ($nomor) + 1;
            $surat_jalan->save();
        }
        $surat_jalan->no_surat_jalan = 'SJ/' . str_pad($surat_jalan->no_surat_jalan, 5, '0', STR_PAD_LEFT);

        // tanggal pakai
        if ($surat_jalan->tanggal_pakai_dari != $surat_jalan->tanggal_pakai_sampai) {
            $surat_jalan->tanggal_pakai = "$surat_jalan->tanggal_pakai_dari s/d $surat_jalan->tanggal_pakai_sampai ($surat_jalan->tanggal_pakai_hari hari)";
        } else {
            $surat_jalan->tanggal_pakai = $surat_jalan->tanggal_pakai_dari;
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

        // return view('administrasi.pengambilan.surat_jalan', compact('page_attr', 'model', 'surat_jalan', 'surat_jalan_barangs', 'customer'));
        view()->share('administrasi.pengambilan.surat_jalan', compact('page_attr', 'model', 'surat_jalan', 'surat_jalan_barangs', 'customer'));
        $pdf = PDF::loadView('administrasi.pengambilan.surat_jalan', compact('page_attr', 'model', 'surat_jalan', 'surat_jalan_barangs', 'customer'))
            ->setPaper('a4', 'landscape');
        // $name = "$faktur->no_faktur $penyewaan->kepada.pdf";
        $name = "tes.pdf";
        return $pdf->stream($name);
        exit();
    }

    public function konfirmasi(SuratJalan $model)
    {
        DB::beginTransaction();
        $model->status = 2;
        $model->save();

        // penyewaan
        $penyewaan = Penyewaan::findOrFail($model->penyewaan);
        $penyewaan->status = 3;
        $penyewaan->save();

        // Data barang sewa berubah
        $barangs = SuratJalanBarang::where('surat_jalan', $model->id)->get();
        foreach ($barangs as $j_barang) {
            $barang = Sewa::findOrFail($j_barang->barang);
            $barang->qty_ada = $barang->qty_ada - $j_barang->qty;
            $barang->qty_disewakan = $barang->qty_disewakan + $j_barang->qty;
            $barang->save();
        }

        DB::commit();
        return ($model);
    }
}
