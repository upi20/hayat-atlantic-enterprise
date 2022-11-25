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
                'id' => '2',
                'customer' => NULL,
                'number' => 'SP/00003',
                'lokasi' => 'Pontianak',
                'tanggal_kirim' => '2022-11-12',
                'tanggal_pakai_dari' => '2022-11-13',
                'tanggal_pakai_sampai' => '2022-11-13',
                'kepada' => 'Daniel Nugraha',
                'tanggal_order' => '2022-11-12',
                'status' => '3',
                'total_harga' => '1010000',
                'dibayar' => '1010000',
                'status_pembayaran' => '1',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:47:42',
                'updated_at' => '2022-11-12 16:51:38',
            ),
            1 => 
            array (
                'id' => '3',
                'customer' => NULL,
                'number' => 'SP/00004',
                'lokasi' => 'Lokasi penyewaan cianjur kota',
                'tanggal_kirim' => '2022-11-13',
                'tanggal_pakai_dari' => '2022-11-14',
                'tanggal_pakai_sampai' => '2022-11-15',
                'kepada' => 'Bpk. Nurdin',
                'tanggal_order' => '2022-11-12',
                'status' => '5',
                'total_harga' => '2250000',
                'dibayar' => '2250000',
                'status_pembayaran' => '1',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 16:59:40',
                'updated_at' => '2022-11-19 09:57:01',
            ),
            2 => 
            array (
                'id' => '4',
                'customer' => NULL,
                'number' => 'SP/00005',
                'lokasi' => 'Lokasi Penyewa',
                'tanggal_kirim' => '2022-11-18',
                'tanggal_pakai_dari' => '2022-11-26',
                'tanggal_pakai_sampai' => '2022-11-26',
                'kepada' => 'Kepada penyewa',
                'tanggal_order' => '2022-11-19',
                'status' => '3',
                'total_harga' => '1200000',
                'dibayar' => '600000',
                'status_pembayaran' => '0',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:52:02',
                'updated_at' => '2022-11-19 09:54:21',
            ),
            3 => 
            array (
                'id' => '5',
                'customer' => NULL,
                'number' => 'SP/00006',
                'lokasi' => NULL,
                'tanggal_kirim' => NULL,
                'tanggal_pakai_dari' => NULL,
                'tanggal_pakai_sampai' => NULL,
                'kepada' => NULL,
                'tanggal_order' => NULL,
                'status' => '0',
                'total_harga' => '0',
                'dibayar' => '0',
                'status_pembayaran' => '0',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-11-19 13:51:13',
                'updated_at' => '2022-11-19 13:51:13',
            ),
            4 => 
            array (
                'id' => '6',
                'customer' => NULL,
                'number' => 'SP/00007',
                'lokasi' => NULL,
                'tanggal_kirim' => NULL,
                'tanggal_pakai_dari' => NULL,
                'tanggal_pakai_sampai' => NULL,
                'kepada' => NULL,
                'tanggal_order' => NULL,
                'status' => '0',
                'total_harga' => '0',
                'dibayar' => '0',
                'status_pembayaran' => '0',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-24 16:23:53',
                'updated_at' => '2022-11-24 16:23:53',
            ),
        ));
        
        
    }
}