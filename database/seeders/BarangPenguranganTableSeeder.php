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
                'id' => '1',
                'nama' => 'Testing',
                'keterangan' => 'Testing wkwk',
                'tanggal' => '2022-09-24 16:19:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-24 16:20:00',
                'updated_at' => '2022-09-24 16:20:00',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Testing baru',
                'keterangan' => NULL,
                'tanggal' => '2022-11-12 16:36:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-11-12 16:36:49',
                'updated_at' => '2022-11-12 16:36:49',
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00004',
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