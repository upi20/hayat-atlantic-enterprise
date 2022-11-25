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
                'id' => '1',
                'nama' => 'Testing',
                'keterangan' => '123',
                'tanggal' => '2022-09-24 17:23:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-24 17:23:29',
                'updated_at' => '2022-09-24 17:23:29',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00004',
                'keterangan' => 'Tanggal 2022-11-14 s/d 2022-11-15, Di Bpk. Nurdin Lokasi Lokasi penyewaan cianjur kota',
                'tanggal' => '2022-11-13 00:00:00',
                'penyewaan' => '3',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-12 17:29:59',
            ),
        ));
        
        
    }
}