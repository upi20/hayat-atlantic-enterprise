<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengambilanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pengambilan')->delete();
        
        \DB::table('pengambilan')->insert(array (
            0 => 
            array (
                'id' => 2,
                'penyewaan' => 5,
                'tanggal' => '2022-09-09',
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima.

Barang yang sudah diterima/dipasang tidak dapat dibatalkan..

Barang yang hilang/rusak/cacat harus diganti.

Semua klaim setelah barang diterima tidak akan ditanggapi.',
                'status' => 2,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-07 16:30:28',
                'updated_at' => '2022-10-07 21:58:14',
            ),
        ));
        
        
    }
}