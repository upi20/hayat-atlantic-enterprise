<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratJalanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('surat_jalan_barang')->delete();
    }
}
