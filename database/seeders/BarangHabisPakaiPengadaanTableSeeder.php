<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangHabisPakaiPengadaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_habis_pakai_pengadaan')->delete();
        
        \DB::table('barang_habis_pakai_pengadaan')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Data Awal',
                'keterangan' => NULL,
                'tanggal' => '2022-09-17 22:04:43',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Testing',
                'keterangan' => NULL,
                'tanggal' => '2022-11-12 16:34:00',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-11-12 16:34:20',
                'updated_at' => '2022-11-12 16:34:20',
            ),
        ));
        
        
    }
}