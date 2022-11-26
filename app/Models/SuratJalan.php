<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratJalan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'surat_jalan';
    const tableName = 'surat_jalan';

    public function barang_sewas()
    {
        return $this->hasMany(SuratJalanBarang::class, 'surat_jalan', 'id');
    }

    public function barang_habis_pakais()
    {
        return $this->hasMany(SuratJalanBarangHabisPakai::class, 'surat_jalan', 'id');
    }
}
