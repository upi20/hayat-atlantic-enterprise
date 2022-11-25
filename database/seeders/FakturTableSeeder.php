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
                'id' => '2',
                'no_faktur' => 'INV/00003',
                'tanggal' => '2022-11-12',
                'jumlah' => '1010000',
                'sisa' => '0',
                'pembayaran_sebelumnya' => '0',
                'total' => '1010000',
                'pembayaran' => '2',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-12 16:49:02',
                'updated_at' => '2022-11-12 16:49:02',
            ),
            1 => 
            array (
                'id' => '3',
                'no_faktur' => 'INV/00004',
                'tanggal' => '2022-11-12',
                'jumlah' => '1000000',
                'sisa' => '1250000',
                'pembayaran_sebelumnya' => '0',
                'total' => '2250000',
                'pembayaran' => '3',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-12 17:10:29',
                'updated_at' => '2022-11-12 17:10:29',
            ),
            2 => 
            array (
                'id' => '4',
                'no_faktur' => 'INV/00005',
                'tanggal' => '2022-11-12',
                'jumlah' => '250000',
                'sisa' => '1000000',
                'pembayaran_sebelumnya' => '1000000',
                'total' => '2250000',
                'pembayaran' => '4',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-12 17:12:48',
                'updated_at' => '2022-11-12 17:12:48',
            ),
            3 => 
            array (
                'id' => '5',
                'no_faktur' => 'INV/00006',
                'tanggal' => '2022-11-19',
                'jumlah' => '600000',
                'sisa' => '600000',
                'pembayaran_sebelumnya' => '0',
                'total' => '1200000',
                'pembayaran' => '5',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-19 09:53:18',
                'updated_at' => '2022-11-19 09:53:18',
            ),
            4 => 
            array (
                'id' => '6',
                'no_faktur' => 'INV/00007',
                'tanggal' => '2022-11-19',
                'jumlah' => '1000000',
                'sisa' => '0',
                'pembayaran_sebelumnya' => '1250000',
                'total' => '2250000',
                'pembayaran' => '6',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-19 09:56:07',
                'updated_at' => '2022-11-19 09:56:07',
            ),
        ));
        
        
    }
}