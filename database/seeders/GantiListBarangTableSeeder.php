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
                'id' => '1',
                'ganti_rugi_id' => '1',
                'barang' => '119',
                'qty_rusak' => '1',
                'qty_hilang' => '0',
                'qty_diganti' => '0',
                'harga' => '500000',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
            1 => 
            array (
                'id' => '2',
                'ganti_rugi_id' => '1',
                'barang' => '100',
                'qty_rusak' => '0',
                'qty_hilang' => '50',
                'qty_diganti' => '0',
                'harga' => '12500',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
        ));
        
        
    }
}