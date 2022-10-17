<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPenguranganListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengurangan_list')->delete();
        
        \DB::table('barang_pengurangan_list')->insert(array (
            0 => 
            array (
                'id' => 1,
                'qty' => 1,
                'barang' => 1,
                'pengurangan' => 1,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-09-24 17:03:05',
                'updated_at' => '2022-09-24 17:03:37',
            ),
            1 => 
            array (
                'id' => 2,
                'qty' => 0,
                'barang' => 4,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:10:42',
                'updated_at' => '2022-10-10 00:10:42',
            ),
            2 => 
            array (
                'id' => 3,
                'qty' => 3,
                'barang' => 4,
                'pengurangan' => 3,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:11:24',
                'updated_at' => '2022-10-10 00:11:24',
            ),
            3 => 
            array (
                'id' => 4,
                'qty' => 10,
                'barang' => 3,
                'pengurangan' => 4,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-10 14:39:04',
                'updated_at' => '2022-10-10 14:39:04',
            ),
            4 => 
            array (
                'id' => 5,
                'qty' => 1,
                'barang' => 1,
                'pengurangan' => 5,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            5 => 
            array (
                'id' => 6,
                'qty' => 1,
                'barang' => 5,
                'pengurangan' => 5,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            6 => 
            array (
                'id' => 7,
                'qty' => 1,
                'barang' => 100,
                'pengurangan' => 5,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
        ));
        
        
    }
}