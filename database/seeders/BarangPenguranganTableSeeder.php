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
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00002',
                'keterangan' => 'Tanggal 2023-09-25 s/d 2023-09-26, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal' => '2023-09-24 00:00:00',
                'penyewaan' => '1',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:55:12',
                'updated_at' => '2023-09-12 09:55:12',
            ),
            1 => 
            array (
                'id' => '3',
                'nama' => 'Ganti Rugi SJ00002',
                'keterangan' => NULL,
                'tanggal' => '2023-09-12 10:29:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2023-09-12 10:35:46',
                'updated_at' => '2023-09-12 10:35:46',
            ),
        ));
        
        
    }
}