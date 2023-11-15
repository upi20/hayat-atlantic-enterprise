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
                'id' => '1',
                'penyewaan_id' => '1',
                'customer' => '18',
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00002',
                'keterangan' => 'Tanggal 2023-09-25 s/d 2023-09-26, Di Handip Yusuf Kurniawan Lokasi Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'no_surat' => '1',
                'jumlah_barang' => '2',
                'total_qty_barang' => '3',
                'nominal' => '25000',
                'dibayar' => '5000',
                'dibayar_barang' => '20000',
                'sisa' => '0',
                'status' => '2',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 09:55:12',
                'updated_at' => '2023-09-12 10:07:35',
            ),
        ));
        
        
    }
}