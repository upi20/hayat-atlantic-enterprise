<?php

namespace App\Models;

use App\Models\Barang\Sewa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class SuratJalanBarang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'surat_jalan_barang';
    const tableName = 'surat_jalan_barang';


    public function barang_data()
    {
        return $this->hasOne(Sewa::class, 'id', 'barang');
    }
}
