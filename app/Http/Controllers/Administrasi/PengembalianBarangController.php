<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\Satuan;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\Pengembalian;
use App\Models\PengembalianBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;
use PDF;

class PengembalianBarangController extends Controller
{
    private $validate_model = [
        'pengembalian' => ['required', 'int'],
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
                ['name' => 'Pengembalian', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];
        DB::beginTransaction();
        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_pengembalian_barang = PengembalianBarang::tableName;
        $t_pengembalian = Pengembalian::tableName;
        $t_satuan = Satuan::tableName;

        // ambil penyewaan barang yang data barang nya belum ada di pengembalian barang
        $where = <<<SQL
            ($t_penyewaan_barang.barang not in ( 
                select $t_pengembalian_barang.barang from $t_pengembalian_barang 
                    join $t_pengembalian on $t_pengembalian.id = $t_pengembalian_barang.pengembalian
                    where $t_pengembalian.penyewaan = '$model->id' 
                )) and 
            $t_penyewaan_barang.penyewaan = '$model->id'
        SQL;
        $penyewaan_barangs = PenyewaanBarang::whereRaw($where)->get();

        // buat data pengembalian
        $pengembalian = Pengembalian::where('penyewaan', $model->id)->first();
        if (is_null($pengembalian)) {
            $pengembalian = new Pengembalian();
            $pengembalian->penyewaan = $model->id;
            $pengembalian->tanggal = $model->tanggal_kirim;
            $pengembalian->tanggal = $model->tanggal_kirim;
            $pengembalian->created_by = auth()->user()->id;
            $pengembalian->save();
        }

        // cek pengembalian 
        foreach ($penyewaan_barangs as $barang) {
            $peng_b = new PengembalianBarang();
            $peng_b->barang = $barang->barang;
            $peng_b->qty = $barang->qty;
            $peng_b->pengembalian = $pengembalian->id;
            $peng_b->created_by = auth()->user()->id;
            $peng_b->save();
        }

        // buat pengembalian list barang
        $barang_disewa_qty = <<<SQL
            (select qty from $t_penyewaan_barang where 
                $t_penyewaan_barang.penyewaan = '$model->id' and
                $t_penyewaan_barang.barang = $t_pengembalian_barang.barang limit 1)
        SQL;
        $pengembalian_barangs = PengembalianBarang::select([
            DB::raw("$t_pengembalian_barang.*"),
            DB::raw("$t_barang.qty_ada as barang_stok"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_satuan.nama as barang_satuan"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.id as barang_id"),
            DB::raw("$barang_disewa_qty as barang_disewa_qty"),
        ])
            ->leftJoin($t_barang, "$t_barang.id", "=", "$t_pengembalian_barang.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
            ->where("$t_pengembalian_barang.pengembalian", $pengembalian->id)->get();
        $customer = Customer::find($model->customer);
        DB::commit();
        return view('administrasi.pengembalian.list', compact('page_attr', 'model', 'pengembalian', 'pengembalian_barangs', 'customer'));
    }

    public function save(Request $request)
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();
            $model = Pengembalian::findOrFail($request->pengembalian);

            // jika barang sudah di kirim
            if ($model->status == 2) {
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
                $barang = PengembalianBarang::findOrFail($id);
                $barang->qty = $qty;
                $barang->updated_by = auth()->user()->id;
                $barang->save();
            }

            DB::commit();

            $model->barangs = PengembalianBarang::where('pengembalian', $model->id)->get();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function pengembalian(Penyewaan $model)
    {
        $page_attr = [
            'title' => 'Pengembalian Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pengembalian', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_pengembalian_barang = PengembalianBarang::tableName;
        $t_pengembalian = Pengembalian::tableName;
        $t_satuan = Satuan::tableName;
        $t_penyewaan = Penyewaan::tableName;

        // ambil penyewaan barang yang data barang nya belum ada di pengembalian barang
        $where = <<<SQL
            ($t_penyewaan_barang.barang not in ( 
                select $t_pengembalian_barang.barang from $t_pengembalian_barang 
                    join $t_pengembalian on $t_pengembalian.id = $t_pengembalian_barang.pengembalian
                    where $t_pengembalian.penyewaan = '$model->id' 
                )) and 
            $t_penyewaan_barang.penyewaan = '$model->id'
        SQL;
        $penyewaan_barangs = PenyewaanBarang::whereRaw($where)->get();

        // buat data pengembalian
        $pengembalian = Pengembalian::select([
            DB::raw("$t_pengembalian.*"),
            DB::raw("date_format($t_pengembalian.tanggal, '%W, %d %M %Y') as tanggal_str"),
            DB::raw("date_format($t_pengembalian.tanggal, '%W, %d %M %Y') as tanggal_str"),

            DB::raw("date_format($t_penyewaan.tanggal_pakai_dari, '%W, %d %M %Y') as tanggal_pakai_dari"),
            DB::raw("date_format($t_penyewaan.tanggal_pakai_sampai, '%W, %d %M %Y') as tanggal_pakai_sampai"),
            DB::raw("(DATEDIFF($t_penyewaan.tanggal_pakai_sampai, $t_penyewaan.tanggal_pakai_dari)+1) as pakai_hari"),
        ])
            ->join($t_penyewaan, "$t_penyewaan.id", '=', "$t_pengembalian.penyewaan")
            ->where("$t_pengembalian.penyewaan", $model->id)->first();

        // nomor surat
        if (is_null($pengembalian->no_pengembalian)) {
            $nomor = Pengembalian::max('no_pengembalian') ?? 0;
            $pengembalian->no_pengembalian = ($nomor) + 1;
            $pengembalian->save();
        }
        $pengembalian->no_pengembalian = 'SJ/' . str_pad($pengembalian->no_pengembalian, 5, '0', STR_PAD_LEFT);

        // tanggal pakai
        if ($pengembalian->tanggal_pakai_dari != $pengembalian->tanggal_pakai_sampai) {
            $pengembalian->tanggal_pakai = "$pengembalian->tanggal_pakai_dari s/d $pengembalian->tanggal_pakai_sampai ($pengembalian->tanggal_pakai_hari hari)";
        } else {
            $pengembalian->tanggal_pakai = $pengembalian->tanggal_pakai_dari;
        }

        // buat pengembalian list barang
        $barang_disewa_qty = <<<SQL
            (select qty from $t_penyewaan_barang where 
                $t_penyewaan_barang.penyewaan = '$model->id' and
                $t_penyewaan_barang.barang = $t_pengembalian_barang.barang limit 1)
        SQL;
        $pengembalian_barangs = PengembalianBarang::select([
            DB::raw("$t_pengembalian_barang.*"),
            DB::raw("$t_barang.qty_ada as barang_stok"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_satuan.nama as barang_satuan"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.id as barang_id"),
            DB::raw("$barang_disewa_qty as barang_disewa_qty"),
        ])
            ->leftJoin($t_barang, "$t_barang.id", "=", "$t_pengembalian_barang.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
            ->where("$t_pengembalian_barang.pengembalian", $pengembalian->id)->get();
        $customer = Customer::find($model->customer);

        // return view('administrasi.pengembalian.pengembalian', compact('page_attr', 'model', 'pengembalian', 'pengembalian_barangs', 'customer'));
        view()->share('administrasi.pengembalian.pengembalian', compact('page_attr', 'model', 'pengembalian', 'pengembalian_barangs', 'customer'));
        $pdf = PDF::loadView('administrasi.pengembalian.pengembalian', compact('page_attr', 'model', 'pengembalian', 'pengembalian_barangs', 'customer'))
            ->setPaper('a4', 'landscape');
        // $name = "$faktur->no_faktur $penyewaan->kepada.pdf";
        $name = "tes.pdf";
        return $pdf->stream($name);
        exit();
    }

    public function konfirmasi(Pengembalian $model)
    {
        $model->status = 2;
        $model->save();
        return ($model);
    }
}
