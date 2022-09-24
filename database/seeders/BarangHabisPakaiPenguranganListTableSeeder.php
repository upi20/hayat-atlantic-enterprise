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
                'id' => 1,
                'qty' => 1,
                'barang' => 1,
                'pengurangan' => 1,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-24 17:26:36',
                'updated_at' => '2022-09-24 17:26:36',
            ),
        ));
        
        
    }
}