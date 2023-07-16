<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\HabisPakai\Pengurangan as HabisPakaiPengurangan;
use App\Models\Barang\HabisPakai\PenguranganList as HabisPakaiPenguranganList;
use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;
use App\Models\Barang\Sewa\Pengurangan;
use App\Models\Barang\Sewa\PenguranganList;
use App\Models\Customer;
use App\Models\GantiRugi;
use App\Models\GantiRugi\GantiListBarang;
use App\Models\SuratJalan;
use App\Models\SuratJalanBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\SuratJalanBarangHabisPakai;
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

    private $validate_barang_habis_pakai = [
        'surat_jalan' => ['required', 'int'],
        'barang_id' => ['required', 'int'],
        'qty' => ['required', 'int'],
        'harga' => ['int', 'int'],
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
        return view('administrasi.pengembalian.pengembalian', compact('page_attr'));
    }

    public function list(Penyewaan $model)
    {
        $page_attr = [
            'title' => 'Pengambilan Barang',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pengambilan Barang', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];
        DB::beginTransaction();
        $t_barang = Sewa::tableName;
        $t_penyewaan_barang = PenyewaanBarang::tableName;
        $t_surat_jalan_barang = SuratJalanBarang::tableName;
        $t_surat_jalan = SuratJalan::tableName;
        $t_satuan = Satuan::tableName;
        $t_barang_habis_pakai = SuratJalanBarangHabisPakai::tableName;

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
            $model->tanggal_kembali = $request->tanggal_kembali;
            $model->status = 3;
            $model->updated_by = auth()->user()->id;
            $model->save();

            // update list barang
            foreach ($request->baik as $id => $qty) {
                $barang = SuratJalanBarang::find($id);

                $baik = $qty;
                $hilang = $request->hilang[$id];
                $rusak = $request->rusak[$id];
                $disewa = $barang->qty;
                $total = $baik + $hilang + $rusak;

                if ($disewa != $total) {
                    $barang_data = $barang->barang_data;
                    return response()->json([
                        'message' => "Total pengembalian $barang_data->nama lebih/kurang dari penyewaan. Mohon periksa kembali",
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
        $model->konfirmasi_oleh = auth()->user()->id;
        $model->save();

        // penyewaan
        $penyewaan = Penyewaan::findOrFail($model->penyewaan);
        $penyewaan->status = 4;
        $penyewaan->save();

        // Data barang sewa berubah
        $barangs = SuratJalanBarang::where('surat_jalan', $model->id)->get();
        $hilang_cek = false;
        $rusak_cek = false;
        foreach ($barangs as $j_barang) {
            if ($j_barang->pengembalian_hilang > 0) $hilang_cek = true;
            if ($j_barang->pengembalian_rusak > 0) $rusak_cek = true;
        }
        // pengurangan head
        if ($hilang_cek) {
            $pengurangan = new Pengurangan();
            $pengurangan->nama = "Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor $model->no_surat_jalan";
            $pengurangan->tanggal = $model->tanggal;
            $tanggal_penyewaan = $penyewaan->tanggal_pakai_dari == $penyewaan->tanggal_pakai_sampai
                ? $penyewaan->tanggal_pakai_dari :
                "$penyewaan->tanggal_pakai_dari s/d $penyewaan->tanggal_pakai_sampai";
            $pengurangan->keterangan = "Tanggal $tanggal_penyewaan, Di $penyewaan->kepada Lokasi $penyewaan->lokasi";
            $pengurangan->created_by = auth()->user()->id;
            $pengurangan->penyewaan = $penyewaan->id;

            $pengurangan->save();
        }

        // ganti rugi
        $ganti_rugi_id = null;
        if ($rusak_cek || $hilang_cek) {
            $ganti_rugi_nomor = GantiRugi::max('no_surat') + 1;
            $ganti_rugi = new GantiRugi();
            $ganti_rugi->penyewaan_id = $penyewaan->id;
            $ganti_rugi->customer = $penyewaan->customer;

            $ganti_rugi->nama = "Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor $model->no_surat_jalan";
            $tanggal_penyewaan = $penyewaan->tanggal_pakai_dari == $penyewaan->tanggal_pakai_sampai
                ? $penyewaan->tanggal_pakai_dari :
                "$penyewaan->tanggal_pakai_dari s/d $penyewaan->tanggal_pakai_sampai";
            $ganti_rugi->keterangan = "Tanggal $tanggal_penyewaan, Di $penyewaan->kepada Lokasi $penyewaan->lokasi";

            $ganti_rugi->no_surat = $ganti_rugi_nomor;
            $ganti_rugi->created_by = auth()->user()->id;
            $ganti_rugi->save();

            $ganti_rugi_id = $ganti_rugi->id;
        }

        $barang_hilang_count_qty = 0;
        $barang_hilang_count = 0;
        $barang_hilang_nominal = 0;
        $barang_rusak_count_qty = 0;
        $barang_rusak_count = 0;
        $barang_rusak_nominal = 0;
        foreach ($barangs as $j_barang) {
            $barang = Sewa::findOrFail($j_barang->barang);
            // kurangi barang di sewakan
            $barang->qty_disewakan = $barang->qty_disewakan - $j_barang->qty;

            // qty ada tambah barang pengmbalian dengan kondisi baik
            $barang->qty_ada = $barang->qty_ada + $j_barang->pengembalian_qty;

            // jika rusak maka di balikin ke rusak
            $barang->qty_rusak = $barang->qty_rusak + $j_barang->pengembalian_rusak;

            // jika hilang maka kurangi total
            $barang->qty_total = $barang->qty_total - $j_barang->pengembalian_hilang;
            $barang->save();

            // kemudian masukan ke pengurangan barang
            if ($j_barang->pengembalian_hilang > 0) {
                $pengurangan_barang = new PenguranganList();
                $pengurangan_barang->pengurangan = $pengurangan->id;
                $pengurangan_barang->barang = $j_barang->barang;
                $pengurangan_barang->qty = $j_barang->pengembalian_hilang;
                $pengurangan_barang->created_by = auth()->user()->id;
                $pengurangan_barang->save();

                // tambahkan ke barang hilang
                $barang_hilang_count_qty += $j_barang->pengembalian_hilang;
                $barang_hilang_count++;

                // tambah nominal
                $barang_hilang_nominal += ($barang->harga * $j_barang->pengembalian_hilang);
            }

            // hitung barang rusak
            if ($j_barang->pengembalian_rusak > 0) {
                // tambahkan ke barang rusak
                $barang_rusak_count_qty += $j_barang->pengembalian_rusak;
                $barang_rusak_count++;

                // simpan nominal
                $barang_rusak_nominal += ($barang->harga * $j_barang->pengembalian_rusak);
            }

            if ($j_barang->pengembalian_rusak > 0 || $j_barang->pengembalian_hilang > 0) {
                $ganti_rugi_barang = new GantiListBarang();
                $ganti_rugi_barang->ganti_rugi_id = $ganti_rugi_id;
                $ganti_rugi_barang->barang = $barang->id;
                $ganti_rugi_barang->qty_rusak = $j_barang->pengembalian_rusak;
                $ganti_rugi_barang->qty_hilang = $j_barang->pengembalian_hilang;
                $ganti_rugi_barang->qty_diganti = 0;
                $ganti_rugi_barang->harga = $barang->harga;
                $ganti_rugi_barang->save();
            }
        }

        // ganti rugi body
        if ($rusak_cek || $hilang_cek) {
            $ganti_rugi = GantiRugi::find($ganti_rugi_id);

            $ganti_rugi->jumlah_barang = $barang_hilang_count + $barang_rusak_count;
            $ganti_rugi->total_qty_barang = $barang_hilang_count_qty + $barang_rusak_count_qty;

            $total = $barang_hilang_nominal + $barang_rusak_nominal;
            $ganti_rugi->nominal = $total;
            $ganti_rugi->sisa = $total;
            $ganti_rugi->dibayar = 0;
            $ganti_rugi->dibayar_barang = 0;
            $ganti_rugi->save();
        }

        // pemakaian barang habis pakai
        $barang_habis_pakai = SuratJalanBarangHabisPakai::where('surat_jalan', $model->id)->get();
        if ($barang_habis_pakai->count() > 0) {
            // pengurangan barang habis pakai head
            $pengurangan_bhs = new HabisPakaiPengurangan();
            $pengurangan_bhs->nama = "Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor $model->no_surat_jalan";
            $pengurangan_bhs->tanggal = $model->tanggal;
            $tanggal_penyewaan = $penyewaan->tanggal_pakai_dari == $penyewaan->tanggal_pakai_sampai
                ? $penyewaan->tanggal_pakai_dari :
                "$penyewaan->tanggal_pakai_dari s/d $penyewaan->tanggal_pakai_sampai";
            $pengurangan_bhs->keterangan = "Tanggal $tanggal_penyewaan, Di $penyewaan->kepada Lokasi $penyewaan->lokasi";
            $pengurangan_bhs->penyewaan = $penyewaan->id;
            $pengurangan_bhs->created_by = auth()->user()->id;
            $pengurangan_bhs->save();

            foreach ($barang_habis_pakai as $v) {
                // kurangi stok yang ada di tabel barang habis pakai
                $bhs = HabisPakai::find($v->barang_id);
                $bhs->qty = $bhs->qty - $v->qty;
                $bhs->save();

                // simpan ke  pengurangan
                $bhs_pengurangan = new HabisPakaiPenguranganList();
                $bhs_pengurangan->pengurangan = $pengurangan_bhs->id;
                $bhs_pengurangan->barang = $v->barang_id;
                $bhs_pengurangan->qty = $v->qty;
                $bhs_pengurangan->created_by = auth()->user()->id;
                $bhs_pengurangan->save();
            }
        }

        DB::commit();
        return ($model);
    }

    public function barang_habis_pakai_list(Request $request): mixed
    {
        try {
            $table = SuratJalanBarangHabisPakai::tableName;
            $t_barang = HabisPakai::tableName;
            $t_satuan = Satuan::tableName;
            $model = SuratJalanBarangHabisPakai::selectRaw(<<<SQL
            $table.id, $table.keterangan, $t_barang.nama, $t_barang.kode, $table.qty, 
            $table.harga, $t_barang.kode, $t_barang.qty as stok,
            ( $table.qty *  $table.harga) as total, $t_satuan.nama as satuan
            SQL)
                ->leftJoin($t_barang, "$t_barang.id", "=", "$table.barang_id")
                ->leftJoin($t_satuan, "$t_satuan.id", "=", "$t_barang.satuan")
                ->where('surat_jalan', $request->surat_jalan)
                ->orderBy("$table.created_at", 'desc')->get();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function barang_habis_pakai_insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_barang_habis_pakai);
            $model = new SuratJalanBarangHabisPakai();

            $model->surat_jalan = $request->surat_jalan;
            $model->barang_id = $request->barang_id;
            $model->qty = $request->qty;
            $model->harga = $request->harga;
            $model->keterangan = $request->keterangan;
            $model->created_by = auth()->user()->id;
            $model->save();

            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function barang_habis_pakai_update(Request $request): mixed
    {
        try {
            $model = SuratJalanBarangHabisPakai::findOrFail($request->id);
            $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_barang_habis_pakai));

            $model->surat_jalan = $request->surat_jalan;
            $model->barang_id = $request->barang_id;
            $model->qty = $request->qty;
            $model->harga = $request->harga;
            $model->keterangan = $request->keterangan;
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

    public function barang_habis_pakai_delete(SuratJalanBarangHabisPakai $model): mixed
    {
        try {
            $model->delete();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function barang_habis_pakai_find(Request $request)
    {
        $id = $request->id;
        $t_barang = HabisPakai::tableName;
        $t_jenis = Jenis::tableName;
        $t_satuan = Satuan::tableName;
        $t_bhs = SuratJalanBarangHabisPakai::tableName;

        $model = SuratJalanBarangHabisPakai::selectRaw("
        $t_bhs.*,
        $t_barang.id as barang_id,
        concat($t_barang.kode, ' | ', $t_barang.nama, ' (', $t_barang.qty,')') as barang_nama,
        $t_satuan.nama as satuan")
            ->leftJoin($t_barang, "$t_barang.id", '=', "$t_bhs.barang_id")
            ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
            ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
            ->where("$t_bhs.id", $id);

        $result = $model->first();
        return response()->json($result);
    }

    public function barang_habis_pakai_select2(Request $request)
    {
        try {
            $surat_jalan = $request->surat_jalan;
            $t_barang = HabisPakai::tableName;
            $t_jenis = Jenis::tableName;
            $t_satuan = Satuan::tableName;
            $t_bhs = SuratJalanBarangHabisPakai::tableName;

            $model = HabisPakai::selectRaw("$t_barang.*, concat($t_barang.kode, ' | ', $t_barang.nama, ' (', $t_barang.qty,')') as text, $t_satuan.nama as satuan")
                ->whereRaw(<<<SQL
                    ( `$t_jenis`.`nama` like '%$request->search%' or
                    `$t_satuan`.`nama` like '%$request->search%' or
                    `$t_barang`.`nama` like '%$request->search%' or
                    `$t_barang`.`kode` like '%$request->search%' or
                    `$t_barang`.`harga` like '%$request->search%' or
                    `$t_barang`.`id` like '%$request->search%'
                    ) and $t_barang.id not in (select barang_id from $t_bhs where $t_bhs.surat_jalan = '$surat_jalan') 
                SQL)
                ->leftJoin($t_jenis, "$t_jenis.id", '=', "$t_barang.jenis")
                ->leftJoin($t_satuan, "$t_satuan.id", '=', "$t_barang.satuan")
                ->limit(50);

            $result = $model->get()->toArray();
            return response()->json(['results' => $result]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }

    public function surat_pengembalian(Penyewaan $model)
    {
        $t_surat_jalan_barang = SuratJalanBarang::tableName;
        $t_surat_jalan_barang_hp = SuratJalanBarangHabisPakai::tableName;
        $t_barang_sewa = Sewa::tableName;
        $t_barang_hbs = HabisPakai::tableName;
        $t_satuan = Satuan::tableName;

        $customer = Customer::find($model->customer);


        $surat_jalan = SuratJalan::selectRaw("
        date_format(tanggal, '%d-%b-%Y') as tanggal_str,
        date_format(tanggal_kembali, '%d-%b-%Y') as tanggal_kembali_str,
        no_surat_jalan,
        id
        ")->where('penyewaan', $model->id)->first();


        // list barangs
        $barangs = SuratJalanBarang::selectRaw("
                $t_barang_sewa.kode,
                $t_barang_sewa.nama as barang,
                $t_satuan.nama as satuan,
                $t_surat_jalan_barang.qty as qty,
                $t_surat_jalan_barang.pengembalian_rusak as pengembalian_rusak,
                $t_surat_jalan_barang.pengembalian_hilang as pengembalian_hilang,
                $t_surat_jalan_barang.pengembalian_qty as pengembalian_qty
            ")
            ->join($t_barang_sewa, "$t_barang_sewa.id", '=', "$t_surat_jalan_barang.barang")
            ->join($t_satuan, "$t_satuan.id", '=', "$t_barang_sewa.satuan")
            ->where("$t_surat_jalan_barang.surat_jalan", '=', $surat_jalan->id)
            ->orderBy("$t_barang_sewa.nama")->get();

        $barang_hps = SuratJalanBarangHabisPakai::selectRaw("
                $t_barang_hbs.kode,
                $t_barang_hbs.nama as barang,
                $t_satuan.nama as satuan,
                $t_surat_jalan_barang_hp.qty as qty
            ")
            ->join($t_barang_hbs, "$t_barang_hbs.id", '=', "$t_surat_jalan_barang_hp.barang_id")
            ->join($t_satuan, "$t_satuan.id", '=', "$t_barang_hbs.satuan")
            ->where("$t_surat_jalan_barang_hp.surat_jalan", '=', $surat_jalan->id)
            ->orderBy("$t_barang_hbs.nama")->get();

        $penyewaan = $model;

        // parse to object
        $data = compact('surat_jalan', 'penyewaan', 'customer', 'barangs', 'barang_hps');
        $data['compact'] = $data;
        // return view('administrasi.pengembalian.surat_pengembalian', $data);

        view()->share('administrasi.pengembalian.surat_pengembalian', $data);
        $pdf = PDF::loadView('administrasi.pengembalian.surat_pengembalian', $data)
            ->setPaper('a4', 'landscape');

        $name = "Surat Pengambilan Barang $surat_jalan->no_surat_jalan.pdf";
        return $pdf->stream($name);
        exit();
    }
}
