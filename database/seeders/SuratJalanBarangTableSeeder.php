<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratJalanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('surat_jalan_barang')->delete();
        
        \DB::table('surat_jalan_barang')->insert(array (
            0 => 
            array (
                'id' => 6,
                'barang' => 1,
                'qty' => 15,
                'surat_jalan' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:02:25',
                'updated_at' => '2022-10-08 10:31:03',
            ),
            1 => 
            array (
                'id' => 7,
                'barang' => 3,
                'qty' => 500,
                'surat_jalan' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:02:25',
                'updated_at' => '2022-10-08 10:30:59',
            ),
            2 => 
            array (
                'id' => 8,
                'barang' => 4,
                'qty' => 10,
                'surat_jalan' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:02:25',
                'updated_at' => '2022-10-08 10:30:59',
            ),
            3 => 
            array (
                'id' => 9,
                'barang' => 6,
                'qty' => 100,
                'surat_jalan' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:02:25',
                'updated_at' => '2022-10-08 10:30:59',
            ),
            4 => 
            array (
                'id' => 10,
                'barang' => 5,
                'qty' => 500,
                'surat_jalan' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:02:25',
                'updated_at' => '2022-10-08 10:30:59',
            ),
            5 => 
            array (
                'id' => 11,
                'barang' => 2,
                'qty' => 10,
                'surat_jalan' => 3,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:57:27',
                'updated_at' => '2022-10-08 10:59:45',
            ),
        ));
        
        
    }
}