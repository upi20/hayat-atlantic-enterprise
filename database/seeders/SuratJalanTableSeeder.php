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
                'id' => '2',
                'no_surat_jalan' => 'SJ/00003',
                'penerima' => NULL,
                'keterangan' => 'Barang Yang Rusak Harus Di Ganti Rugi',
                'tanggal' => '2022-11-12',
                'tanggal_kembali' => NULL,
                'status' => '2',
                'penyewaan' => '2',
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-12 16:49:22',
                'updated_at' => '2022-11-12 16:51:38',
            ),
            1 => 
            array (
                'id' => '3',
                'no_surat_jalan' => 'SJ/00004',
                'penerima' => NULL,
                'keterangan' => 'Barang Yang Rusak atau pun hilang harus di ganti',
                'tanggal' => '2022-11-13',
                'tanggal_kembali' => '2022-11-12',
                'status' => '4',
                'penyewaan' => '3',
                'konfirmasi_oleh' => '5',
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-12 17:13:22',
                'updated_at' => '2022-11-12 17:29:59',
            ),
            2 => 
            array (
                'id' => '4',
                'no_surat_jalan' => 'SJ/00005',
                'penerima' => NULL,
                'keterangan' => 'Barang yang rusak wajib di ganti rugi',
                'tanggal' => '2022-11-18',
                'tanggal_kembali' => NULL,
                'status' => '2',
                'penyewaan' => '4',
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2022-11-19 09:53:24',
                'updated_at' => '2022-11-19 09:54:21',
            ),
        ));
        
        
    }
}