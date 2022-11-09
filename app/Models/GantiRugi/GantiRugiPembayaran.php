<?php

namespace App\Models\GantiRugi;

use App\Models\GantiRugi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiRugiPembayaran extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'ganti_rugi_pembayaran';
    const tableName = 'ganti_rugi_pembayaran';
    const image_folder = '/assets/ganti_rugi_pembayaran';

    public function ganti_rugi()
    {
        return $this->belongsTo(GantiRugi::class, 'ganti_rugi_id', 'id');
    }
}
