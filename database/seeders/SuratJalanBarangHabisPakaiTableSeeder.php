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
                'id' => '1',
                'surat_jalan' => '3',
                'barang_id' => '44',
                'harga' => '5000',
                'qty' => '20',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2022-11-12 17:20:52',
                'updated_at' => '2022-11-12 17:20:52',
            ),
            1 => 
            array (
                'id' => '2',
                'surat_jalan' => '3',
                'barang_id' => '4',
                'harga' => '7500',
                'qty' => '2',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2022-11-12 17:21:01',
                'updated_at' => '2022-11-12 17:21:01',
            ),
            2 => 
            array (
                'id' => '3',
                'surat_jalan' => '3',
                'barang_id' => '2',
                'harga' => '10000',
                'qty' => '1',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2022-11-12 17:22:10',
                'updated_at' => '2022-11-12 17:22:10',
            ),
        ));
        
        
    }
}