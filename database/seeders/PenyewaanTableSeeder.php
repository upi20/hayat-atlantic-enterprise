<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyewaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyewaan')->delete();
        
        \DB::table('penyewaan')->insert(array (
            0 => 
            array (
                'id' => 5,
                'customer' => 1,
                'lokasi' => 'Lokasi Alamat 1',
                'tanggal_kirim' => '2022-09-09',
                'tanggal_pakai_dari' => '2022-09-10',
                'tanggal_pakai_sampai' => '2022-09-10',
                'kepada' => 'Kepada Customer 1',
                'tanggal_order' => '2022-09-29 21:46:00',
                'status' => 2,
                'total_harga' => 11000000,
                'dibayar' => 6000000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-09-29 21:41:55',
                'updated_at' => '2022-10-02 16:53:37',
            ),
            1 => 
            array (
                'id' => 6,
                'customer' => 2,
                'lokasi' => 'Lokasi Alamat 2',
                'tanggal_kirim' => '2022-10-07',
                'tanggal_pakai_dari' => '2022-10-08',
                'tanggal_pakai_sampai' => '2022-10-08',
                'kepada' => 'Kpeada Customer 2',
                'tanggal_order' => '2022-10-07 15:26:00',
                'status' => 2,
                'total_harga' => 100000,
                'dibayar' => 100000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-02 16:44:01',
                'updated_at' => '2022-10-08 10:57:02',
            ),
            2 => 
            array (
                'id' => 7,
                'customer' => NULL,
                'lokasi' => NULL,
                'tanggal_kirim' => NULL,
                'tanggal_pakai_dari' => NULL,
                'tanggal_pakai_sampai' => NULL,
                'kepada' => NULL,
                'tanggal_order' => NULL,
                'status' => 0,
                'total_harga' => 0,
                'dibayar' => 0,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-07 16:53:04',
                'updated_at' => '2022-10-07 16:53:04',
            ),
        ));
        
        
    }
}