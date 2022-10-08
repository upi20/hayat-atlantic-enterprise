<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratJalanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('surat_jalan')->delete();
        
        \DB::table('surat_jalan')->insert(array (
            0 => 
            array (
                'id' => 2,
                'no_surat_jalan' => '1',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima. Barang yang
sudah diterima/dipasang tidak dapat dibatalkan.. Barang yang
hilang/rusak/cacat harus diganti. Semua klaim setelah barang
diterima tidak akan ditanggapi.',
                'tanggal' => '2022-09-09',
                'penyewaan' => 5,
                'status' => 1,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:02:25',
                'updated_at' => '2022-10-08 10:59:33',
            ),
            1 => 
            array (
                'id' => 3,
                'no_surat_jalan' => '2',
                'penerima' => NULL,
                'keterangan' => 'Harap barang pesanan dicek kembali saat diterima. Barang yang
sudah diterima/dipasang tidak dapat dibatalkan.. Barang yang
hilang/rusak/cacat harus diganti. Semua klaim setelah barang
diterima tidak akan ditanggapi.',
                'tanggal' => '2022-10-07',
                'penyewaan' => 6,
                'status' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-08 10:57:27',
                'updated_at' => '2022-10-08 13:15:10',
            ),
        ));
        
        
    }
}