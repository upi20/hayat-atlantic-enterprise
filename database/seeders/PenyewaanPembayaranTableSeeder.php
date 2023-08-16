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
                'id' => 1,
                'tanggal' => '2022-11-29',
                'nama' => 'fina',
                'keterangan' => NULL,
                'nominal' => 300000,
                'penyewaan' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-11-29 20:23:58',
                'updated_at' => '2022-11-29 20:23:58',
            ),
            1 => 
            array (
                'id' => 2,
                'tanggal' => '2022-11-29',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 300000,
                'penyewaan' => 2,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-11-29 20:36:31',
                'updated_at' => '2022-11-29 20:36:31',
            ),
            2 => 
            array (
                'id' => 3,
                'tanggal' => '2022-11-29',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 260000,
                'penyewaan' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-11-29 21:08:43',
                'updated_at' => '2022-11-29 21:08:43',
            ),
            3 => 
            array (
                'id' => 4,
                'tanggal' => '2023-07-16',
                'nama' => 'dp',
                'keterangan' => NULL,
                'nominal' => 500000,
                'penyewaan' => 3,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2023-07-16 12:15:52',
                'updated_at' => '2023-07-16 12:15:52',
            ),
            4 => 
            array (
                'id' => 5,
                'tanggal' => '2023-07-16',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 260000,
                'penyewaan' => 3,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2023-07-16 12:20:23',
                'updated_at' => '2023-07-16 12:20:23',
            ),
            5 => 
            array (
                'id' => 6,
                'tanggal' => '2023-08-17',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 10000,
                'penyewaan' => 4,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2023-08-17 00:47:45',
                'updated_at' => '2023-08-17 00:47:45',
            ),
        ));
        
        
    }
}