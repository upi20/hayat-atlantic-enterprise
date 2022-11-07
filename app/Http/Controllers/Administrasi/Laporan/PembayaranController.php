<?php

namespace App\Http\Controllers\Administrasi\Laporan;

use App\Http\Controllers\Controller;
use App\Models\Barang\HabisPakai;
use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;
use App\Models\Customer;
use App\Models\Faktur;
use App\Models\GantiRugi;
use App\Models\GantiRugi\GantiListBarang;
use App\Models\GantiRugi\GantiRugiBarang;
use App\Models\GantiRugi\GantiRugiPembayaran;
use App\Models\Penyewaan;
use App\Models\PenyewaanPembayaran;
use App\Models\SuratJalan;
use App\Models\SuratJalanBarang;
use App\Models\SuratJalanBarangHabisPakai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use PDF;
use App\Models\User;

class PembayaranController extends Controller
{
    private $query = [];

    public function index(Request $request)
    {
        // date default
        $month = date('m');
        $year = date('Y');
        $date_end = '';
        $date_start = '';
        if ($month == 12) {
            $date_start = "$year-12-01";
            $year++;
            $date_end = date('Y-m-d', strtotime("$year-01-01 - 1 days"));
        } else {
            $month = $month < 9 ?  "0$month" : $month;
            $date_start = "$year-$month-01";
            $month++;
            $date_end = date('Y-m-d', strtotime("$year-$month-01 - 1 days"));
        }

        if (request()->ajax()) {
            return $this->datatable($request);
        }

        $page_attr = [
            'title' => 'Laporan Pengembalian',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
                ['name' => 'Laporan'],
            ]
        ];
        return view('administrasi.laporan.pembayaran', compact('page_attr', 'date_end', 'date_start'));
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $t_user = User::tableName;
        $t_faktur = Faktur::tableName;
        $t_penyewaan = Penyewaan::tableName;
        $t_customer = Customer::tableName;
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
        $this->query = array_merge($this->query, $date_format_fun('tanggal', '%d-%b-%Y', $c_tanggal_str));

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

        // updated_by
        $c_dibatalkan = 'dibatalkan';
        $this->query[$c_dibatalkan] = "if($table.batal_tanggal is null, 'Ya', 'Tidak')";
        $this->query["{$c_dibatalkan}_alias"] = $c_dibatalkan;

        // no_faktur
        $c_no_faktur = 'no_faktur';
        $this->query[$c_no_faktur] = "$t_faktur.no_faktur";
        $this->query["{$c_no_faktur}_alias"] = $c_no_faktur;

        // penyewaan_number
        $c_penyewaan_number = 'penyewaan_number';
        $this->query[$c_penyewaan_number] = "$t_penyewaan.number";
        $this->query["{$c_penyewaan_number}_alias"] = $c_penyewaan_number;

        // penyewaan_id
        $c_penyewaan_id = 'penyewaan_id';
        $this->query[$c_penyewaan_id] = "$t_penyewaan.id";
        $this->query["{$c_penyewaan_id}_alias"] = $c_penyewaan_id;

        // customer_nama
        $c_customer_nama = 'customer_nama';
        $this->query[$c_customer_nama] = "$t_customer.nama";
        $this->query["{$c_customer_nama}_alias"] = $c_customer_nama;
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
            $c_tanggal_str,
            $c_dibatalkan,
            $c_no_faktur,
            $c_penyewaan_number,
            $c_penyewaan_id,
            $c_customer_nama
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
            ->leftJoin("$t_user as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by")
            ->leftJoin($t_faktur, "$t_faktur.pembayaran", '=', "$table.id")
            ->leftJoin($t_penyewaan, "$table.penyewaan", '=', "$t_penyewaan.id")
            ->leftJoin($t_customer, "$t_customer.id", '=', "$t_penyewaan.customer");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [$c_dibatalkan];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v)) {
                $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = ['updated_by', 'created_by', 'penyewaan'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }

        $model->whereNull("$table.batal_tanggal");
        $model->whereRaw("($table.tanggal >= '{$request->filter['dari_tanggal']}' and $table.tanggal <= '{$request->filter['sampai_tanggal']}')");
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $this->query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $search_add = [
                "$table.tanggal",
                "$table.nama",
                "$table.keterangan",
                "$table.nominal",
                "$table.penyewaan",
                "$table.batal_keterangan",
                "$table.batal_tanggal",
                "$table.batal_oleh",
                "$table.updated_by",
                "$table.created_by",
            ];

            $search_arr = array_merge($model_filter, $search_add);

            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });


        // create datatable
        return $datatable->make(true);
    }

    public function cetak_laporan(Request $request)
    {
        $pembayarans = $this->datatable($request);
        $pembayarans = $pembayarans->original['data'];

        $dari_tanggal = Carbon::parse($request->filter['dari_tanggal'])
            ->isoFormat("D MMMM Y");
        $sampai_tanggal = Carbon::parse($request->filter['sampai_tanggal'])
            ->isoFormat("D MMMM Y");
        $search = request('search');
        $search = isset($search['value']) ? $search['value'] : null;

        // parse to object
        $data = compact('pembayarans', 'dari_tanggal', 'sampai_tanggal', 'search');
        $data['compact'] = $data;

        // return view('administrasi.laporan.pembayaran_cetak', $data);
        view()->share('administrasi.laporan.pembayaran_cetak', $data);
        $pdf = PDF::loadView('administrasi.laporan.pembayaran_cetak', $data)
            ->setPaper('a4', 'landscape');

        $name = "Laporan Pembayaran Penyewaan $dari_tanggal-$sampai_tanggal.pdf";
        return $pdf->stream($name);
        exit();
    }
}
