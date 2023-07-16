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
                'id' => '6',
                'nama' => 'Ganti Rugi Barang Saat Penyewaan Dengan Surat Jalan Nomor ',
                'keterangan' => 'Tanggal 2022-12-01 s/d 2022-12-02, Di Customer 2 Lokasi Alamat 2',
                'tanggal' => '2022-12-19 15:00:59',
                'penyewaan' => '2',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-12-19 15:00:59',
                'updated_at' => '2022-12-19 15:00:59',
            ),
            1 => 
            array (
                'id' => '10',
                'nama' => 'Pelunasan',
                'keterangan' => NULL,
                'tanggal' => '2023-07-16 13:01:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2023-07-16 13:01:23',
                'updated_at' => '2023-07-16 13:01:23',
            ),
        ));
        
        
    }
}