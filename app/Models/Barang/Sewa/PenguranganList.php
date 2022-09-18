<?php

namespace App\Models\Barang\Sewa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenguranganList extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'barang_pengurangan_list';
    const tableName = 'barang_pengurangan_list';
}
