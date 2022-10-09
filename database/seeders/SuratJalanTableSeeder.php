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
                'id' => 5,
                'no_surat_jalan' => '1',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima.

Barang yang sudah diterima/dipasang tidak dapat dibatalkan..

Barang yang hilang/rusak/cacat harus diganti.

Semua klaim setelah barang diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-10',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 8,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:37:47',
                'updated_at' => '2022-10-10 00:11:38',
            ),
            1 => 
            array (
                'id' => 6,
                'no_surat_jalan' => '2',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima.

Barang yang sudah diterima/dipasang tidak dapat dibatalkan..

Barang yang hilang/rusak/cacat harus diganti.

Semua klaim setelah barang diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-12',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 9,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:36:02',
                'updated_at' => '2022-10-10 00:11:24',
            ),
            2 => 
            array (
                'id' => 7,
                'no_surat_jalan' => '3',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima. Barang yang
sudah diterima/dipasang tidak dapat dibatalkan.. Barang yang
hilang/rusak/cacat harus diganti. Semua klaim setelah barang
diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-07',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 10,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:08:55',
                'updated_at' => '2022-10-10 00:10:42',
            ),
        ));
        
        
    }
}