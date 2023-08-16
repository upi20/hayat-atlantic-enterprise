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
                'keterangan' => 'Tanggal 2022-12-01 s/d 2022-12-02, Di Customer 2 Lokasi Alamat 2',
                'tanggal' => '2022-11-30 00:00:00',
                'penyewaan' => 2,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-12-19 14:28:47',
                'updated_at' => '2022-12-19 14:28:47',
            ),
            1 => 
            array (
                'id' => 4,
                'nama' => 'f',
                'keterangan' => NULL,
                'tanggal' => '2023-03-15 14:50:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2023-03-15 14:50:45',
                'updated_at' => '2023-03-15 14:50:45',
            ),
        ));
        
        
    }
}