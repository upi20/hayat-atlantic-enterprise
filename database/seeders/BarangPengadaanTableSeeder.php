<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPengadaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengadaan')->delete();
        
        \DB::table('barang_pengadaan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Ditambahkan bersamaan dengan pembuatan aplikasi',
                'keterangan' => NULL,
                'tanggal' => '2022-09-16 00:00:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'nama' => 'Testing',
                'keterangan' => NULL,
                'tanggal' => '2022-09-16 20:50:30',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-24 16:24:02',
                'updated_at' => '2022-09-24 16:24:02',
            ),
            2 => 
            array (
                'id' => 5,
                'nama' => 'Testing Aplikasi',
                'keterangan' => NULL,
                'tanggal' => '2022-09-24 19:39:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-09-24 19:39:25',
                'updated_at' => '2022-09-24 19:39:25',
            ),
            3 => 
            array (
                'id' => 7,
                'nama' => 'Ganti Rugi Barang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00007',
                'keterangan' => 'Tanggal 2022-10-20, Di Dr Baru Lokasi Lengkong',
                'tanggal' => '2022-10-22 00:00:00',
                'penyewaan' => 15,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 05:41:08',
                'updated_at' => '2022-10-22 05:41:08',
            ),
            4 => 
            array (
                'id' => 8,
                'nama' => 'Ganti Rugi Barang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00006',
                'keterangan' => 'Tanggal 2022-10-08, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal' => '2022-10-22 00:00:00',
                'penyewaan' => 14,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:17:15',
                'updated_at' => '2022-10-22 06:17:15',
            ),
        ));
        
        
    }
}