<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPenguranganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengurangan')->delete();
        
        \DB::table('barang_pengurangan')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00003',
                'keterangan' => 'Tanggal 2022-10-08, Di Althaf Subhan Lokasi Gedung Serba guna Widyatama.',
                'tanggal' => '2022-10-07 00:00:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:10:42',
                'updated_at' => '2022-10-10 00:10:42',
            ),
            1 => 
            array (
                'id' => 3,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00002',
                'keterangan' => 'Tanggal 2022-10-13, Di Bpk. Ir. Faisal Lokasi Jl. Supratman no 54 gedung b',
                'tanggal' => '2022-10-12 00:00:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:11:24',
                'updated_at' => '2022-10-10 00:11:24',
            ),
            2 => 
            array (
                'id' => 4,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00005',
                'keterangan' => 'Tanggal 2022-10-13, Di Bu. Daniel Nugraha Lokasi Jalan supratman no 50 gedung b',
                'tanggal' => '2022-10-12 00:00:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-10 14:39:04',
                'updated_at' => '2022-10-10 14:39:04',
            ),
            3 => 
            array (
                'id' => 5,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00006',
                'keterangan' => 'Tanggal 2022-10-08, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal' => '2022-10-07 00:00:00',
                'penyewaan' => 14,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            4 => 
            array (
                'id' => 6,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00007',
                'keterangan' => 'Tanggal 2022-10-20, Di Dr Baru Lokasi Lengkong',
                'tanggal' => '2022-10-19 00:00:00',
                'penyewaan' => 15,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 02:09:52',
            ),
            5 => 
            array (
                'id' => 7,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00010',
                'keterangan' => 'Tanggal 2022-10-26, Di Customer 15 Lokasi Alamat 15',
                'tanggal' => '2022-10-25 00:00:00',
                'penyewaan' => 18,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:16:11',
            ),
            6 => 
            array (
                'id' => 8,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00009',
                'keterangan' => 'Tanggal 2022-10-29, Di Kepada Penyewa Baru Lokasi Lokasi Penyewaan Baru',
                'tanggal' => '2022-10-28 00:00:00',
                'penyewaan' => 16,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            7 => 
            array (
                'id' => 9,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00010',
                'keterangan' => 'Tanggal 2022-11-04, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal' => '2022-11-03 00:00:00',
                'penyewaan' => 19,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-11-04 22:57:43',
                'updated_at' => '2022-11-04 22:57:43',
            ),
        ));
        
        
    }
}