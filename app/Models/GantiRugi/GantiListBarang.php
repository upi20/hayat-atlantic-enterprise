<?php

namespace App\Models\GantiRugi;

use App\Models\Barang\Satuan;
use App\Models\Barang\Sewa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiListBarang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'ganti_list_barang';
    const tableName = 'ganti_list_barang';
    const image_folder = '/assets/ganti_list_barang';

    public function getBarang()
    {
        return $this->hasOne(Sewa::class, 'id', 'barang');
    }
}
