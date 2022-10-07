<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\Satuan;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\Pengambilan;
use App\Models\PengambilanBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;
use PDF;

class PengambilanBarangController extends Controller
{
    private $validate_model = [
        'pengambilan' => ['required', 'int'],
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
                ['name' => 'Pengambilan', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];
        DB::beginTransaction();
        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_pengamblian_barang = PengambilanBarang::tableName;
        $t_pengamblian = Pengambilan::tableName;
        $t_satuan = Satuan::tableName;

        // ambil penyewaan barang yang data barang nya belum ada di pengambilan barang
        $where = <<<SQL
            ($t_penyewaan_barang.barang not in ( 
                select $t_pengamblian_barang.barang from $t_pengamblian_barang 
                    join $t_pengamblian on $t_pengamblian.id = $t_pengamblian_barang.pengambilan
                    where $t_pengamblian.penyewaan = '$model->id' 
                )) and 
            $t_penyewaan_barang.penyewaan = '$model->id'
        SQL;
        $penyewaan_barangs = PenyewaanBarang::whereRaw($where)->get();

        // buat data pengambilan
        $pengambilan = Pengambilan::where('penyewaan', $model->id)->first();
        if (is_null($pengambilan)) {
            $pengambilan = new Pengambilan();
            $pengambilan->penyewaan = $model->id;
            $pengambilan->tanggal = $model->tanggal_kirim;
            $pengambilan->save();
        }

        // cek pengambilan 
        foreach ($penyewaan_barangs as $barang) {
            $peng_b = new PengambilanBarang();
            $peng_b->barang = $barang->barang;
            $peng_b->qty = $barang->qty;
            $peng_b->pengambilan = $pengambilan->id;
            $peng_b->save();
        }

        // buat pengambilan list barang
        $barang_disewa_qty = <<<SQL
            (select qty from $t_penyewaan_barang where 
                $t_penyewaan_barang.penyewaan = '$model->id' and
                $t_penyewaan_barang.barang = $t_pengamblian_barang.barang limit 1)
        SQL;
        $pengambilan_barangs = PengambilanBarang::select([
            DB::raw("$t_pengamblian_barang.*"),
            DB::raw("$t_barang.qty_ada as barang_stok"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_satuan.nama as barang_satuan"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.id as barang_id"),
            DB::raw("$barang_disewa_qty as barang_disewa_qty"),
        ])
            ->leftJoin($t_barang, "$t_barang.id", "=", "$t_pengamblian_barang.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
            ->where("$t_pengamblian_barang.pengambilan", $pengambilan->id)->get();
        $customer = Customer::find($model->customer);
        DB::commit();
        return view('administrasi.pengambilan.list', compact('page_attr', 'model', 'pengambilan', 'pengambilan_barangs', 'customer'));
    }

    public function save(Request $request)
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();
            $model = Pengambilan::findOrFail($request->pengambilan);

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
            $model->save();

            // update list barang
            foreach ($request->qtys as $id => $qty) {
                $barang = PengambilanBarang::findOrFail($id);
                $barang->qty = $qty;
                $barang->save();
            }

            DB::commit();

            $model->barangs = PengambilanBarang::where('pengambilan', $model->id)->get();
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

        // header

        // logo

        // hader informasi

        // list data barang

        // catatan

        // penerima + pengirim
        $page_attr = [
            'title' => 'Pengambilan Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pengambilan', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];

        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_pengamblian_barang = PengambilanBarang::tableName;
        $t_pengamblian = Pengambilan::tableName;
        $t_satuan = Satuan::tableName;

        // ambil penyewaan barang yang data barang nya belum ada di pengambilan barang
        $where = <<<SQL
            ($t_penyewaan_barang.barang not in ( 
                select $t_pengamblian_barang.barang from $t_pengamblian_barang 
                    join $t_pengamblian on $t_pengamblian.id = $t_pengamblian_barang.pengambilan
                    where $t_pengamblian.penyewaan = '$model->id' 
                )) and 
            $t_penyewaan_barang.penyewaan = '$model->id'
        SQL;
        $penyewaan_barangs = PenyewaanBarang::whereRaw($where)->get();

        // buat data pengambilan
        $pengambilan = Pengambilan::where('penyewaan', $model->id)->first();

        // buat pengambilan list barang
        $barang_disewa_qty = <<<SQL
            (select qty from $t_penyewaan_barang where 
                $t_penyewaan_barang.penyewaan = '$model->id' and
                $t_penyewaan_barang.barang = $t_pengamblian_barang.barang limit 1)
        SQL;
        $pengambilan_barangs = PengambilanBarang::select([
            DB::raw("$t_pengamblian_barang.*"),
            DB::raw("$t_barang.qty_ada as barang_stok"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("$t_satuan.nama as barang_satuan"),
            DB::raw("$t_barang.kode as barang_kode"),
            DB::raw("$t_barang.id as barang_id"),
            DB::raw("$barang_disewa_qty as barang_disewa_qty"),
        ])
            ->leftJoin($t_barang, "$t_barang.id", "=", "$t_pengamblian_barang.barang")
            ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
            ->where("$t_pengamblian_barang.pengambilan", $pengambilan->id)->get();
        $customer = Customer::find($model->customer);


        view()->share('administrasi.pengambilan.surat_jalan', compact('page_attr', 'model', 'pengambilan', 'pengambilan_barangs', 'customer'));
        $pdf = PDF::loadView('administrasi.pengambilan.surat_jalan', compact('page_attr', 'model', 'pengambilan', 'pengambilan_barangs', 'customer'))
            ->setPaper('a4', 'landscape');
        // $name = "$faktur->no_faktur $penyewaan->kepada.pdf";
        $name = "tes.pdf";
        return $pdf->stream($name);
        exit();
    }
}
