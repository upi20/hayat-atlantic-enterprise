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
                'id' => '1',
                'no_faktur' => 'INV/00002',
                'tanggal' => '2022-11-29',
                'jumlah' => '300000',
                'sisa' => '260000',
                'pembayaran_sebelumnya' => '0',
                'total' => '560000',
                'pembayaran' => '1',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-29 20:23:58',
                'updated_at' => '2022-11-29 20:23:58',
            ),
            1 => 
            array (
                'id' => '2',
                'no_faktur' => 'INV/00003',
                'tanggal' => '2022-11-29',
                'jumlah' => '300000',
                'sisa' => '0',
                'pembayaran_sebelumnya' => '0',
                'total' => '300000',
                'pembayaran' => '2',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-29 20:36:31',
                'updated_at' => '2022-11-29 20:36:31',
            ),
            2 => 
            array (
                'id' => '3',
                'no_faktur' => 'INV/00004',
                'tanggal' => '2022-11-29',
                'jumlah' => '260000',
                'sisa' => '0',
                'pembayaran_sebelumnya' => '300000',
                'total' => '560000',
                'pembayaran' => '3',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-11-29 21:08:43',
                'updated_at' => '2022-11-29 21:08:43',
            ),
            3 => 
            array (
                'id' => '4',
                'no_faktur' => 'INV/00005',
                'tanggal' => '2023-07-16',
                'jumlah' => '500000',
                'sisa' => '260000',
                'pembayaran_sebelumnya' => '0',
                'total' => '760000',
                'pembayaran' => '4',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-07-16 12:15:52',
                'updated_at' => '2023-07-16 12:15:52',
            ),
            4 => 
            array (
                'id' => '5',
                'no_faktur' => 'INV/00006',
                'tanggal' => '2023-07-16',
                'jumlah' => '260000',
                'sisa' => '0',
                'pembayaran_sebelumnya' => '500000',
                'total' => '760000',
                'pembayaran' => '5',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-07-16 12:20:23',
                'updated_at' => '2023-07-16 12:20:23',
            ),
        ));
        
        
    }
}