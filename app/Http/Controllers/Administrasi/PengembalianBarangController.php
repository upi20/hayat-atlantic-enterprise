<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang\Sewa;

use App\Models\Faktur;
use App\Models\FakturBarang;
use App\Models\Penyewaan;
use App\Models\PenyewaanBarang;
use App\Models\PenyewaanPembayaran;
use App\Models\User;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PengembalianBarangController extends Controller
{
    //
}
