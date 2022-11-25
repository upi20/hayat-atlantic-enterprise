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
                'id' => '3',
                'penyewaan' => '2',
                'barang' => '1',
                'qty' => '10',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:47:58',
                'updated_at' => '2022-11-12 16:47:58',
            ),
            1 => 
            array (
                'id' => '4',
                'penyewaan' => '2',
                'barang' => '2',
                'qty' => '1',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:48:38',
                'updated_at' => '2022-11-12 16:48:38',
            ),
            2 => 
            array (
                'id' => '5',
                'penyewaan' => '3',
                'barang' => '119',
                'qty' => '2',
                'harga' => '500000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:08:00',
                'updated_at' => '2022-11-12 17:08:00',
            ),
            3 => 
            array (
                'id' => '6',
                'penyewaan' => '3',
                'barang' => '100',
                'qty' => '100',
                'harga' => '12500',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:08:17',
                'updated_at' => '2022-11-12 17:08:17',
            ),
            4 => 
            array (
                'id' => '7',
                'penyewaan' => '4',
                'barang' => '1',
                'qty' => '10',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:52:30',
                'updated_at' => '2022-11-19 09:52:30',
            ),
            5 => 
            array (
                'id' => '8',
                'penyewaan' => '4',
                'barang' => '2',
                'qty' => '10',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:52:40',
                'updated_at' => '2022-11-19 09:52:40',
            ),
            6 => 
            array (
                'id' => '9',
                'penyewaan' => '4',
                'barang' => '2',
                'qty' => '10',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:52:49',
                'updated_at' => '2022-11-19 09:52:49',
            ),
        ));
        
        
    }
}