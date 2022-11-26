<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyewaanPembayaran extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'penyewaan_pembayaran';
    const tableName = 'penyewaan_pembayaran';

    public function faktur()
    {
        return $this->hasOne(Faktur::class, 'pembayaran', 'id');
    }
}
