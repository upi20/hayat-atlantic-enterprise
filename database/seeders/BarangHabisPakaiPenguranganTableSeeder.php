<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangHabisPakaiPenguranganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_habis_pakai_pengurangan')->delete();
        
        \DB::table('barang_habis_pakai_pengurangan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Testing',
                'keterangan' => '123',
                'tanggal' => '2022-09-24 17:23:00',
                'penyewaan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-24 17:23:29',
                'updated_at' => '2022-09-24 17:23:29',
            ),
        ));
        
        
    }
}