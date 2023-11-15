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
                'tanggal' => '2020-01-01 14:18:04',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2020-01-01 14:18:04',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}