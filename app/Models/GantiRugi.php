<?php

namespace App\Models;

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
        return $this->hasOne(Customer::class, 'id', 'customer');
    }

    public function penyewaan()
    {
        return $this->hasOne(Penyewaan::class, 'id', 'penyewaan_id');
    }
}
