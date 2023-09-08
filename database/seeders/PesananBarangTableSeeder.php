<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PesananBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pesanan_barang')->delete();
        
        \DB::table('pesanan_barang')->insert(array (
            0 => 
            array (
                'id' => 32,
                'pesanan_id' => 9,
                'barang_id' => 11,
                'qty' => 1,
                'stok' => 0,
                'harga' => 7500,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2023-09-08 10:49:52',
                'updated_at' => '2023-09-08 16:09:45',
            ),
            1 => 
            array (
                'id' => 35,
                'pesanan_id' => 8,
                'barang_id' => 43,
                'qty' => 11,
                'stok' => 0,
                'harga' => 15000,
                'updated_by' => 5,
                'created_by' => NULL,
                'created_at' => '2023-09-08 15:56:08',
                'updated_at' => '2023-09-08 16:48:24',
            ),
            2 => 
            array (
                'id' => 36,
                'pesanan_id' => 8,
                'barang_id' => 44,
                'qty' => 3,
                'stok' => 0,
                'harga' => 15000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2023-09-08 15:56:08',
                'updated_at' => '2023-09-08 15:56:08',
            ),
            3 => 
            array (
                'id' => 37,
                'pesanan_id' => 8,
                'barang_id' => 46,
                'qty' => 50,
                'stok' => 0,
                'harga' => 35000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2023-09-08 15:56:08',
                'updated_at' => '2023-09-08 15:56:08',
            ),
        ));
        
        
    }
}