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
                'id' => 1,
                'surat_jalan' => 1,
                'barang_id' => 3,
                'harga' => 16000,
                'qty' => 1,
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => 6,
                'created_at' => '2022-12-19 14:14:59',
                'updated_at' => '2022-12-19 14:14:59',
            ),
        ));
        
        
    }
}