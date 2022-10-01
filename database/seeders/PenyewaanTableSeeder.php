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
                'id' => 5,
                'customer' => 1,
                'lokasi' => 'Alamat 1',
                'tanggal_kirim' => '2022-09-09',
                'tanggal_pakai_dari' => '2022-09-10',
                'tanggal_pakai_sampai' => '2022-09-10',
                'kepada' => 'Customer 1',
                'tanggal_order' => '2022-09-29 21:46:00',
                'status' => 1,
                'total_harga' => 11000000,
                'dibayar' => 11000000,
                'status_pembayaran' => 1,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-09-29 21:41:55',
                'updated_at' => '2022-10-02 00:29:55',
            ),
        ));
        
        
    }
}