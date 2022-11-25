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
                'id' => '1',
                'qty' => '1',
                'barang' => '1',
                'pengurangan' => '1',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-24 17:03:05',
                'updated_at' => '2022-09-24 17:03:37',
            ),
            1 => 
            array (
                'id' => '3',
                'qty' => '10',
                'barang' => '118',
                'pengurangan' => '2',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-11-12 16:37:47',
                'updated_at' => '2022-11-12 16:37:47',
            ),
            2 => 
            array (
                'id' => '4',
                'qty' => '50',
                'barang' => '100',
                'pengurangan' => '3',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
        ));
        
        
    }
}