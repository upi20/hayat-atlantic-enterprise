<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan_barang')->delete();
        
        \DB::table('penyewaan_barang')->insert(array (
            0 => 
            array (
                'id' => 7,
                'penyewaan' => 5,
                'barang' => 1,
                'qty' => 10,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-29 21:48:05',
                'updated_at' => '2022-09-29 21:48:05',
            ),
            1 => 
            array (
                'id' => 8,
                'penyewaan' => 5,
                'barang' => 3,
                'qty' => 500,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-30 21:17:03',
                'updated_at' => '2022-09-30 21:17:03',
            ),
            2 => 
            array (
                'id' => 9,
                'penyewaan' => 5,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-30 21:17:22',
                'updated_at' => '2022-09-30 21:17:22',
            ),
            3 => 
            array (
                'id' => 10,
                'penyewaan' => 5,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-30 21:21:53',
                'updated_at' => '2022-09-30 21:21:53',
            ),
            4 => 
            array (
                'id' => 11,
                'penyewaan' => 5,
                'barang' => 5,
                'qty' => 500,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:49:12',
                'updated_at' => '2022-10-02 16:49:12',
            ),
        ));
        
        
    }
}