<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangHabisPakaiPenguranganListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_habis_pakai_pengurangan_list')->delete();
        
        \DB::table('barang_habis_pakai_pengurangan_list')->insert(array (
            0 => 
            array (
                'id' => 2,
                'qty' => 1,
                'barang' => 3,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-12-19 14:17:42',
                'updated_at' => '2022-12-19 14:17:42',
            ),
        ));
        
        
    }
}