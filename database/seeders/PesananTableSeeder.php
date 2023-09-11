<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pesanan')->delete();
        
        \DB::table('pesanan')->insert(array (
            0 => 
            array (
                'id' => '8',
                'customer_id' => '1',
                'tanggal_pakai_dari' => '2023-09-09',
                'tanggal_pakai_sampai' => '2023-09-09',
                'total_harga' => '1960000',
                'status' => '2',
                'customer_nama' => NULL,
                'customer_no_telepon' => NULL,
                'customer_alamat' => NULL,
                'updated_by' => '1',
                'created_by' => NULL,
                'created_at' => '2023-09-08 10:43:36',
                'updated_at' => '2023-09-08 16:48:32',
            ),
            1 => 
            array (
                'id' => '9',
                'customer_id' => '11',
                'tanggal_pakai_dari' => '2023-09-09',
                'tanggal_pakai_sampai' => '2023-09-16',
                'total_harga' => '7500',
                'status' => '2',
                'customer_nama' => NULL,
                'customer_no_telepon' => NULL,
                'customer_alamat' => NULL,
                'updated_by' => '5',
                'created_by' => NULL,
                'created_at' => '2023-09-08 10:43:39',
                'updated_at' => '2023-09-09 13:55:35',
            ),
            2 => 
            array (
                'id' => '10',
                'customer_id' => '19',
                'tanggal_pakai_dari' => '2023-09-13',
                'tanggal_pakai_sampai' => '2023-09-14',
                'total_harga' => '65000',
                'status' => '2',
                'customer_nama' => NULL,
                'customer_no_telepon' => NULL,
                'customer_alamat' => NULL,
                'updated_by' => '5',
                'created_by' => NULL,
                'created_at' => '2023-09-09 13:47:45',
                'updated_at' => '2023-09-09 13:48:52',
            ),
            3 => 
            array (
                'id' => '11',
                'customer_id' => '21',
                'tanggal_pakai_dari' => '2023-09-10',
                'tanggal_pakai_sampai' => '2023-09-11',
                'total_harga' => '45000',
                'status' => '2',
                'customer_nama' => 'Customer baru dari pesanan',
                'customer_no_telepon' => '123',
                'customer_alamat' => 'alamat customer baru dari pesanan',
                'updated_by' => '5',
                'created_by' => '5',
                'created_at' => '2023-09-10 20:19:23',
                'updated_at' => '2023-09-10 20:19:47',
            ),
        ));
        
        
    }
}