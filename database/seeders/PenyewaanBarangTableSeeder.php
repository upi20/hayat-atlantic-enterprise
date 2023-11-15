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
                'id' => '1',
                'penyewaan' => '1',
                'barang' => '4',
                'qty' => '20',
                'harga' => '5000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:49:57',
                'updated_at' => '2023-09-12 08:49:57',
            ),
            1 => 
            array (
                'id' => '2',
                'penyewaan' => '1',
                'barang' => '5',
                'qty' => '20',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:49:57',
                'updated_at' => '2023-09-12 08:49:57',
            ),
            2 => 
            array (
                'id' => '3',
                'penyewaan' => '1',
                'barang' => '6',
                'qty' => '1',
                'harga' => '750000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:49:57',
                'updated_at' => '2023-09-12 08:49:57',
            ),
        ));
        
        
    }
}