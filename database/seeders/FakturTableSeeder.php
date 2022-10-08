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
                'id' => 3,
                'no_faktur' => '1664704391',
                'tanggal' => '2022-10-02',
                'jumlah' => 1000000,
                'sisa' => 5000000,
                'pembayaran_sebelumnya' => 5000000,
                'total' => 11000000,
                'pembayaran' => 7,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-02 16:53:11',
                'updated_at' => '2022-10-02 16:53:11',
            ),
            1 => 
            array (
                'id' => 6,
                'no_faktur' => '1665201044',
                'tanggal' => '2022-10-08',
                'jumlah' => 50000,
                'sisa' => 50000,
                'pembayaran_sebelumnya' => 0,
                'total' => 100000,
                'pembayaran' => 13,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-08 10:50:44',
                'updated_at' => '2022-10-08 10:50:44',
            ),
            2 => 
            array (
                'id' => 8,
                'no_faktur' => '1665201422',
                'tanggal' => '2022-10-08',
                'jumlah' => 50000,
                'sisa' => 0,
                'pembayaran_sebelumnya' => 50000,
                'total' => 100000,
                'pembayaran' => 25,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-08 10:57:02',
                'updated_at' => '2022-10-08 10:57:02',
            ),
        ));
        
        
    }
}