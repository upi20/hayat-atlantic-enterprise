<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiRugiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ganti_rugi')->delete();
        
        \DB::table('ganti_rugi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'penyewaan_id' => 14,
                'customer' => 18,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00006',
                'keterangan' => 'Tanggal 2022-10-08, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'no_surat' => 1,
                'jumlah_barang' => 7,
                'total_qty_barang' => 12,
                'nominal' => 1027500,
                'dibayar' => 0,
                'dibayar_barang' => 1437500,
                'sisa' => -410000,
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-22 06:16:05',
            ),
            1 => 
            array (
                'id' => 2,
                'penyewaan_id' => 15,
                'customer' => 17,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00007',
                'keterangan' => 'Tanggal 2022-10-20, Di Dr Baru Lokasi Lengkong',
                'no_surat' => 2,
                'jumlah_barang' => 6,
                'total_qty_barang' => 13,
                'nominal' => 4562500,
                'dibayar' => 17500,
                'dibayar_barang' => 4545000,
                'sisa' => 0,
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 05:24:30',
            ),
            2 => 
            array (
                'id' => 3,
                'penyewaan_id' => 12,
                'customer' => 16,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00008',
                'keterangan' => 'Tanggal 2022-10-28, Di Daniel Nugraha Lokasi Pontianak',
                'no_surat' => 3,
                'jumlah_barang' => 2,
                'total_qty_barang' => 8,
                'nominal' => 3780000,
                'dibayar' => 0,
                'dibayar_barang' => 0,
                'sisa' => 3780000,
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-22 11:27:04',
                'updated_at' => '2022-10-25 23:29:49',
            ),
            3 => 
            array (
                'id' => 4,
                'penyewaan_id' => 18,
                'customer' => 15,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00010',
                'keterangan' => 'Tanggal 2022-10-26, Di Customer 15 Lokasi Alamat 15',
                'no_surat' => 4,
                'jumlah_barang' => 3,
                'total_qty_barang' => 6,
                'nominal' => 510000,
                'dibayar' => 50000,
                'dibayar_barang' => 500000,
                'sisa' => -40000,
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:22:29',
            ),
            4 => 
            array (
                'id' => 5,
                'penyewaan_id' => 16,
                'customer' => 19,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00009',
                'keterangan' => 'Tanggal 2022-10-29, Di Kepada Penyewa Baru Lokasi Lokasi Penyewaan Baru',
                'no_surat' => 5,
                'jumlah_barang' => 4,
                'total_qty_barang' => 35,
                'nominal' => 3990000,
                'dibayar' => 0,
                'dibayar_barang' => 0,
                'sisa' => 3990000,
                'status' => 0,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            5 => 
            array (
                'id' => 6,
                'penyewaan_id' => 19,
                'customer' => 18,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00010',
                'keterangan' => 'Tanggal 2022-11-04, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'no_surat' => 6,
                'jumlah_barang' => 1,
                'total_qty_barang' => 1,
                'nominal' => 100000,
                'dibayar' => 0,
                'dibayar_barang' => 100000,
                'sisa' => 0,
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-11-04 22:57:43',
                'updated_at' => '2022-11-04 22:58:42',
            ),
        ));
        
        
    }
}