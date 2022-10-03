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
                'id' => 2,
                'no_faktur' => '1664704215',
                'tanggal' => '2022-10-02',
                'jumlah' => 5000000,
                'sisa' => 6000000,
                'pembayaran_sebelumnya' => 0,
                'total' => 11000000,
                'pembayaran' => 6,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-02 16:50:15',
                'updated_at' => '2022-10-02 16:50:15',
            ),
            1 => 
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
        ));
        
        
    }
}