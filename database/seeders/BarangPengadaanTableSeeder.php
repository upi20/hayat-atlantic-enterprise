<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPengadaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengadaan')->delete();
        
        \DB::table('barang_pengadaan')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Data Awal',
                'keterangan' => NULL,
                'tanggal' => '2020-01-01 00:00:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-11 06:32:36',
                'updated_at' => '2023-09-11 06:32:36',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Ganti Rugi SJ00002',
                'keterangan' => NULL,
                'tanggal' => '2023-09-12 10:45:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => '6',
                'created_at' => '2023-09-12 10:46:33',
                'updated_at' => '2023-09-12 10:46:33',
            ),
        ));
        
        
    }
}