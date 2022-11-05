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
                'id' => 9,
                'no_faktur' => 'INV/00009',
                'tanggal' => '2022-10-09',
                'jumlah' => 1000000,
                'sisa' => 1900000,
                'pembayaran_sebelumnya' => 0,
                'total' => 2900000,
                'pembayaran' => 26,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-09 14:17:31',
                'updated_at' => '2022-10-09 14:17:31',
            ),
            1 => 
            array (
                'id' => 10,
                'no_faktur' => 'INV/00010',
                'tanggal' => '2022-10-09',
                'jumlah' => 500000,
                'sisa' => 1400000,
                'pembayaran_sebelumnya' => 1000000,
                'total' => 2900000,
                'pembayaran' => 27,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-09 14:18:59',
                'updated_at' => '2022-10-09 14:18:59',
            ),
            2 => 
            array (
                'id' => 11,
                'no_faktur' => 'INV/00011',
                'tanggal' => '2022-10-09',
                'jumlah' => 4000000,
                'sisa' => 4850000,
                'pembayaran_sebelumnya' => 0,
                'total' => 8850000,
                'pembayaran' => 28,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-09 21:35:45',
                'updated_at' => '2022-10-09 21:35:45',
            ),
            3 => 
            array (
                'id' => 12,
                'no_faktur' => 'INV/00012',
                'tanggal' => '2022-10-10',
                'jumlah' => 1000000,
                'sisa' => 2750000,
                'pembayaran_sebelumnya' => 0,
                'total' => 3750000,
                'pembayaran' => 29,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-10 00:33:26',
                'updated_at' => '2022-10-10 00:33:26',
            ),
            4 => 
            array (
                'id' => 13,
                'no_faktur' => 'INV/00013',
                'tanggal' => '2022-10-10',
                'jumlah' => 1400000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 1500000,
                'total' => 2900000,
                'pembayaran' => 30,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-10 01:14:49',
                'updated_at' => '2022-10-10 01:14:49',
            ),
            5 => 
            array (
                'id' => 14,
                'no_faktur' => 'INV/00014',
                'tanggal' => '2022-10-10',
                'jumlah' => 2750000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 1000000,
                'total' => 3750000,
                'pembayaran' => 31,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-10 11:48:35',
                'updated_at' => '2022-10-10 11:48:35',
            ),
            6 => 
            array (
                'id' => 15,
                'no_faktur' => 'INV/00015',
                'tanggal' => '2022-10-10',
                'jumlah' => 10000000,
                'sisa' => 7075000,
                'pembayaran_sebelumnya' => 0,
                'total' => 17075000,
                'pembayaran' => 32,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-10 11:56:17',
                'updated_at' => '2022-10-10 11:56:17',
            ),
            7 => 
            array (
                'id' => 16,
                'no_faktur' => 'INV/00016',
                'tanggal' => '2022-10-10',
                'jumlah' => 7075000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 10000000,
                'total' => 17075000,
                'pembayaran' => 33,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-10 13:15:41',
                'updated_at' => '2022-10-10 13:15:41',
            ),
            8 => 
            array (
                'id' => 17,
                'no_faktur' => 'INV/00017',
                'tanggal' => '2022-10-10',
                'jumlah' => 1000000,
                'sisa' => 915000,
                'pembayaran_sebelumnya' => 0,
                'total' => 1915000,
                'pembayaran' => 34,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-10 14:24:39',
                'updated_at' => '2022-10-10 14:24:39',
            ),
            9 => 
            array (
                'id' => 18,
                'no_faktur' => 'INV/00018',
                'tanggal' => '2022-10-15',
                'jumlah' => 4000000,
                'sisa' => 5200000,
                'pembayaran_sebelumnya' => 0,
                'total' => 9200000,
                'pembayaran' => 35,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-15 21:08:55',
                'updated_at' => '2022-10-15 21:08:55',
            ),
            10 => 
            array (
                'id' => 19,
                'no_faktur' => 'INV/00019',
                'tanggal' => '2022-10-18',
                'jumlah' => 1000000,
                'sisa' => 7792500,
                'pembayaran_sebelumnya' => 0,
                'total' => 8792500,
                'pembayaran' => 36,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-18 22:25:11',
                'updated_at' => '2022-10-18 22:25:11',
            ),
            11 => 
            array (
                'id' => 20,
                'no_faktur' => 'INV/00020',
                'tanggal' => '2022-10-22',
                'jumlah' => 7792500,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 1000000,
                'total' => 8792500,
                'pembayaran' => 37,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-22 04:56:01',
                'updated_at' => '2022-10-22 04:56:01',
            ),
            12 => 
            array (
                'id' => 21,
                'no_faktur' => 'INV/00021',
                'tanggal' => '2022-10-22',
                'jumlah' => 5200000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 4000000,
                'total' => 9200000,
                'pembayaran' => 38,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-22 06:16:45',
                'updated_at' => '2022-10-22 06:16:45',
            ),
            13 => 
            array (
                'id' => 22,
                'no_faktur' => 'INV/00022',
                'tanggal' => '2022-10-22',
                'jumlah' => 4850000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 4000000,
                'total' => 8850000,
                'pembayaran' => 39,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-22 06:17:05',
                'updated_at' => '2022-10-22 06:17:05',
            ),
            14 => 
            array (
                'id' => 23,
                'no_faktur' => 'INV/00023',
                'tanggal' => '2022-10-22',
                'jumlah' => 1000000,
                'sisa' => 6550000,
                'pembayaran_sebelumnya' => 0,
                'total' => 7550000,
                'pembayaran' => 40,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-22 10:22:17',
                'updated_at' => '2022-10-22 10:22:17',
            ),
            15 => 
            array (
                'id' => 24,
                'no_faktur' => 'INV/00024',
                'tanggal' => '2022-10-25',
                'jumlah' => 5000000,
                'sisa' => 4025000,
                'pembayaran_sebelumnya' => 0,
                'total' => 9025000,
                'pembayaran' => 41,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-25 23:17:08',
                'updated_at' => '2022-10-25 23:17:08',
            ),
            16 => 
            array (
                'id' => 25,
                'no_faktur' => 'INV/00025',
                'tanggal' => '2022-10-26',
                'jumlah' => 5000000,
                'sisa' => 3675000,
                'pembayaran_sebelumnya' => 0,
                'total' => 8675000,
                'pembayaran' => 42,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-26 00:04:43',
                'updated_at' => '2022-10-26 00:04:43',
            ),
            17 => 
            array (
                'id' => 26,
                'no_faktur' => 'INV/00026',
                'tanggal' => '2022-11-04',
                'jumlah' => 50000,
                'sisa' => 50000,
                'pembayaran_sebelumnya' => 0,
                'total' => 100000,
                'pembayaran' => 43,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-04 22:56:56',
                'updated_at' => '2022-11-04 22:56:56',
            ),
            18 => 
            array (
                'id' => 27,
                'no_faktur' => 'INV/00027',
                'tanggal' => '2022-11-04',
                'jumlah' => 50000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 50000,
                'total' => 100000,
                'pembayaran' => 44,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-04 22:59:28',
                'updated_at' => '2022-11-04 22:59:28',
            ),
            19 => 
            array (
                'id' => 30,
                'no_faktur' => 'INV/00028',
                'tanggal' => '2022-11-05',
                'jumlah' => 1000000,
                'sisa' => 5550000,
                'pembayaran_sebelumnya' => 1000000,
                'total' => 7550000,
                'pembayaran' => 48,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-05 01:18:05',
                'updated_at' => '2022-11-05 01:18:05',
            ),
            20 => 
            array (
                'id' => 31,
                'no_faktur' => 'INV/00029',
                'tanggal' => '2022-11-05',
                'jumlah' => 300000,
                'sisa' => 300000,
                'pembayaran_sebelumnya' => 0,
                'total' => 600000,
                'pembayaran' => 49,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-05 17:21:11',
                'updated_at' => '2022-11-05 17:21:11',
            ),
        ));
        
        
    }
}