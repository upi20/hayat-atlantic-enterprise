<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratJalanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('surat_jalan')->delete();
        
        \DB::table('surat_jalan')->insert(array (
            0 => 
            array (
                'id' => '1',
                'no_surat_jalan' => 'SJ/00002',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2023-09-24',
                'tanggal_kembali' => '2023-09-12',
                'status' => '4',
                'penyewaan' => '1',
                'konfirmasi_oleh' => '5',
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2023-09-12 09:33:59',
                'updated_at' => '2023-09-12 09:55:12',
            ),
        ));
        
        
    }
}