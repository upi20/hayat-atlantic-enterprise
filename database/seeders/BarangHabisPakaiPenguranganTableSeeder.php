<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangHabisPakaiPenguranganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_habis_pakai_pengurangan')->delete();
        
        \DB::table('barang_habis_pakai_pengurangan')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00006',
                'keterangan' => 'Tanggal 2022-10-08, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal' => '2022-10-07 00:00:00',
                'penyewaan' => 14,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 01:23:24',
            ),
            1 => 
            array (
                'id' => 4,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00008',
                'keterangan' => 'Tanggal 2022-10-28, Di Daniel Nugraha Lokasi Pontianak',
                'tanggal' => '2022-10-27 00:00:00',
                'penyewaan' => 12,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-10-22 11:27:04',
                'updated_at' => '2022-10-22 11:27:04',
            ),
            2 => 
            array (
                'id' => 5,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00010',
                'keterangan' => 'Tanggal 2022-10-26, Di Customer 15 Lokasi Alamat 15',
                'tanggal' => '2022-10-25 00:00:00',
                'penyewaan' => 18,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:16:11',
            ),
            3 => 
            array (
                'id' => 6,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00009',
                'keterangan' => 'Tanggal 2022-10-29, Di Kepada Penyewa Baru Lokasi Lokasi Penyewaan Baru',
                'tanggal' => '2022-10-28 00:00:00',
                'penyewaan' => 16,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
        ));
        
        
    }
}