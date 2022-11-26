<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPengadaanListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengadaan_list')->delete();
        
        
        
    }
}