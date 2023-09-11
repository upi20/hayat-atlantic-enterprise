<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pesanan')->delete();
        
        
        
    }
}