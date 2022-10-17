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
                'id' => 8,
                'customer' => 1,
                'lokasi' => 'Gedung Sate',
                'tanggal_kirim' => '2022-10-10',
                'tanggal_pakai_dari' => '2022-10-11',
                'tanggal_pakai_sampai' => '2022-10-11',
                'kepada' => 'Bpk. Daniel Nugraha',
                'tanggal_order' => '2022-10-09',
                'status' => 5,
                'total_harga' => 2900000,
                'dibayar' => 2900000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 13:57:16',
                'updated_at' => '2022-10-10 01:35:30',
            ),
            1 => 
            array (
                'id' => 9,
                'customer' => 1,
                'lokasi' => 'Jl. Supratman no 54 gedung b',
                'tanggal_kirim' => '2022-10-12',
                'tanggal_pakai_dari' => '2022-10-13',
                'tanggal_pakai_sampai' => '2022-10-13',
                'kepada' => 'Bpk. Ir. Faisal',
                'tanggal_order' => '2022-10-09',
                'status' => 4,
                'total_harga' => 8850000,
                'dibayar' => 4000000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:32:40',
                'updated_at' => '2022-10-10 00:11:24',
            ),
            2 => 
            array (
                'id' => 10,
                'customer' => 2,
                'lokasi' => 'Gedung Serba guna Widyatama.',
                'tanggal_kirim' => '2022-10-07',
                'tanggal_pakai_dari' => '2022-10-08',
                'tanggal_pakai_sampai' => '2022-10-08',
                'kepada' => 'Althaf Subhan',
                'tanggal_order' => '2022-10-10',
                'status' => 5,
                'total_harga' => 3750000,
                'dibayar' => 3750000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:07:38',
                'updated_at' => '2022-10-10 11:48:45',
            ),
            3 => 
            array (
                'id' => 11,
                'customer' => 1,
                'lokasi' => 'Alamat 1',
                'tanggal_kirim' => '2022-10-05',
                'tanggal_pakai_dari' => '2022-10-06',
                'tanggal_pakai_sampai' => '2022-10-06',
                'kepada' => 'Customer 1',
                'tanggal_order' => '2022-10-10',
                'status' => 5,
                'total_harga' => 17075000,
                'dibayar' => 17075000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 11:22:31',
                'updated_at' => '2022-10-10 13:18:19',
            ),
            4 => 
            array (
                'id' => 12,
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
                'created_by' => 5,
                'created_at' => '2022-10-10 11:38:10',
                'updated_at' => '2022-10-10 11:38:10',
            ),
            5 => 
            array (
                'id' => 13,
                'customer' => 16,
                'lokasi' => 'Jalan supratman no 50 gedung b',
                'tanggal_kirim' => '2022-10-12',
                'tanggal_pakai_dari' => '2022-10-13',
                'tanggal_pakai_sampai' => '2022-10-13',
                'kepada' => 'Bu. Daniel Nugraha',
                'tanggal_order' => '2022-10-10',
                'status' => 5,
                'total_harga' => 1915000,
                'dibayar' => 1000000,
                'status_pembayaran' => 1,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 12:12:40',
                'updated_at' => '2022-10-10 14:40:48',
            ),
            6 => 
            array (
                'id' => 14,
                'customer' => 18,
                'lokasi' => 'Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal_kirim' => '2022-10-07',
                'tanggal_pakai_dari' => '2022-10-08',
                'tanggal_pakai_sampai' => '2022-10-08',
                'kepada' => 'Handip Yusuf Kurniawan',
                'tanggal_order' => '2022-10-15',
                'status' => 4,
                'total_harga' => 9200000,
                'dibayar' => 4000000,
                'status_pembayaran' => 0,
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 17:44:39',
                'updated_at' => '2022-10-18 01:23:24',
            ),
        ));
        
        
    }
}