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
                'id' => '1',
                'nama' => 'Data Awal',
                'keterangan' => NULL,
                'tanggal' => '2022-09-17 22:04:43',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '4',
                'nama' => 'Testing',
                'keterangan' => NULL,
                'tanggal' => '2022-09-24 16:23:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-24 16:24:02',
                'updated_at' => '2022-09-24 16:24:02',
            ),
            2 => 
            array (
                'id' => '5',
                'nama' => 'Testing Aplikasi',
                'keterangan' => NULL,
                'tanggal' => '2022-09-24 19:39:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-09-24 19:39:25',
                'updated_at' => '2022-09-24 19:39:25',
            ),
            3 => 
            array (
                'id' => '6',
                'nama' => 'Testing Pengadaan',
                'keterangan' => 'Testing',
                'tanggal' => '2022-11-12 16:29:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-11-12 16:29:43',
                'updated_at' => '2022-11-12 16:29:43',
            ),
            4 => 
            array (
                'id' => '7',
                'nama' => 'Tutorial',
                'keterangan' => NULL,
                'tanggal' => '2022-11-19 17:04:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:04:27',
                'updated_at' => '2022-11-12 17:04:27',
            ),
            5 => 
            array (
                'id' => '8',
                'nama' => 'Ganti Rugi Barang Saat Penyewaan Dengan Surat Jalan Nomor ',
                'keterangan' => 'Tanggal 2022-11-14 s/d 2022-11-15, Di Bpk. Nurdin Lokasi Lokasi penyewaan cianjur kota',
                'tanggal' => '2022-11-19 09:57:01',
                'penyewaan' => '3',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:57:01',
                'updated_at' => '2022-11-19 09:57:01',
            ),
        ));
        
        
    }
}