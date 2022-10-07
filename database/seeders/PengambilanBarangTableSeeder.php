<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengambilanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pengambilan_barang')->delete();
        
        \DB::table('pengambilan_barang')->insert(array (
            0 => 
            array (
                'id' => 36,
                'pengambilan' => 2,
                'barang' => 1,
                'qty' => 10,
                'harga' => 0,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-07 16:30:28',
                'updated_at' => '2022-10-07 16:30:28',
            ),
            1 => 
            array (
                'id' => 37,
                'pengambilan' => 2,
                'barang' => 3,
                'qty' => 500,
                'harga' => 0,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-07 16:30:28',
                'updated_at' => '2022-10-07 16:30:28',
            ),
            2 => 
            array (
                'id' => 38,
                'pengambilan' => 2,
                'barang' => 4,
                'qty' => 10,
                'harga' => 0,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-07 16:30:28',
                'updated_at' => '2022-10-07 16:30:28',
            ),
            3 => 
            array (
                'id' => 39,
                'pengambilan' => 2,
                'barang' => 6,
                'qty' => 100,
                'harga' => 0,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-07 16:30:28',
                'updated_at' => '2022-10-07 16:30:28',
            ),
            4 => 
            array (
                'id' => 40,
                'pengambilan' => 2,
                'barang' => 5,
                'qty' => 500,
                'harga' => 0,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-07 16:30:28',
                'updated_at' => '2022-10-07 16:30:28',
            ),
        ));
        
        
    }
}