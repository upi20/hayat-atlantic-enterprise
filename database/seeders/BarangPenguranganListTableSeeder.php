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
                'id' => 2,
                'qty' => 0,
                'barang' => 4,
                'pengurangan' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:10:42',
                'updated_at' => '2022-10-10 00:10:42',
            ),
            1 => 
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
            2 => 
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
            3 => 
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
            4 => 
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
            5 => 
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
            6 => 
            array (
                'id' => 8,
                'qty' => 3,
                'barang' => 2,
                'pengurangan' => 6,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 02:09:52',
            ),
            7 => 
            array (
                'id' => 9,
                'qty' => 3,
                'barang' => 4,
                'pengurangan' => 6,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 02:09:52',
            ),
            8 => 
            array (
                'id' => 10,
                'qty' => 1,
                'barang' => 8,
                'pengurangan' => 6,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 02:09:52',
            ),
            9 => 
            array (
                'id' => 11,
                'qty' => 1,
                'barang' => 1,
                'pengurangan' => 7,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:16:11',
            ),
            10 => 
            array (
                'id' => 12,
                'qty' => 1,
                'barang' => 2,
                'pengurangan' => 7,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:16:11',
            ),
            11 => 
            array (
                'id' => 13,
                'qty' => 10,
                'barang' => 5,
                'pengurangan' => 8,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            12 => 
            array (
                'id' => 14,
                'qty' => 5,
                'barang' => 4,
                'pengurangan' => 8,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            13 => 
            array (
                'id' => 15,
                'qty' => 1,
                'barang' => 1,
                'pengurangan' => 9,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-11-04 22:57:43',
                'updated_at' => '2022-11-04 22:57:43',
            ),
        ));
        
        
    }
}