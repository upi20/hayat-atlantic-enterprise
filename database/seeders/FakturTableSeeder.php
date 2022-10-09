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
        ));
        
        
    }
}