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
                'no_faktur' => '1665299851',
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
                'no_faktur' => '1665299939',
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
                'no_faktur' => '1665326145',
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
                'no_faktur' => '1665336806',
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
                'no_faktur' => '1665339289',
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
                'no_faktur' => '1665377315',
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
                'no_faktur' => '1665377777',
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
                'no_faktur' => '1665382541',
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
                'no_faktur' => '1665386679',
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
                'no_faktur' => '1665842935',
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
                'no_faktur' => '1666106711',
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
        ));
        
        
    }
}