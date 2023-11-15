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
                'tanggal' => '2023-09-12',
                'jumlah' => '600000',
                'sisa' => '450000',
                'pembayaran_sebelumnya' => '0',
                'total' => '1050000',
                'pembayaran' => '1',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2023-09-12 09:10:11',
                'updated_at' => '2023-09-12 09:10:11',
            ),
        ));
        
        
    }
}