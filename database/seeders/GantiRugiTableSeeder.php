<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiRugiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ganti_rugi')->delete();
        
        \DB::table('ganti_rugi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'penyewaan_id' => 14,
                'customer' => 18,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00006',
                'keterangan' => 'Tanggal 2022-10-08, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'no_surat' => 1,
                'jumlah_barang' => 7,
                'total_qty_barang' => 12,
                'nominal' => 1027500,
                'dibayar' => 100000,
                'dibayar_barang' => 0,
                'sisa' => 927500,
                'status' => 1,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-18 22:12:55',
            ),
        ));
        
        
    }
}