<?php

namespace App\Models;

use App\Models\Barang\Sewa;
use App\Models\GantiRugi\GantiListBarang;
use App\Models\GantiRugi\GantiRugiBarang;
use App\Models\GantiRugi\GantiRugiPembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiRugi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'ganti_rugi';
    const tableName = 'ganti_rugi';
    const image_folder = '/assets/ganti_rugi';

    public function getCustomer()
    {
        return $this->belongsTo(Customer::class, 'customer', 'id');
    }

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'penyewaan_id', 'id');
    }

    public function pembayaran()
    {
        return $this->hasMany(GantiRugiPembayaran::class, 'ganti_rugi_id', 'id');
    }

    public function list_barang()
    {
        return $this->hasMany(GantiListBarang::class, 'ganti_rugi_id', 'id');
    }

    public function ganti_barangs()
    {
        return $this->hasMany(GantiRugiBarang::class, 'ganti_rugi_id', 'id');
    }
}
