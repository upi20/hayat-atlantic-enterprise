<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengambilanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pengambilan')->delete();
        
        \DB::table('pengambilan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'penyewaan' => 5,
                'tanggal' => NULL,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-02 16:25:47',
                'updated_at' => '2022-10-02 16:25:47',
            ),
        ));
        
        
    }
}