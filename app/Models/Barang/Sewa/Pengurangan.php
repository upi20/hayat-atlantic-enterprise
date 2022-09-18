<?php

namespace App\Models\Barang\Sewa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurangan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'barang_pengurangan';
    const tableName = 'barang_pengurangan';
}
