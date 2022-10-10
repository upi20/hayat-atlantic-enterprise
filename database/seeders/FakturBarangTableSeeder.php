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
                'id' => 20,
                'faktur' => 9,
                'barang' => 1,
                'qty' => 5,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            1 => 
            array (
                'id' => 21,
                'faktur' => 9,
                'barang' => 3,
                'qty' => 100,
                'harga' => 4000,
                'keterangan' => 'Warna Hitam',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            2 => 
            array (
                'id' => 22,
                'faktur' => 9,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            3 => 
            array (
                'id' => 23,
                'faktur' => 9,
                'barang' => 100,
                'qty' => 120,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            4 => 
            array (
                'id' => 24,
                'faktur' => 10,
                'barang' => 1,
                'qty' => 5,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            5 => 
            array (
                'id' => 25,
                'faktur' => 10,
                'barang' => 3,
                'qty' => 100,
                'harga' => 4000,
                'keterangan' => 'Warna Hitam',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            6 => 
            array (
                'id' => 26,
                'faktur' => 10,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            7 => 
            array (
                'id' => 27,
                'faktur' => 10,
                'barang' => 100,
                'qty' => 120,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            8 => 
            array (
                'id' => 28,
                'faktur' => 11,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:35:45',
                'updated_at' => '2022-10-09 21:35:45',
            ),
            9 => 
            array (
                'id' => 29,
                'faktur' => 11,
                'barang' => 1,
                'qty' => 1,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:35:45',
                'updated_at' => '2022-10-09 21:35:45',
            ),
            10 => 
            array (
                'id' => 30,
                'faktur' => 11,
                'barang' => 100,
                'qty' => 100,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:35:45',
                'updated_at' => '2022-10-09 21:35:45',
            ),
            11 => 
            array (
                'id' => 31,
                'faktur' => 12,
                'barang' => 4,
                'qty' => 5,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:33:26',
                'updated_at' => '2022-10-10 00:33:26',
            ),
            12 => 
            array (
                'id' => 32,
                'faktur' => 13,
                'barang' => 1,
                'qty' => 5,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            13 => 
            array (
                'id' => 33,
                'faktur' => 13,
                'barang' => 3,
                'qty' => 100,
                'harga' => 4000,
                'keterangan' => 'Warna Hitam',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            14 => 
            array (
                'id' => 34,
                'faktur' => 13,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            15 => 
            array (
                'id' => 35,
                'faktur' => 13,
                'barang' => 100,
                'qty' => 120,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            16 => 
            array (
                'id' => 36,
                'faktur' => 14,
                'barang' => 4,
                'qty' => 5,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:48:35',
                'updated_at' => '2022-10-10 11:48:35',
            ),
            17 => 
            array (
                'id' => 37,
                'faktur' => 15,
                'barang' => 4,
                'qty' => 20,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:56:17',
                'updated_at' => '2022-10-10 11:56:17',
            ),
            18 => 
            array (
                'id' => 38,
                'faktur' => 15,
                'barang' => 3,
                'qty' => 500,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:56:17',
                'updated_at' => '2022-10-10 11:56:17',
            ),
            19 => 
            array (
                'id' => 39,
                'faktur' => 15,
                'barang' => 8,
                'qty' => 10,
                'harga' => 7500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:56:17',
                'updated_at' => '2022-10-10 11:56:17',
            ),
        ));
        
        
    }
}