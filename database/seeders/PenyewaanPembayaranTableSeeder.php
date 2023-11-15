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
                'id' => '1',
                'tanggal' => '2023-09-12',
                'nama' => 'Dp',
                'keterangan' => NULL,
                'nominal' => '600000',
                'penyewaan' => '1',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:10:11',
                'updated_at' => '2023-09-12 09:10:11',
            ),
        ));
        
        
    }
}