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
                'id' => 26,
                'tanggal' => '2022-10-09',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 8,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            1 => 
            array (
                'id' => 27,
                'tanggal' => '2022-10-09',
                'nama' => 'Pembayaran Ke 2',
                'keterangan' => NULL,
                'nominal' => 500000,
                'penyewaan' => 8,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            2 => 
            array (
                'id' => 28,
                'tanggal' => '2022-10-09',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 4000000,
                'penyewaan' => 9,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:35:45',
                'updated_at' => '2022-10-09 21:35:45',
            ),
            3 => 
            array (
                'id' => 29,
                'tanggal' => '2022-10-10',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 10,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:33:26',
                'updated_at' => '2022-10-10 00:33:26',
            ),
            4 => 
            array (
                'id' => 30,
                'tanggal' => '2022-10-10',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 1400000,
                'penyewaan' => 8,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            5 => 
            array (
                'id' => 31,
                'tanggal' => '2022-10-10',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 2750000,
                'penyewaan' => 10,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:48:35',
                'updated_at' => '2022-10-10 11:48:35',
            ),
            6 => 
            array (
                'id' => 32,
                'tanggal' => '2022-10-10',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 10000000,
                'penyewaan' => 11,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:56:17',
                'updated_at' => '2022-10-10 11:56:17',
            ),
        ));
        
        
    }
}