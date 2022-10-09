<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan')->delete();
        
        \DB::table('penyewaan')->insert(array (
            0 => 
            array (
                'id' => 8,
                'customer' => 1,
                'lokasi' => 'Gedung Sate',
                'tanggal_kirim' => '2022-10-10',
                'tanggal_pakai_dari' => '2022-10-11',
                'tanggal_pakai_sampai' => '2022-10-11',
                'kepada' => 'Bpk. Daniel Nugraha',
                'tanggal_order' => '2022-10-09',
                'status' => 3,
                'total_harga' => 2900000,
                'dibayar' => 1500000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 13:57:16',
                'updated_at' => '2022-10-09 14:40:41',
            ),
            1 => 
            array (
                'id' => 9,
                'customer' => 1,
                'lokasi' => 'Jl. Supratman no 54 gedung b',
                'tanggal_kirim' => '2022-10-12',
                'tanggal_pakai_dari' => '2022-10-13',
                'tanggal_pakai_sampai' => '2022-10-13',
                'kepada' => 'Bpk. Ir. Faisal',
                'tanggal_order' => '2022-10-09',
                'status' => 3,
                'total_harga' => 8850000,
                'dibayar' => 4000000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:32:40',
                'updated_at' => '2022-10-09 21:50:57',
            ),
        ));
        
        
    }
}