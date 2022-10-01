<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanPembayaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan_pembayaran')->delete();
        
        \DB::table('penyewaan_pembayaran')->insert(array (
            0 => 
            array (
                'id' => 2,
                'tanggal' => '2022-10-01',
                'nama' => 'DP',
                'keterangan' => 'Awal Pembayaran',
                'nominal' => 6000000,
                'penyewaan' => 5,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-01 17:29:55',
                'updated_at' => '2022-10-01 17:43:41',
            ),
            1 => 
            array (
                'id' => 4,
                'tanggal' => '2022-10-01',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 5000000,
                'penyewaan' => 5,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-01 17:52:14',
                'updated_at' => '2022-10-01 17:52:14',
            ),
        ));
        
        
    }
}