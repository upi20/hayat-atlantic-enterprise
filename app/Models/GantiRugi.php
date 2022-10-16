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
}
