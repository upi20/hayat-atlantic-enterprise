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
                'id' => 1,
                'customer' => 1,
                'number' => 'SP/00002',
                'lokasi' => 'Alamat 1',
                'tanggal_kirim' => '2022-11-30',
                'tanggal_pakai_dari' => '2022-12-01',
                'tanggal_pakai_sampai' => '2022-12-01',
                'kepada' => 'Customer 1',
                'tanggal_order' => '2022-11-29',
                'status' => 5,
                'total_harga' => 560000,
                'dibayar' => 560000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-11-19 11:50:33',
                'updated_at' => '2022-12-19 14:21:12',
            ),
            1 => 
            array (
                'id' => 2,
                'customer' => 2,
                'number' => 'SP/00003',
                'lokasi' => 'Alamat 2',
                'tanggal_kirim' => '2022-11-30',
                'tanggal_pakai_dari' => '2022-12-01',
                'tanggal_pakai_sampai' => '2022-12-02',
                'kepada' => 'Customer 2',
                'tanggal_order' => '2022-11-29',
                'status' => 5,
                'total_harga' => 300000,
                'dibayar' => 300000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-11-29 20:34:12',
                'updated_at' => '2022-12-19 15:00:59',
            ),
            2 => 
            array (
                'id' => 3,
                'customer' => 20,
                'number' => 'SP/00004',
                'lokasi' => 'unjani',
                'tanggal_kirim' => '2023-07-18',
                'tanggal_pakai_dari' => '2023-07-19',
                'tanggal_pakai_sampai' => '2023-07-20',
                'kepada' => 'safina',
                'tanggal_order' => '2023-07-16',
                'status' => 4,
                'total_harga' => 760000,
                'dibayar' => 760000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-12-19 14:22:30',
                'updated_at' => '2023-09-08 23:10:06',
            ),
            3 => 
            array (
                'id' => 4,
                'customer' => 17,
                'number' => 'SP/00005',
                'lokasi' => 'Lengkong',
                'tanggal_kirim' => '2023-08-17',
                'tanggal_pakai_dari' => '2023-08-18',
                'tanggal_pakai_sampai' => '2023-08-20',
                'kepada' => 'Dr Baru',
                'tanggal_order' => '2023-08-17',
                'status' => 4,
                'total_harga' => 35000,
                'dibayar' => 10000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2023-01-01 09:51:04',
                'updated_at' => '2023-09-08 22:56:30',
            ),
            4 => 
            array (
                'id' => 5,
                'customer' => 16,
                'number' => 'SP/00006',
                'lokasi' => 'Lokasi pesta',
                'tanggal_kirim' => '2023-09-08',
                'tanggal_pakai_dari' => '2023-09-09',
                'tanggal_pakai_sampai' => '2023-09-09',
                'kepada' => 'Bpk Penerima',
                'tanggal_order' => '2023-09-08',
                'status' => 4,
                'total_harga' => 305000,
                'dibayar' => 305000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => 5,
                'created_by' => 5,
                'created_at' => '2023-07-16 15:13:43',
                'updated_at' => '2023-09-08 23:11:00',
            ),
            5 => 
            array (
                'id' => 6,
                'customer' => NULL,
                'number' => 'SP/00007',
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
                'created_at' => '2023-08-17 01:37:55',
                'updated_at' => '2023-08-17 01:37:55',
            ),
            6 => 
            array (
                'id' => 7,
                'customer' => 19,
                'number' => 'SP/00008',
                'lokasi' => 'Alamat Customer Baru',
                'tanggal_kirim' => '2023-09-08',
                'tanggal_pakai_dari' => '2023-09-09',
                'tanggal_pakai_sampai' => '2023-09-10',
                'kepada' => 'Nama Customer Baru',
                'tanggal_order' => '2023-09-08',
                'status' => 3,
                'total_harga' => 25000,
                'dibayar' => 1000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => 5,
                'created_by' => 5,
                'created_at' => '2023-09-08 22:57:11',
                'updated_at' => '2023-09-08 23:02:40',
            ),
        ));
        
        
    }
}