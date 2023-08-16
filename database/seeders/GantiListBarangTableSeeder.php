<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiListBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ganti_list_barang')->delete();
        
        \DB::table('ganti_list_barang')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ganti_rugi_id' => 1,
                'barang' => 5,
                'qty_rusak' => 1,
                'qty_hilang' => 0,
                'qty_diganti' => 0,
                'harga' => 10000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-12-19 14:28:47',
                'updated_at' => '2022-12-19 14:28:47',
            ),
            1 => 
            array (
                'id' => 2,
                'ganti_rugi_id' => 1,
                'barang' => 6,
                'qty_rusak' => 0,
                'qty_hilang' => 1,
                'qty_diganti' => 0,
                'harga' => 5000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-12-19 14:28:47',
                'updated_at' => '2022-12-19 14:28:47',
            ),
        ));
        
        
    }
}