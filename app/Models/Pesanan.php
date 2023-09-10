<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'tanggal_pakai_dari',
        'tanggal_pakai_sampai',
        'total_harga',
        'status',
        'customer_nama',
        'customer_no_telepon',
        'customer_alamat',
        'updated_by',
        'created_by',
    ];

    protected $primaryKey = 'id';
    protected $table = 'pesanan';
    const tableName = 'pesanan';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function barangs()
    {
        return $this->hasMany(PesananBarang::class, 'pesanan_id', 'id');
    }

    public static function datatable(Request $request): mixed
    {
        // list table
        $query = [];
        $table = static::tableName;
        $t_customer = Customer::tableName;

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
        $query = array_merge($query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $query = array_merge($query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $query = array_merge($query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $query = array_merge($query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));

        $format = '%d-%b-%Y';

        // tanggal
        $c_tanggal = 'tanggal';
        $query[$c_tanggal] = <<<SQL
            if($table.tanggal_pakai_dari = $table.tanggal_pakai_sampai, DATE_FORMAT($table.tanggal_pakai_sampai, '$format'), concat(DATE_FORMAT($table.tanggal_pakai_dari, '$format'), ' s/d ' ,DATE_FORMAT($table.tanggal_pakai_sampai, '$format')))
        SQL;
        $query["{$c_tanggal}_alias"] = $c_tanggal;

        // status_str
        $c_status_str = 'status_str';
        $query[$c_status_str] = <<<SQL
            if($table.status = 2, 'Pesanan Diterima', 'Pesanan Dibuat')
        SQL;
        $query["{$c_status_str}_alias"] = $c_status_str;

        // status_class
        $c_status_class = 'status_class';
        $query[$c_status_class] = <<<SQL
            if($table.status = 2, 'success', 'primary')
        SQL;
        $query["{$c_status_class}_alias"] = $c_status_class;

        $c_customer_nama = 'customer';
        $query[$c_customer_nama] = "$t_customer.nama";
        $query["{$c_customer_nama}_alias"] = $c_customer_nama;
        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col) use ($query): string {
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_tanggal,
            $c_status_str,
            $c_status_class,
            $c_customer_nama,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = static::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->join($t_customer, "$t_customer.id", '=', "$table.customer_id");

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter custom
        $filters = ['status'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }

        if (isset($request->filter['bulan']) && isset($request->filter['tahun'])) {
            $bulan = $request->filter['bulan'];
            $tahun = $request->filter['tahun'];
            $bulan_next = $bulan == 12 ? 1 : $bulan + 1;
            $tahun_next = $bulan == 12 ? $tahun + 1 : $tahun;
            $model->whereRaw("($table.tanggal_pakai_dari >= '$tahun-$bulan-01' and $table.tanggal_pakai_dari < '$tahun_next-$bulan_next-01')");
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $static = new static();
            $search_add = $static->fillable;
            $search_add = array_map(function ($v) use ($table) {
                return "$table.$v";
            }, $search_add);
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

    public static function refreshTotalHarga(int $id)
    {
        $total = PesananBarang::selectRaw('SUM(qty * harga) as total_harga')->wherePesananId($id)->first();
        $total = $total->total_harga ?? 0;

        $pesanan = static::find($id);
        $pesanan->total_harga = $total;
        $pesanan->save();
    }
}
