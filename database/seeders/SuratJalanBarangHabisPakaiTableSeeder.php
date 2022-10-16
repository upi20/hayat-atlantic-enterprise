<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratJalanBarangHabisPakaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('surat_jalan_barang_habis_pakai')->delete();
        
        \DB::table('surat_jalan_barang_habis_pakai')->insert(array (
            0 => 
            array (
                'id' => 2,
                'surat_jalan' => 10,
                'barang_id' => 2,
                'harga' => 10000,
                'qty' => 10,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-16 19:29:08',
                'updated_at' => '2022-10-16 19:29:08',
            ),
            1 => 
            array (
                'id' => 3,
                'surat_jalan' => 10,
                'barang_id' => 5,
                'harga' => 15500,
                'qty' => 10,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-16 20:20:28',
                'updated_at' => '2022-10-16 20:20:28',
            ),
            2 => 
            array (
                'id' => 5,
                'surat_jalan' => 10,
                'barang_id' => 3,
                'harga' => 16000,
                'qty' => 11,
                'keterangan' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-16 21:12:53',
                'updated_at' => '2022-10-16 21:13:36',
            ),
        ));
        
        
    }
}