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
                'barang' => 1,
                'qty_rusak' => 5,
                'qty_hilang' => 1,
                'qty_diganti' => 0,
                'harga' => 100000,
                'status' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            1 => 
            array (
                'id' => 2,
                'ganti_rugi_id' => 1,
                'barang' => 5,
                'qty_rusak' => 2,
                'qty_hilang' => 1,
                'qty_diganti' => 0,
                'harga' => 10000,
                'status' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            2 => 
            array (
                'id' => 3,
                'ganti_rugi_id' => 1,
                'barang' => 4,
                'qty_rusak' => 1,
                'qty_hilang' => 0,
                'qty_diganti' => 0,
                'harga' => 750000,
                'status' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            3 => 
            array (
                'id' => 4,
                'ganti_rugi_id' => 1,
                'barang' => 100,
                'qty_rusak' => 0,
                'qty_hilang' => 1,
                'qty_diganti' => 0,
                'harga' => 12500,
                'status' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            4 => 
            array (
                'id' => 5,
                'ganti_rugi_id' => 1,
                'barang' => 113,
                'qty_rusak' => 1,
                'qty_hilang' => 0,
                'qty_diganti' => 0,
                'harga' => 45000,
                'status' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
        ));
        
        
    }
}