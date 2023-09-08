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
                'penyewaan_id' => 2,
                'customer' => 2,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00003',
                'keterangan' => 'Tanggal 2022-12-01 s/d 2022-12-02, Di Customer 2 Lokasi Alamat 2',
                'no_surat' => 1,
                'jumlah_barang' => 2,
                'total_qty_barang' => 2,
                'nominal' => 15000,
                'dibayar' => 15000,
                'dibayar_barang' => 0,
                'sisa' => 0,
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-12-19 14:28:47',
                'updated_at' => '2022-12-19 14:38:29',
            ),
            1 => 
            array (
                'id' => 2,
                'penyewaan_id' => 5,
                'customer' => 16,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00005',
                'keterangan' => 'Tanggal 2023-09-09, Di Bpk Penerima Lokasi Lokasi pesta',
                'no_surat' => 2,
                'jumlah_barang' => 1,
                'total_qty_barang' => 2,
                'nominal' => 25000,
                'dibayar' => 0,
                'dibayar_barang' => 0,
                'sisa' => 25000,
                'status' => 0,
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2023-09-08 23:09:06',
                'updated_at' => '2023-09-08 23:09:06',
            ),
        ));
        
        
    }
}