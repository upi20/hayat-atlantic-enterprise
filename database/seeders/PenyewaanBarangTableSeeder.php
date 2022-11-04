<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan_barang')->delete();
        
        \DB::table('penyewaan_barang')->insert(array (
            0 => 
            array (
                'id' => 13,
                'penyewaan' => 8,
                'barang' => 1,
                'qty' => 5,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:11:01',
                'updated_at' => '2022-10-09 14:11:01',
            ),
            1 => 
            array (
                'id' => 14,
                'penyewaan' => 8,
                'barang' => 3,
                'qty' => 100,
                'harga' => 4000,
                'keterangan' => 'Warna Hitam',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:11:17',
                'updated_at' => '2022-10-09 14:11:17',
            ),
            2 => 
            array (
                'id' => 15,
                'penyewaan' => 8,
                'barang' => 6,
                'qty' => 100,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:11:38',
                'updated_at' => '2022-10-09 14:11:38',
            ),
            3 => 
            array (
                'id' => 16,
                'penyewaan' => 8,
                'barang' => 100,
                'qty' => 120,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:11:54',
                'updated_at' => '2022-10-09 14:11:54',
            ),
            4 => 
            array (
                'id' => 17,
                'penyewaan' => 9,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:33:01',
                'updated_at' => '2022-10-09 21:33:01',
            ),
            5 => 
            array (
                'id' => 18,
                'penyewaan' => 9,
                'barang' => 1,
                'qty' => 1,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:33:13',
                'updated_at' => '2022-10-09 21:33:13',
            ),
            6 => 
            array (
                'id' => 19,
                'penyewaan' => 9,
                'barang' => 100,
                'qty' => 100,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:33:31',
                'updated_at' => '2022-10-09 21:33:31',
            ),
            7 => 
            array (
                'id' => 20,
                'penyewaan' => 10,
                'barang' => 4,
                'qty' => 5,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:08:25',
                'updated_at' => '2022-10-10 00:08:25',
            ),
            8 => 
            array (
                'id' => 21,
                'penyewaan' => 11,
                'barang' => 4,
                'qty' => 20,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:29:47',
                'updated_at' => '2022-10-10 11:29:47',
            ),
            9 => 
            array (
                'id' => 22,
                'penyewaan' => 11,
                'barang' => 3,
                'qty' => 500,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:30:04',
                'updated_at' => '2022-10-10 11:30:04',
            ),
            10 => 
            array (
                'id' => 23,
                'penyewaan' => 11,
                'barang' => 8,
                'qty' => 10,
                'harga' => 7500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:30:13',
                'updated_at' => '2022-10-10 11:30:13',
            ),
            11 => 
            array (
                'id' => 24,
                'penyewaan' => 13,
                'barang' => 3,
                'qty' => 100,
                'harga' => 400,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:22:18',
                'updated_at' => '2022-10-10 14:22:18',
            ),
            12 => 
            array (
                'id' => 25,
                'penyewaan' => 13,
                'barang' => 101,
                'qty' => 50,
                'harga' => 15000,
                'keterangan' => 'Warna Biru',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:22:42',
                'updated_at' => '2022-10-10 14:22:42',
            ),
            13 => 
            array (
                'id' => 26,
                'penyewaan' => 13,
                'barang' => 22,
                'qty' => 50,
                'harga' => 15000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:23:02',
                'updated_at' => '2022-10-10 14:23:02',
            ),
            14 => 
            array (
                'id' => 27,
                'penyewaan' => 13,
                'barang' => 29,
                'qty' => 50,
                'harga' => 7500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:23:16',
                'updated_at' => '2022-10-10 14:23:16',
            ),
            15 => 
            array (
                'id' => 28,
                'penyewaan' => 12,
                'barang' => 2,
                'qty' => 5,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-11 17:00:22',
                'updated_at' => '2022-10-11 17:00:22',
            ),
            16 => 
            array (
                'id' => 30,
                'penyewaan' => 12,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-11 17:01:39',
                'updated_at' => '2022-10-11 17:01:39',
            ),
            17 => 
            array (
                'id' => 31,
                'penyewaan' => 14,
                'barang' => 1,
                'qty' => 10,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 18:19:49',
                'updated_at' => '2022-10-15 18:19:49',
            ),
            18 => 
            array (
                'id' => 32,
                'penyewaan' => 14,
                'barang' => 5,
                'qty' => 10,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 18:19:58',
                'updated_at' => '2022-10-15 18:19:58',
            ),
            19 => 
            array (
                'id' => 33,
                'penyewaan' => 14,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 18:20:16',
                'updated_at' => '2022-10-15 18:20:16',
            ),
            20 => 
            array (
                'id' => 34,
                'penyewaan' => 14,
                'barang' => 100,
                'qty' => 10,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 18:20:30',
                'updated_at' => '2022-10-15 18:20:30',
            ),
            21 => 
            array (
                'id' => 35,
                'penyewaan' => 14,
                'barang' => 113,
                'qty' => 10,
                'harga' => 45000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 18:20:59',
                'updated_at' => '2022-10-15 18:20:59',
            ),
            22 => 
            array (
                'id' => 36,
                'penyewaan' => 14,
                'barang' => 13,
                'qty' => 10,
                'harga' => 2500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-15 18:21:09',
                'updated_at' => '2022-10-15 18:21:09',
            ),
            23 => 
            array (
                'id' => 37,
                'penyewaan' => 15,
                'barang' => 2,
                'qty' => 100,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:24:08',
                'updated_at' => '2022-10-18 22:24:08',
            ),
            24 => 
            array (
                'id' => 38,
                'penyewaan' => 15,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:24:27',
                'updated_at' => '2022-10-18 22:24:27',
            ),
            25 => 
            array (
                'id' => 39,
                'penyewaan' => 15,
                'barang' => 7,
                'qty' => 12,
                'harga' => 5000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:24:33',
                'updated_at' => '2022-10-18 22:24:33',
            ),
            26 => 
            array (
                'id' => 40,
                'penyewaan' => 15,
                'barang' => 8,
                'qty' => 31,
                'harga' => 7500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:24:39',
                'updated_at' => '2022-10-18 22:24:39',
            ),
            27 => 
            array (
                'id' => 41,
                'penyewaan' => 16,
                'barang' => 5,
                'qty' => 100,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-25 22:34:18',
                'updated_at' => '2022-10-25 22:34:18',
            ),
            28 => 
            array (
                'id' => 42,
                'penyewaan' => 16,
                'barang' => 3,
                'qty' => 100,
                'harga' => 4000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-25 22:34:38',
                'updated_at' => '2022-10-25 22:34:38',
            ),
            29 => 
            array (
                'id' => 43,
                'penyewaan' => 16,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-25 22:34:58',
                'updated_at' => '2022-10-25 22:34:58',
            ),
            30 => 
            array (
                'id' => 44,
                'penyewaan' => 16,
                'barang' => 100,
                'qty' => 10,
                'harga' => 12500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-25 22:35:14',
                'updated_at' => '2022-10-25 22:35:14',
            ),
            31 => 
            array (
                'id' => 46,
                'penyewaan' => 18,
                'barang' => 1,
                'qty' => 10,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:01:13',
                'updated_at' => '2022-10-26 00:01:13',
            ),
            32 => 
            array (
                'id' => 47,
                'penyewaan' => 18,
                'barang' => 2,
                'qty' => 10,
                'harga' => 10000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:02:58',
                'updated_at' => '2022-10-26 00:02:58',
            ),
            33 => 
            array (
                'id' => 48,
                'penyewaan' => 18,
                'barang' => 4,
                'qty' => 10,
                'harga' => 750000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:03:11',
                'updated_at' => '2022-10-26 00:03:11',
            ),
            34 => 
            array (
                'id' => 49,
                'penyewaan' => 18,
                'barang' => 8,
                'qty' => 10,
                'harga' => 7500,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:03:30',
                'updated_at' => '2022-10-26 00:03:30',
            ),
            35 => 
            array (
                'id' => 50,
                'penyewaan' => 19,
                'barang' => 1,
                'qty' => 1,
                'harga' => 100000,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-11-04 22:54:52',
                'updated_at' => '2022-11-04 22:54:52',
            ),
        ));
        
        
    }
}