<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'penyewaan';
    const tableName = 'penyewaan';


    public function barangs()
    {
        return $this->hasMany(PenyewaanBarang::class, 'penyewaan_id', 'id');
    }

    public function getCustomer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer');
    }

    public function ganti_rugi()
    {
        return $this->hasOne(GantiRugi::class, 'penyewaan_id', 'id');
    }

    public function surat_jalan()
    {
        return $this->hasOne(SuratJalan::class, 'penyewaan', 'id');
    }
}
