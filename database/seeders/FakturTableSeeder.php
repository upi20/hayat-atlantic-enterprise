<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakturTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faktur')->delete();
        
        \DB::table('faktur')->insert(array (
            0 => 
            array (
                'id' => 1,
                'no_faktur' => 'INV/00002',
                'tanggal' => '2022-11-29',
                'jumlah' => 300000,
                'sisa' => 260000,
                'pembayaran_sebelumnya' => 0,
                'total' => 560000,
                'pembayaran' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-29 20:23:58',
                'updated_at' => '2022-11-29 20:23:58',
            ),
            1 => 
            array (
                'id' => 2,
                'no_faktur' => 'INV/00003',
                'tanggal' => '2022-11-29',
                'jumlah' => 300000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 0,
                'total' => 300000,
                'pembayaran' => 2,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-29 20:36:31',
                'updated_at' => '2022-11-29 20:36:31',
            ),
            2 => 
            array (
                'id' => 3,
                'no_faktur' => 'INV/00004',
                'tanggal' => '2022-11-29',
                'jumlah' => 260000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 300000,
                'total' => 560000,
                'pembayaran' => 3,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-29 21:08:43',
                'updated_at' => '2022-11-29 21:08:43',
            ),
            3 => 
            array (
                'id' => 4,
                'no_faktur' => 'INV/00005',
                'tanggal' => '2023-07-16',
                'jumlah' => 500000,
                'sisa' => 260000,
                'pembayaran_sebelumnya' => 0,
                'total' => 760000,
                'pembayaran' => 4,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-07-16 12:15:52',
                'updated_at' => '2023-07-16 12:15:52',
            ),
            4 => 
            array (
                'id' => 5,
                'no_faktur' => 'INV/00006',
                'tanggal' => '2023-07-16',
                'jumlah' => 260000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 500000,
                'total' => 760000,
                'pembayaran' => 5,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-07-16 12:20:23',
                'updated_at' => '2023-07-16 12:20:23',
            ),
            5 => 
            array (
                'id' => 6,
                'no_faktur' => 'INV/00007',
                'tanggal' => '2023-08-17',
                'jumlah' => 10000,
                'sisa' => 25000,
                'pembayaran_sebelumnya' => 0,
                'total' => 35000,
                'pembayaran' => 6,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-08-17 00:47:45',
                'updated_at' => '2023-08-17 00:47:45',
            ),
            6 => 
            array (
                'id' => 7,
                'no_faktur' => 'INV/00008',
                'tanggal' => '2023-09-08',
                'jumlah' => 200000,
                'sisa' => 105000,
                'pembayaran_sebelumnya' => 0,
                'total' => 305000,
                'pembayaran' => 7,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-09-08 22:51:23',
                'updated_at' => '2023-09-08 22:51:23',
            ),
            7 => 
            array (
                'id' => 8,
                'no_faktur' => 'INV/00009',
                'tanggal' => '2023-09-08',
                'jumlah' => 1000,
                'sisa' => 24000,
                'pembayaran_sebelumnya' => 0,
                'total' => 25000,
                'pembayaran' => 8,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-09-08 22:59:38',
                'updated_at' => '2023-09-08 22:59:38',
            ),
            8 => 
            array (
                'id' => 9,
                'no_faktur' => 'INV/00010',
                'tanggal' => '2023-09-08',
                'jumlah' => 105000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 200000,
                'total' => 305000,
                'pembayaran' => 9,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-09-08 23:11:00',
                'updated_at' => '2023-09-08 23:11:00',
            ),
        ));
        
        
    }
}