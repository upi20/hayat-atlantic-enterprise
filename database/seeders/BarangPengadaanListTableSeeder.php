<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPengadaanListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengadaan_list')->delete();
        
        \DB::table('barang_pengadaan_list')->insert(array (
            0 => 
            array (
                'id' => '124',
                'harga' => '10000',
                'qty' => '0',
                'barang' => '5',
                'pengadaan' => '6',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-12-19 15:00:59',
                'updated_at' => '2022-12-19 15:00:59',
            ),
            1 => 
            array (
                'id' => '125',
                'harga' => '5000',
                'qty' => '0',
                'barang' => '6',
                'pengadaan' => '6',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-12-19 15:00:59',
                'updated_at' => '2022-12-19 15:00:59',
            ),
        ));
        
        
    }
}