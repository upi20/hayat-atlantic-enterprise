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
                'id' => 7,
                'tanggal' => '2022-10-02',
                'nama' => 'Pembayaran Ke 2',
                'keterangan' => NULL,
                'nominal' => 1000000,
                'penyewaan' => 5,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
            1 => 
            array (
                'id' => 13,
                'tanggal' => '2022-10-08',
                'nama' => 'DP',
                'keterangan' => NULL,
                'nominal' => 50000,
                'penyewaan' => 6,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:50:44',
                'updated_at' => '2022-10-08 10:50:44',
            ),
            2 => 
            array (
                'id' => 25,
                'tanggal' => '2022-10-08',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'nominal' => 50000,
                'penyewaan' => 6,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:57:02',
                'updated_at' => '2022-10-08 10:57:02',
            ),
        ));
        
        
    }
}