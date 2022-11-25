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
                'id' => '2',
                'tanggal' => '2022-11-12',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => '1010000',
                'penyewaan' => '2',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:49:02',
                'updated_at' => '2022-11-12 16:49:02',
            ),
            1 => 
            array (
                'id' => '3',
                'tanggal' => '2022-11-12',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => '1000000',
                'penyewaan' => '3',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:10:29',
                'updated_at' => '2022-11-12 17:10:29',
            ),
            2 => 
            array (
                'id' => '4',
                'tanggal' => '2022-11-12',
                'nama' => 'Pembayaran Ke 2',
                'keterangan' => NULL,
                'nominal' => '250000',
                'penyewaan' => '3',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:12:48',
                'updated_at' => '2022-11-12 17:12:48',
            ),
            3 => 
            array (
                'id' => '5',
                'tanggal' => '2022-11-19',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => '600000',
                'penyewaan' => '4',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:53:18',
                'updated_at' => '2022-11-19 09:53:18',
            ),
            4 => 
            array (
                'id' => '6',
                'tanggal' => '2022-11-19',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => '1000000',
                'penyewaan' => '3',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:56:07',
                'updated_at' => '2022-11-19 09:56:07',
            ),
        ));
        
        
    }
}