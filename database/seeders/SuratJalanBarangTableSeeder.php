<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratJalanBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('surat_jalan_barang')->delete();
        
        \DB::table('surat_jalan_barang')->insert(array (
            0 => 
            array (
                'id' => 16,
                'barang' => 1,
                'qty' => 5,
                'pengembalian_qty' => 5,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 5,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:37:47',
                'updated_at' => '2022-10-09 15:09:31',
            ),
            1 => 
            array (
                'id' => 17,
                'barang' => 3,
                'qty' => 100,
                'pengembalian_qty' => 100,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 5,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:37:47',
                'updated_at' => '2022-10-09 15:09:31',
            ),
            2 => 
            array (
                'id' => 18,
                'barang' => 6,
                'qty' => 100,
                'pengembalian_qty' => 100,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 5,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:37:47',
                'updated_at' => '2022-10-09 15:09:31',
            ),
            3 => 
            array (
                'id' => 19,
                'barang' => 100,
                'qty' => 120,
                'pengembalian_qty' => 120,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 5,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 14:37:47',
                'updated_at' => '2022-10-09 15:09:31',
            ),
            4 => 
            array (
                'id' => 20,
                'barang' => 4,
                'qty' => 10,
                'pengembalian_qty' => 5,
                'pengembalian_hilang' => 2,
                'pengembalian_rusak' => 3,
                'surat_jalan' => 6,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:36:02',
                'updated_at' => '2022-10-10 00:11:22',
            ),
            5 => 
            array (
                'id' => 21,
                'barang' => 1,
                'qty' => 1,
                'pengembalian_qty' => 1,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 6,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:36:02',
                'updated_at' => '2022-10-09 21:57:06',
            ),
            6 => 
            array (
                'id' => 22,
                'barang' => 100,
                'qty' => 100,
                'pengembalian_qty' => 100,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 6,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-09 21:36:02',
                'updated_at' => '2022-10-09 21:57:06',
            ),
            7 => 
            array (
                'id' => 23,
                'barang' => 4,
                'qty' => 5,
                'pengembalian_qty' => 2,
                'pengembalian_hilang' => 3,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 7,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:08:55',
                'updated_at' => '2022-10-10 00:09:58',
            ),
            8 => 
            array (
                'id' => 24,
                'barang' => 4,
                'qty' => 20,
                'pengembalian_qty' => 20,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 8,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 12:58:59',
                'updated_at' => '2022-10-10 13:14:09',
            ),
            9 => 
            array (
                'id' => 25,
                'barang' => 3,
                'qty' => 500,
                'pengembalian_qty' => 500,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 8,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 12:58:59',
                'updated_at' => '2022-10-10 13:14:09',
            ),
            10 => 
            array (
                'id' => 26,
                'barang' => 8,
                'qty' => 10,
                'pengembalian_qty' => 10,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 8,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 12:58:59',
                'updated_at' => '2022-10-10 13:14:09',
            ),
        ));
        
        
    }
}