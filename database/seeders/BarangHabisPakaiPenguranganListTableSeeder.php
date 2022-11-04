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
                'qty' => 10,
                'barang' => 2,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            1 => 
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
            2 => 
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
            3 => 
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
            4 => 
            array (
                'id' => 6,
                'qty' => 2,
                'barang' => 4,
                'pengurangan' => 5,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:16:11',
            ),
            5 => 
            array (
                'id' => 7,
                'qty' => 10,
                'barang' => 6,
                'pengurangan' => 6,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            6 => 
            array (
                'id' => 8,
                'qty' => 20,
                'barang' => 4,
                'pengurangan' => 6,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            7 => 
            array (
                'id' => 9,
                'qty' => 10,
                'barang' => 8,
                'pengurangan' => 6,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            8 => 
            array (
                'id' => 10,
                'qty' => 1,
                'barang' => 1,
                'pengurangan' => 7,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-11-04 22:57:43',
                'updated_at' => '2022-11-04 22:57:43',
            ),
        ));
        
        
    }
}