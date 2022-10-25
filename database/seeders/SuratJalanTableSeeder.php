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
            3 => 
            array (
                'id' => 8,
                'no_surat_jalan' => '4',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-05',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 11,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 12:58:59',
                'updated_at' => '2022-10-10 13:14:55',
            ),
            4 => 
            array (
                'id' => 9,
                'no_surat_jalan' => '5',
                'penerima' => NULL,
                'keterangan' => 'Barang yang rusak harus di ganti rugi.',
                'tanggal' => '2022-10-12',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 13,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:31:21',
                'updated_at' => '2022-10-10 14:39:04',
            ),
            5 => 
            array (
                'id' => 10,
                'no_surat_jalan' => '6',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-07',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 14,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            6 => 
            array (
                'id' => 11,
                'no_surat_jalan' => '7',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-19',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 15,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:25:21',
                'updated_at' => '2022-10-22 02:09:52',
            ),
            7 => 
            array (
                'id' => 12,
                'no_surat_jalan' => '8',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-27',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 12,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 6,
                'created_by' => 5,
                'created_at' => '2022-10-22 10:48:11',
                'updated_at' => '2022-10-22 11:27:04',
            ),
            8 => 
            array (
                'id' => 13,
                'no_surat_jalan' => '9',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-28',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 16,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-25 23:17:17',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            9 => 
            array (
                'id' => 14,
                'no_surat_jalan' => '10',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-25',
                'tanggal_kembali' => NULL,
                'status' => 4,
                'penyewaan' => 18,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:04:48',
                'updated_at' => '2022-10-26 00:16:11',
            ),
        ));
        
        
    }
}