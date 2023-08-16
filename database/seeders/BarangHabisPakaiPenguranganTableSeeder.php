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
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00002',
                'keterangan' => 'Tanggal 2022-12-01, Di Customer 1 Lokasi Alamat 1',
                'tanggal' => '2022-11-30 00:00:00',
                'penyewaan' => 1,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-12-19 14:17:42',
                'updated_at' => '2022-12-19 14:17:42',
            ),
            1 => 
            array (
                'id' => 4,
                'nama' => 'f',
                'keterangan' => NULL,
                'tanggal' => '2023-07-14 13:12:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 6,
                'created_at' => '2023-07-16 13:13:07',
                'updated_at' => '2023-07-16 13:13:07',
            ),
        ));
        
        
    }
}