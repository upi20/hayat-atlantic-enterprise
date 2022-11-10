<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiRugiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ganti_rugi')->delete();
    }
}
