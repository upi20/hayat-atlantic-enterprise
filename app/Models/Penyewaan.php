<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Penyewaan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'penyewaan';
    const tableName = 'penyewaan';

    public function barangs()
    {
        return $this->hasMany(PenyewaanBarang::class, 'penyewaan', 'id');
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

    public static function insertFromPesanan(Pesanan $pesanan)
    {
        // customer
        $customer = $pesanan->customer;
        $barangs = $pesanan->barangs;
        $user_id = auth()->user()->id;

        // buat penyewaan
        $penyewaan = new static();
        $penyewaan->status = 1; // Penyewaan Dibuat
        $penyewaan->created_by = $user_id;

        // no resi
        $max_id = static::max('number');
        $max_id = $max_id ?? 'SP/00001';
        $max_id = (int)str_replace('SP/', '', $max_id);
        $max_id++;
        $penyewaan->number = 'SP/' . str_pad($max_id, 5, '0', STR_PAD_LEFT);

        // data dari pesanan 
        $penyewaan->lokasi = $customer->alamat;
        $penyewaan->kepada = $customer->nama;

        // tanggal
        $created_at = Carbon::parse($pesanan->created_at);
        $penyewaan->tanggal_order = $created_at->toDateString();

        // tanggal kirim
        $penyewaan->tanggal_kirim = Carbon::parse($pesanan->tanggal_pakai_dari)->subDay()->toDateString(); // dikurangi 1 hari tanggal pakai
        $penyewaan->tanggal_pakai_dari = Carbon::parse($pesanan->tanggal_pakai_dari)->toDateString();
        $penyewaan->tanggal_pakai_sampai = Carbon::parse($pesanan->tanggal_pakai_sampai)->toDateString();

        // harga
        $penyewaan->total_harga = $pesanan->total_harga;

        // customer
        $penyewaan->customer = $pesanan->customer_id;
        $penyewaan->save();
        // penyewaan barang
        foreach ($barangs as $barang) {
            $sewaBarang = new PenyewaanBarang();
            $sewaBarang->penyewaan = $penyewaan->id;
            $sewaBarang->barang = $barang->id;
            $sewaBarang->qty = $barang->qty;
            $sewaBarang->harga = $barang->harga;
            $sewaBarang->created_by = $user_id;
            $sewaBarang->save();
        }
    }
}
