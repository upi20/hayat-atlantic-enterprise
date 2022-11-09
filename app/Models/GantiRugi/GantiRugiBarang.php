<?php

namespace App\Models\GantiRugi;

use App\Models\Barang\Sewa;
use App\Models\GantiRugi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class GantiRugiBarang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'ganti_rugi_barang';
    const tableName = 'ganti_rugi_barang';
    const image_folder = '/assets/ganti_rugi_barang';

    public function getBarang()
    {
        return $this->hasOne(Sewa::class, 'id', 'barang');
    }

    public function ganti_rugi()
    {
        return $this->hasOne(GantiRugi::class, 'id', 'ganti_rugi_id');
    }

    public function getTanggalStrAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
            ->isoFormat("D MMMM Y");
    }
}
