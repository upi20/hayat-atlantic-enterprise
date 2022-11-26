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
                'id' => 17,
                'customer' => NULL,
                'number' => 'SP/00017',
                'lokasi' => NULL,
                'tanggal_kirim' => NULL,
                'tanggal_pakai_dari' => NULL,
                'tanggal_pakai_sampai' => NULL,
                'kepada' => NULL,
                'tanggal_order' => NULL,
                'status' => 0,
                'total_harga' => 0,
                'dibayar' => 0,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-22 09:21:00',
                'updated_at' => '2022-10-22 09:21:00',
            ),
        ));
        
        
    }
}