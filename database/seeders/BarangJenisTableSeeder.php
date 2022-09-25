<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangJenisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_jenis')->delete();
        
        \DB::table('barang_jenis')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Alat Pesta',
                'kode' => 'AP',
                'keterangan' => NULL,
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:23:25',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Barang Pecah Belah',
                'kode' => 'PB',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'Dekorasi',
                'kode' => 'DK',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'nama' => 'Kebutuhan pemasangan peralatan dan tenda',
                'kode' => 'PT',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'nama' => 'Kebutuhan Pembersih',
                'kode' => 'KP',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'nama' => 'Kebutuhan Kantor',
                'kode' => 'KK',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'nama' => 'Alat Pestifal',
                'kode' => 'AF',
                'keterangan' => NULL,
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-18 19:23:49',
                'updated_at' => '2022-09-18 19:28:16',
            ),
        ));
        
        
    }
}