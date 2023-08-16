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
                'id' => 1,
                'no_surat_jalan' => 'SJ/00002',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-11-30',
                'tanggal_kembali' => '2022-12-19',
                'status' => 4,
                'penyewaan' => 1,
                'konfirmasi_oleh' => 5,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 6,
                'created_by' => 5,
                'created_at' => '2022-11-29 20:25:55',
                'updated_at' => '2022-12-19 14:17:42',
            ),
            1 => 
            array (
                'id' => 2,
                'no_surat_jalan' => 'SJ/00003',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-11-30',
                'tanggal_kembali' => '2022-12-19',
                'status' => 4,
                'penyewaan' => 2,
                'konfirmasi_oleh' => 5,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 6,
                'created_by' => 5,
                'created_at' => '2022-11-29 21:59:27',
                'updated_at' => '2022-12-19 14:28:47',
            ),
            2 => 
            array (
                'id' => 3,
                'no_surat_jalan' => 'SJ/00004',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2023-07-18',
                'tanggal_kembali' => NULL,
                'status' => 2,
                'penyewaan' => 3,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 6,
                'created_by' => 5,
                'created_at' => '2023-07-16 12:18:07',
                'updated_at' => '2023-07-16 12:39:43',
            ),
            3 => 
            array (
                'id' => 4,
                'no_surat_jalan' => NULL,
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2023-08-17',
                'tanggal_kembali' => NULL,
                'status' => 0,
                'penyewaan' => 4,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2023-08-17 00:49:52',
                'updated_at' => '2023-08-17 00:49:52',
            ),
        ));
        
        
    }
}