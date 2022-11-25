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
                'id' => '3',
                'faktur' => '2',
                'barang' => '1',
                'qty' => '10',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:49:02',
                'updated_at' => '2022-11-12 16:49:02',
            ),
            1 => 
            array (
                'id' => '4',
                'faktur' => '2',
                'barang' => '2',
                'qty' => '1',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:49:02',
                'updated_at' => '2022-11-12 16:49:02',
            ),
            2 => 
            array (
                'id' => '5',
                'faktur' => '3',
                'barang' => '119',
                'qty' => '2',
                'harga' => '500000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:10:29',
                'updated_at' => '2022-11-12 17:10:29',
            ),
            3 => 
            array (
                'id' => '6',
                'faktur' => '3',
                'barang' => '100',
                'qty' => '100',
                'harga' => '12500',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:10:29',
                'updated_at' => '2022-11-12 17:10:29',
            ),
            4 => 
            array (
                'id' => '7',
                'faktur' => '4',
                'barang' => '119',
                'qty' => '2',
                'harga' => '500000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:12:48',
                'updated_at' => '2022-11-12 17:12:48',
            ),
            5 => 
            array (
                'id' => '8',
                'faktur' => '4',
                'barang' => '100',
                'qty' => '100',
                'harga' => '12500',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:12:48',
                'updated_at' => '2022-11-12 17:12:48',
            ),
            6 => 
            array (
                'id' => '9',
                'faktur' => '5',
                'barang' => '1',
                'qty' => '10',
                'harga' => '100000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:53:18',
                'updated_at' => '2022-11-19 09:53:18',
            ),
            7 => 
            array (
                'id' => '10',
                'faktur' => '5',
                'barang' => '2',
                'qty' => '10',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:53:18',
                'updated_at' => '2022-11-19 09:53:18',
            ),
            8 => 
            array (
                'id' => '11',
                'faktur' => '5',
                'barang' => '2',
                'qty' => '10',
                'harga' => '10000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:53:18',
                'updated_at' => '2022-11-19 09:53:18',
            ),
            9 => 
            array (
                'id' => '12',
                'faktur' => '6',
                'barang' => '119',
                'qty' => '2',
                'harga' => '500000',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:56:07',
                'updated_at' => '2022-11-19 09:56:07',
            ),
            10 => 
            array (
                'id' => '13',
                'faktur' => '6',
                'barang' => '100',
                'qty' => '100',
                'harga' => '12500',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:56:07',
                'updated_at' => '2022-11-19 09:56:07',
            ),
        ));
        
        
    }
}