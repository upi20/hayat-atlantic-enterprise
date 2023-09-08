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
                'id' => 8,
                'customer_id' => 1,
                'tanggal_pakai_dari' => '2023-09-09',
                'tanggal_pakai_sampai' => '2023-09-09',
                'total_harga' => 1810000,
                'status' => 2,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2023-09-08 10:43:36',
                'updated_at' => '2023-09-08 15:56:08',
            ),
            1 => 
            array (
                'id' => 9,
                'customer_id' => 11,
                'tanggal_pakai_dari' => '2023-09-09',
                'tanggal_pakai_sampai' => '2023-09-16',
                'total_harga' => 7500,
                'status' => 1,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2023-09-08 10:43:39',
                'updated_at' => '2023-09-08 16:14:39',
            ),
        ));
        
        
    }
}