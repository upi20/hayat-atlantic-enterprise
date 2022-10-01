<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Barang\Jenis;
use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;

use App\Models\Customer;
use App\Models\Faktur;
use App\Models\FakturBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\PenyewaanPembayaran;
use App\Models\User;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;
use Yajra\Datatables\Datatables;

class PembayaranController extends Controller
{
    private $validate_model = [
        'penyewaan' => ['required', 'int'],
        'nama' => ['required', 'string'],
        'tanggal' => ['required', 'date'],
        'nominal' => ['required', 'int'],
        'keterangan' => ['nullable', 'string'],
    ];

    private $query = [];

    public function index(Request $request)
    {
        $page_attr = [
            'title' => 'Pembayaran',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        return view('administrasi.pembayaran.pembayaran', compact('page_attr'));
    }

    public function list(Penyewaan $model, Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }
        $page_attr = [
            'title' => 'Pembayaran List',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Pembayaran', 'route' => route(h_prefix(null, 2))],
            ],
            'navigation' => h_prefix(null, 2)
        ];
        return view('administrasi.pembayaran.list', compact('page_attr', 'model'));
    }

    public function simpan_status(Penyewaan $model, Request $request)
    {
        try {
            $request->validate(['status_pembayaran' => ['required', 'int']]);
            $model->status_pembayaran = $request->status_pembayaran;
            $model->save();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
        return response()->json($model);
    }

    public function insert(Request $request)
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();
            $model = new PenyewaanPembayaran();
            $model->penyewaan = $request->penyewaan;
            $model->nama = $request->nama;
            $model->tanggal = $request->tanggal;
            $model->nominal = $request->nominal;
            $model->keterangan = $request->keterangan;
            $model->created_by = auth()->user()->id;
            $model->save();


            // update penyewaan
            $penyewaan = Penyewaan::find($request->penyewaan);
            $penyewaan->dibayar = $penyewaan->dibayar + $model->nominal;

            if ($penyewaan->status_pembayaran == 0 && $penyewaan->total_harga >= $penyewaan->dibayar) {
                $penyewaan->status_pembayaran = 1;
            }

            if ($penyewaan->status == 1) {
                $penyewaan->status = 2;
            }
            $penyewaan->save();


            // simpan ke faktur
            $faktur = new Faktur();
            $faktur->no_faktur = time();
            $faktur->tanggal = $model->tanggal;
            $faktur->jumlah = $model->nominal;
            $faktur->sisa = $penyewaan->total_harga - $penyewaan->dibayar;
            $faktur->pembayaran = $model->id;
            $faktur->total = $penyewaan->total_harga;
            $faktur->pembayaran_sebelumnya = $penyewaan->dibayar - $model->nominal;
            $faktur->save();

            // simpan ke faktur barang
            $penyewaan_barang = PenyewaanBarang::where('penyewaan', $model->penyewaan)->get();
            foreach ($penyewaan_barang as $p_barang) {
                $faktur_b = new FakturBarang();
                $faktur_b->faktur = $faktur->id;
                $faktur_b->barang = $p_barang->barang;
                $faktur_b->qty = $p_barang->qty;
                $faktur_b->harga = $p_barang->harga;
                $faktur_b->keterangan = $p_barang->keterangan;
                $faktur_b->created_by = auth()->user()->id;
                $faktur_b->save();
            }

            DB::commit();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
        return response()->json($model);
    }

    public function update(Request $request)
    {
        // dibatalkan
        return response()->json([], 500);
    }

    public function find(Request $request)
    {
        return PenyewaanPembayaran::findOrFail($request->id);
    }

    public function delete(PenyewaanPembayaran $model): mixed
    {
        // hanya admin
        // hapus faktur
        // hapus faktur barang
        try {
            DB::beginTransaction();
            $penyewaan = Penyewaan::find($model->penyewaan);
            $penyewaan->dibayar = $penyewaan->dibayar - $model->nominal;
            $penyewaan->save();

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

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $table = PenyewaanPembayaran::tableName;

        // cusotm query
        // ========================================================================================================
        // creted at and updated at
        $date_format_fun = function (string $select, string $format, string $alias) use ($table): array {
            $str = <<<SQL
                (DATE_FORMAT($table.$select, '$format'))
            SQL;
            return [$alias => $str, ($alias . '_alias') => $alias];
        };

        $c_created = 'created';
        $c_created_str = 'created_str';
        $c_updated = 'updated';
        $c_updated_str = 'updated_str';
        $c_tanggal_str = 'tanggal_str';
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_tanggal_str));

        // created_by
        $c_created_by = 'created_by_str';
        $t_created_by = 'b';
        $this->query[$c_created_by] = "$t_created_by.name";
        $this->query["{$c_created_by}_alias"] = $c_created_by;

        // updated_by
        $c_updated_by = 'updated_by_str';
        $t_updated_by = 'c';
        $this->query[$c_updated_by] = "$t_updated_by.name";
        $this->query["{$c_updated_by}_alias"] = $c_updated_by;
        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            return $this->query[$col] . ' as ' . $this->query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_created_by,
            $c_updated_by,
            $c_tanggal_str
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = PenyewaanPembayaran::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin("$t_user as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        // $f = [$c_created_by, $c_updated_by];
        // // loop filter
        // foreach ($f as $v) {
        //     if ($f_c($v)) {
        //         $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
        //     }
        // }

        // filter custom
        $filters = ['updated_by', 'created_by'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();
        foreach ($model_filter as $v) {
            // custom pencarian
            $datatable->filterColumn($this->query["{$v}_alias"], function ($query, $keyword) use ($v) {
                $query->whereRaw("({$this->query[$v]} like '%$keyword%')");
            });
        }

        // create datatable
        $result = $datatable->make(true)->getData();

        // total penyewaan
        $penyewaan = Penyewaan::find($request->filter['penyewaan'])->first();

        $result->penyewaan = $penyewaan;
        return $result;
    }

    public function faktur(PenyewaanPembayaran $model, Request $request)
    {
        $t_barang = Sewa::tableName;
        $t_faktur = Faktur::tableName;
        $t_penyewaan = Penyewaan::tableName;
        $table = FakturBarang::tableName;

        $faktur = Faktur::select([
            DB::raw("$t_faktur.*"),
            DB::raw("date_format($t_faktur.tanggal, '%W, %d %M %Y') as tanggal_str"),
        ])->where('pembayaran', $model->id)->first();

        $penyewaan = Penyewaan::select([
            DB::raw("$t_penyewaan.*"),
            DB::raw("date_format(tanggal_kirim, '%W, %d %M %Y') as tanggal_kirim"),
            DB::raw("date_format(tanggal_pakai_dari, '%W, %d %M %Y') as tanggal_pakai_dari"),
            DB::raw("date_format(tanggal_pakai_sampai, '%W, %d %M %Y') as tanggal_pakai_sampai"),
            DB::raw("(DATEDIFF(tanggal_pakai_sampai, tanggal_pakai_dari)+1) as pakai_hari"),
        ])->where('id', $model->penyewaan)->first();

        $barangs = FakturBarang::select([
            DB::raw("$table.*"),
            DB::raw("$t_barang.nama as barang_nama"),
            DB::raw("($table.qty * $table.harga) as harga_total"),
        ])
            ->where('faktur', $faktur->id)
            ->leftJoin($t_barang, "$t_barang.id", "$table.barang")
            ->get();

        // dd($barang);
        // dd($faktur);



        return view('administrasi.pembayaran.faktur', compact('faktur', 'barangs', 'model', 'penyewaan'));
    }
}
