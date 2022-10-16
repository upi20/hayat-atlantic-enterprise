<?php

namespace App\Models\GantiRugi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiRugiBarang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'ganti_rugi_barang';
    const tableName = 'ganti_rugi_barang';
    const image_folder = '/assets/ganti_rugi_barang';
}
