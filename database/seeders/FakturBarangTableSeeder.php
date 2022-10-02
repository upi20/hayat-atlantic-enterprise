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
                'id' => 1,
                'faktur' => 1,
                'barang' => 1,
                'qty' => 10,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 14:22:54',
                'updated_at' => '2022-10-02 14:22:54',
            ),
            1 => 
            array (
                'id' => 2,
                'faktur' => 1,
                'barang' => 3,
                'qty' => 500,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 14:22:54',
                'updated_at' => '2022-10-02 14:22:54',
            ),
            2 => 
            array (
                'id' => 3,
                'faktur' => 1,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 14:22:54',
                'updated_at' => '2022-10-02 14:22:54',
            ),
            3 => 
            array (
                'id' => 4,
                'faktur' => 1,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 14:22:54',
                'updated_at' => '2022-10-02 14:22:54',
            ),
        ));
        
        
    }
}