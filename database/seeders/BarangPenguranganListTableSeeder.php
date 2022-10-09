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
        ));
        
        
    }
}