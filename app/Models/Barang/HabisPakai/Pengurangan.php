<?php

namespace App\Models\Barang\HabisPakai;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurangan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'barang_habis_pakai_pengurangan';
    const tableName = 'barang_habis_pakai_pengurangan';
}
