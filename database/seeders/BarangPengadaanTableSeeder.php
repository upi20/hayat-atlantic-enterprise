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
                'id' => 1,
                'nama' => 'Ditambahkan bersamaan dengan pembuatan aplikasi',
                'keterangan' => NULL,
                'tanggal' => '2022-09-16 00:00:00',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'nama' => 'Testing',
                'keterangan' => NULL,
                'tanggal' => '2022-09-16 20:50:30',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-24 16:24:02',
                'updated_at' => '2022-09-24 16:24:02',
            ),
            2 => 
            array (
                'id' => 5,
                'nama' => 'Testing Aplikasi',
                'keterangan' => NULL,
                'tanggal' => '2022-09-24 19:39:00',
                'updated_by' => NULL,
                'created_by' => 5,
                'created_at' => '2022-09-24 19:39:25',
                'updated_at' => '2022-09-24 19:39:25',
            ),
        ));
        
        
    }
}