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
                'penyewaan_id' => '3',
                'customer' => NULL,
                'nama' => 'Barang Digunakan Saat Penyewaan Dengan Surat Jalan Nomor SJ/00004',
                'keterangan' => 'Tanggal 2022-11-14 s/d 2022-11-15, Di Bpk. Nurdin Lokasi Lokasi penyewaan cianjur kota',
                'no_surat' => '1',
                'jumlah_barang' => '2',
                'total_qty_barang' => '51',
                'nominal' => '1125000',
                'dibayar' => '1125000',
                'dibayar_barang' => '0',
                'sisa' => '0',
                'status' => '2',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-12 17:29:59',
                'updated_at' => '2022-11-19 09:56:49',
            ),
        ));
        
        
    }
}