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
                'no_surat_jalan' => 'SJ/00005',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima.

Barang yang sudah diterima/dipasang tidak dapat dibatalkan..

Barang yang hilang/rusak/cacat harus diganti.

Semua klaim setelah barang diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-10',
                'tanggal_kembali' => '2022-10-10',
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
                'no_surat_jalan' => 'SJ/00006',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima.

Barang yang sudah diterima/dipasang tidak dapat dibatalkan..

Barang yang hilang/rusak/cacat harus diganti.

Semua klaim setelah barang diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-12',
                'tanggal_kembali' => '2022-10-10',
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
                'no_surat_jalan' => 'SJ/00007',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima. Barang yang
sudah diterima/dipasang tidak dapat dibatalkan.. Barang yang
hilang/rusak/cacat harus diganti. Semua klaim setelah barang
diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-07',
                'tanggal_kembali' => '2022-10-10',
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
                'no_surat_jalan' => 'SJ/00008',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-05',
                'tanggal_kembali' => '2022-10-10',
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
                'no_surat_jalan' => 'SJ/00009',
                'penerima' => NULL,
                'keterangan' => 'Barang yang rusak harus di ganti rugi.',
                'tanggal' => '2022-10-12',
                'tanggal_kembali' => '2022-10-10',
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
                'no_surat_jalan' => 'SJ/00010',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-07',
                'tanggal_kembali' => '2022-10-18',
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
                'no_surat_jalan' => 'SJ/00011',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-19',
                'tanggal_kembali' => '2022-10-22',
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
                'no_surat_jalan' => 'SJ/00012',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-27',
                'tanggal_kembali' => '2022-10-22',
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
                'no_surat_jalan' => 'SJ/00013',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-28',
                'tanggal_kembali' => '2022-10-26',
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
                'no_surat_jalan' => 'SJ/00014',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-10-25',
                'tanggal_kembali' => '2022-10-26',
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
            10 => 
            array (
                'id' => 15,
                'no_surat_jalan' => 'SJ/00015',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-11-03',
                'tanggal_kembali' => '2022-11-04',
                'status' => 4,
                'penyewaan' => 19,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-11-04 22:57:02',
                'updated_at' => '2022-11-04 22:57:43',
            ),
            11 => 
            array (
                'id' => 16,
                'no_surat_jalan' => 'SJ/00016',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali kondisi dan jumlah saat diterima.
Jika ada barang pesanan yang tidak layar/rusak/cacat/tidak sesuai
dan sebagainya harap langsung melakukan komplain.
Semua klaim setelah barang diterima tidak akan ditanggapi',
                'tanggal' => '2022-11-03',
                'tanggal_kembali' => '2022-11-05',
                'status' => 3,
                'penyewaan' => 27,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-11-05 17:28:51',
                'updated_at' => '2022-11-05 17:41:14',
            ),
            12 => 
            array (
                'id' => 19,
                'no_surat_jalan' => 'SJ/00017',
                'penerima' => NULL,
                'keterangan' => NULL,
                'tanggal' => '2022-11-06',
                'tanggal_kembali' => NULL,
                'status' => 1,
                'penyewaan' => 29,
                'konfirmasi_oleh' => NULL,
                'kirim_oleh' => NULL,
                'kembali_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-11-06 17:36:46',
                'updated_at' => '2022-11-06 17:36:50',
            ),
        ));
        
        
    }
}