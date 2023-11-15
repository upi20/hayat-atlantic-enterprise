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
                'qty' => '2',
                'barang' => '5',
                'pengurangan' => '1',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:55:12',
                'updated_at' => '2023-09-12 09:55:12',
            ),
            1 => 
            array (
                'id' => '2',
                'qty' => '1',
                'barang' => '6',
                'pengurangan' => '3',
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2023-09-12 10:38:35',
                'updated_at' => '2023-09-12 10:38:35',
            ),
        ));
        
        
    }
}