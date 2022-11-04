<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiListBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ganti_list_barang')->delete();
        
        \DB::table('ganti_list_barang')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ganti_rugi_id' => 1,
                'barang' => 1,
                'qty_rusak' => 5,
                'qty_hilang' => 1,
                'qty_diganti' => 6,
                'harga' => 100000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-22 06:15:47',
            ),
            1 => 
            array (
                'id' => 2,
                'ganti_rugi_id' => 1,
                'barang' => 5,
                'qty_rusak' => 2,
                'qty_hilang' => 1,
                'qty_diganti' => 3,
                'harga' => 10000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-22 06:15:52',
            ),
            2 => 
            array (
                'id' => 3,
                'ganti_rugi_id' => 1,
                'barang' => 4,
                'qty_rusak' => 1,
                'qty_hilang' => 0,
                'qty_diganti' => 1,
                'harga' => 750000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-22 06:15:56',
            ),
            3 => 
            array (
                'id' => 4,
                'ganti_rugi_id' => 1,
                'barang' => 100,
                'qty_rusak' => 0,
                'qty_hilang' => 1,
                'qty_diganti' => 1,
                'harga' => 12500,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-22 06:16:00',
            ),
            4 => 
            array (
                'id' => 5,
                'ganti_rugi_id' => 1,
                'barang' => 113,
                'qty_rusak' => 1,
                'qty_hilang' => 0,
                'qty_diganti' => 1,
                'harga' => 45000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-18 01:23:24',
                'updated_at' => '2022-10-22 06:16:05',
            ),
            5 => 
            array (
                'id' => 6,
                'ganti_rugi_id' => 2,
                'barang' => 2,
                'qty_rusak' => 2,
                'qty_hilang' => 3,
                'qty_diganti' => 4,
                'harga' => 10000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 05:14:16',
            ),
            6 => 
            array (
                'id' => 7,
                'ganti_rugi_id' => 2,
                'barang' => 4,
                'qty_rusak' => 3,
                'qty_hilang' => 3,
                'qty_diganti' => 6,
                'harga' => 750000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 02:12:20',
            ),
            7 => 
            array (
                'id' => 8,
                'ganti_rugi_id' => 2,
                'barang' => 7,
                'qty_rusak' => 1,
                'qty_hilang' => 0,
                'qty_diganti' => 1,
                'harga' => 5000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 02:12:26',
            ),
            8 => 
            array (
                'id' => 9,
                'ganti_rugi_id' => 2,
                'barang' => 8,
                'qty_rusak' => 0,
                'qty_hilang' => 1,
                'qty_diganti' => 0,
                'harga' => 7500,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-22 02:09:52',
                'updated_at' => '2022-10-22 05:08:39',
            ),
            9 => 
            array (
                'id' => 10,
                'ganti_rugi_id' => 3,
                'barang' => 2,
                'qty_rusak' => 3,
                'qty_hilang' => 0,
                'qty_diganti' => 0,
                'harga' => 10000,
                'updated_by' => 5,
                'created_by' => NULL,
                'created_at' => '2022-10-22 11:27:04',
                'updated_at' => '2022-10-22 13:23:01',
            ),
            10 => 
            array (
                'id' => 11,
                'ganti_rugi_id' => 3,
                'barang' => 4,
                'qty_rusak' => 5,
                'qty_hilang' => 0,
                'qty_diganti' => 0,
                'harga' => 750000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-22 11:27:04',
                'updated_at' => '2022-10-22 11:27:04',
            ),
            11 => 
            array (
                'id' => 12,
                'ganti_rugi_id' => 4,
                'barang' => 1,
                'qty_rusak' => 4,
                'qty_hilang' => 1,
                'qty_diganti' => 5,
                'harga' => 100000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:22:29',
            ),
            12 => 
            array (
                'id' => 13,
                'ganti_rugi_id' => 4,
                'barang' => 2,
                'qty_rusak' => 0,
                'qty_hilang' => 1,
                'qty_diganti' => 0,
                'harga' => 10000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-26 00:16:11',
                'updated_at' => '2022-10-26 00:16:11',
            ),
            13 => 
            array (
                'id' => 14,
                'ganti_rugi_id' => 5,
                'barang' => 5,
                'qty_rusak' => 10,
                'qty_hilang' => 10,
                'qty_diganti' => 0,
                'harga' => 10000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            14 => 
            array (
                'id' => 15,
                'ganti_rugi_id' => 5,
                'barang' => 3,
                'qty_rusak' => 10,
                'qty_hilang' => 0,
                'qty_diganti' => 0,
                'harga' => 4000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            15 => 
            array (
                'id' => 16,
                'ganti_rugi_id' => 5,
                'barang' => 4,
                'qty_rusak' => 0,
                'qty_hilang' => 5,
                'qty_diganti' => 0,
                'harga' => 750000,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-10-26 00:17:27',
                'updated_at' => '2022-10-26 00:17:27',
            ),
            16 => 
            array (
                'id' => 17,
                'ganti_rugi_id' => 6,
                'barang' => 1,
                'qty_rusak' => 0,
                'qty_hilang' => 1,
                'qty_diganti' => 1,
                'harga' => 100000,
                'updated_by' => 1,
                'created_by' => NULL,
                'created_at' => '2022-11-04 22:57:43',
                'updated_at' => '2022-11-04 22:58:42',
            ),
        ));
        
        
    }
}