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
            1 => 
            array (
                'id' => 2,
                'qty' => 10,
                'barang' => 2,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            2 => 
            array (
                'id' => 3,
                'qty' => 10,
                'barang' => 5,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            3 => 
            array (
                'id' => 4,
                'qty' => 11,
                'barang' => 3,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            4 => 
            array (
                'id' => 5,
                'qty' => 10,
                'barang' => 1,
                'pengurangan' => 4,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-22 11:27:04',
                'updated_at' => '2022-10-22 11:27:04',
            ),
        ));
        
        
    }
}