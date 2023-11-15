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
                'id' => '2',
                'customer_id' => '18',
                'tanggal_pakai_dari' => '2023-09-25',
                'tanggal_pakai_sampai' => '2023-09-26',
                'total_harga' => '1050000',
                'status' => '2',
                'customer_nama' => NULL,
                'customer_no_telepon' => NULL,
                'customer_alamat' => NULL,
                'updated_by' => '5',
                'created_by' => '5',
                'created_at' => '2023-09-12 08:48:33',
                'updated_at' => '2023-09-12 08:49:57',
            ),
            1 => 
            array (
                'id' => '3',
                'customer_id' => '20',
                'tanggal_pakai_dari' => '2023-09-23',
                'tanggal_pakai_sampai' => '2023-09-24',
                'total_harga' => '45000',
                'status' => '1',
                'customer_nama' => NULL,
                'customer_no_telepon' => NULL,
                'customer_alamat' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-23 16:59:56',
                'updated_at' => '2023-09-23 16:59:56',
            ),
            2 => 
            array (
                'id' => '4',
                'customer_id' => '20',
                'tanggal_pakai_dari' => '2023-10-01',
                'tanggal_pakai_sampai' => '2023-10-02',
                'total_harga' => '30000',
                'status' => '1',
                'customer_nama' => NULL,
                'customer_no_telepon' => NULL,
                'customer_alamat' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-10-02 11:06:36',
                'updated_at' => '2023-10-02 11:06:36',
            ),
        ));
        
        
    }
}