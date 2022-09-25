<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPenguranganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengurangan')->delete();
        
        \DB::table('barang_pengurangan')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Testing',
                'keterangan' => 'Testing wkwk',
                'tanggal' => '2022-09-24 16:19:00',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-24 16:20:00',
                'updated_at' => '2022-09-24 16:20:00',
            ),
        ));
        
        
    }
}