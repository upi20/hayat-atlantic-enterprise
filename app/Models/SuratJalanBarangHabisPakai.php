<?php

namespace App\Models;

use App\Models\Barang\HabisPakai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratJalanBarangHabisPakai extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'surat_jalan_barang_habis_pakai';
    const tableName = 'surat_jalan_barang_habis_pakai';

    public function barang()
    {
        return $this->hasOne(HabisPakai::class);
    }
}
