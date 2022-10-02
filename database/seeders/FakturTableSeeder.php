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
                'no_faktur' => '1664695374',
                'tanggal' => '2022-10-02',
                'jumlah' => 5000000,
                'sisa' => 6000000,
                'pembayaran_sebelumnya' => 0,
                'total' => 11000000,
                'pembayaran' => 5,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-02 14:22:54',
                'updated_at' => '2022-10-02 14:22:54',
            ),
        ));
        
        
    }
}