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
                'id' => 5,
                'tanggal' => '2022-10-02',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 5000000,
                'penyewaan' => 5,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 14:22:54',
                'updated_at' => '2022-10-02 14:22:54',
            ),
        ));
        
        
    }
}