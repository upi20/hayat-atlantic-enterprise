<?php

namespace App\Models;

use App\Models\Barang\Sewa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananBarang extends Model
{
    use HasFactory;
    protected $fillable = [
        'pesanan_id',
        'barang_id',
        'qty',
        'stok',
        'harga',
        'updated_by',
        'created_by',
    ];

    protected $primaryKey = 'id';
    protected $table = 'pesanan_barang';
    const tableName = 'pesanan_barang';

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(Sewa::class, 'barang_id', 'id');
    }
}
