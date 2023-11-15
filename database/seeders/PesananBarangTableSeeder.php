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
                'id' => '4',
                'pesanan_id' => '2',
                'barang_id' => '7',
                'qty' => '20',
                'stok' => '396',
                'harga' => '5000',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:48:33',
                'updated_at' => '2023-09-12 08:48:33',
            ),
            1 => 
            array (
                'id' => '5',
                'pesanan_id' => '2',
                'barang_id' => '5',
                'qty' => '20',
                'stok' => '1497',
                'harga' => '10000',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:48:33',
                'updated_at' => '2023-09-12 08:48:33',
            ),
            2 => 
            array (
                'id' => '6',
                'pesanan_id' => '2',
                'barang_id' => '4',
                'qty' => '1',
                'stok' => '30',
                'harga' => '750000',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:48:33',
                'updated_at' => '2023-09-12 08:48:33',
            ),
            3 => 
            array (
                'id' => '7',
                'pesanan_id' => '3',
                'barang_id' => '44',
                'qty' => '3',
                'stok' => '5',
                'harga' => '15000',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-23 16:59:56',
                'updated_at' => '2023-09-23 16:59:56',
            ),
            4 => 
            array (
                'id' => '8',
                'pesanan_id' => '4',
                'barang_id' => '43',
                'qty' => '2',
                'stok' => '8',
                'harga' => '15000',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-10-02 11:06:36',
                'updated_at' => '2023-10-02 11:06:36',
            ),
        ));
        
        
    }
}