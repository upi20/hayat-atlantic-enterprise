<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakturBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faktur_barang')->delete();
        
        \DB::table('faktur_barang')->insert(array (
            0 => 
            array (
                'id' => '1',
                'faktur' => '1',
                'barang' => '4',
                'qty' => '20',
                'harga' => '5000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:10:11',
                'updated_at' => '2023-09-12 09:10:11',
            ),
            1 => 
            array (
                'id' => '2',
                'faktur' => '1',
                'barang' => '5',
                'qty' => '20',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:10:11',
                'updated_at' => '2023-09-12 09:10:11',
            ),
            2 => 
            array (
                'id' => '3',
                'faktur' => '1',
                'barang' => '6',
                'qty' => '1',
                'harga' => '750000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:10:11',
                'updated_at' => '2023-09-12 09:10:11',
            ),
        ));
        
        
    }
}