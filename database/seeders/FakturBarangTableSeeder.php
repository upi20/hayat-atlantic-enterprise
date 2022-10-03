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
                'id' => 5,
                'faktur' => 2,
                'barang' => 1,
                'qty' => 10,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:50:15',
                'updated_at' => '2022-10-02 16:50:15',
            ),
            1 => 
            array (
                'id' => 6,
                'faktur' => 2,
                'barang' => 3,
                'qty' => 500,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:50:15',
                'updated_at' => '2022-10-02 16:50:15',
            ),
            2 => 
            array (
                'id' => 7,
                'faktur' => 2,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:50:15',
                'updated_at' => '2022-10-02 16:50:15',
            ),
            3 => 
            array (
                'id' => 8,
                'faktur' => 2,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:50:15',
                'updated_at' => '2022-10-02 16:50:15',
            ),
            4 => 
            array (
                'id' => 9,
                'faktur' => 2,
                'barang' => 5,
                'qty' => 500,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:50:15',
                'updated_at' => '2022-10-02 16:50:15',
            ),
            5 => 
            array (
                'id' => 10,
                'faktur' => 3,
                'barang' => 1,
                'qty' => 10,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
            6 => 
            array (
                'id' => 11,
                'faktur' => 3,
                'barang' => 3,
                'qty' => 500,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
            7 => 
            array (
                'id' => 12,
                'faktur' => 3,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
            8 => 
            array (
                'id' => 13,
                'faktur' => 3,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
            9 => 
            array (
                'id' => 14,
                'faktur' => 3,
                'barang' => 5,
                'qty' => 500,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
        ));
        
        
    }
}