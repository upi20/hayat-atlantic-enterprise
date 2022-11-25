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
                'id' => '1',
                'qty' => '1',
                'barang' => '1',
                'pengurangan' => '1',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-24 17:26:36',
                'updated_at' => '2022-09-24 17:26:36',
            ),
            1 => 
            array (
                'id' => '2',
                'qty' => '20',
                'barang' => '44',
                'pengurangan' => '2',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
            2 => 
            array (
                'id' => '3',
                'qty' => '2',
                'barang' => '4',
                'pengurangan' => '2',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
            3 => 
            array (
                'id' => '4',
                'qty' => '1',
                'barang' => '2',
                'pengurangan' => '2',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
        ));
        
        
    }
}