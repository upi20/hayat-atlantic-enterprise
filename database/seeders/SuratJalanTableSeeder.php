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
                'tanggal_kembali' => '2023-09-08',
                'status' => 4,
                'penyewaan' => 3,
                'konfirmasi_oleh' => 5,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 12,
                'created_by' => 5,
                'created_at' => '2023-07-16 12:18:07',
                'updated_at' => '2023-09-08 23:10:06',
            ),
            3 => 
            array (
                'id' => 4,
                'no_surat_jalan' => 'SJ/00006',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2023-08-17',
                'tanggal_kembali' => '2023-09-08',
                'status' => 4,
                'penyewaan' => 4,
                'konfirmasi_oleh' => 5,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 12,
                'created_by' => 1,
                'created_at' => '2023-08-17 00:49:52',
                'updated_at' => '2023-09-08 22:56:30',
            ),
            4 => 
            array (
                'id' => 5,
                'no_surat_jalan' => 'SJ/00005',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2023-09-08',
                'tanggal_kembali' => '2023-09-08',
                'status' => 4,
                'penyewaan' => 5,
                'konfirmasi_oleh' => 5,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 12,
                'created_by' => 5,
                'created_at' => '2023-09-08 22:51:41',
                'updated_at' => '2023-09-08 23:09:06',
            ),
            5 => 
            array (
                'id' => 6,
                'no_surat_jalan' => 'SJ/00007',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2023-09-08',
                'tanggal_kembali' => '2023-09-08',
                'status' => 3,
                'penyewaan' => 7,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 12,
                'created_by' => 12,
                'created_at' => '2023-09-08 23:02:21',
                'updated_at' => '2023-09-08 23:06:07',
            ),
        ));
        
        
    }
}