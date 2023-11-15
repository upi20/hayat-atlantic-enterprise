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
                'id' => '1',
                'customer' => '18',
                'number' => 'SP/00002',
                'lokasi' => 'Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'tanggal_kirim' => '2023-09-24',
                'tanggal_pakai_dari' => '2023-09-25',
                'tanggal_pakai_sampai' => '2023-09-26',
                'kepada' => 'Handip Yusuf Kurniawan',
                'tanggal_order' => '2023-09-12',
                'status' => '4',
                'total_harga' => '1050000',
                'dibayar' => '600000',
                'status_pembayaran' => '0',
                'batal_keterangan' => NULL,
                'batal_tanggal' => NULL,
                'batal_oleh' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 08:49:57',
                'updated_at' => '2023-09-12 09:55:12',
            ),
        ));
        
        
    }
}