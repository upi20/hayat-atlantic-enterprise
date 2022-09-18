<?php

namespace App\Models\Barang\HabisPakai;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenguranganList extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'barang_habis_pakai_pengurangan_list';
    const tableName = 'barang_habis_pakai_pengurangan_list';
}
