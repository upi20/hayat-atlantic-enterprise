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
            11 => 
            array (
                'id' => 27,
                'barang' => 3,
                'qty' => 100,
                'pengembalian_qty' => 70,
                'pengembalian_hilang' => 20,
                'pengembalian_rusak' => 10,
                'surat_jalan' => 9,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:31:21',
                'updated_at' => '2022-10-10 14:38:20',
            ),
            12 => 
            array (
                'id' => 28,
                'barang' => 101,
                'qty' => 50,
                'pengembalian_qty' => 50,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 9,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:31:21',
                'updated_at' => '2022-10-10 14:38:20',
            ),
            13 => 
            array (
                'id' => 29,
                'barang' => 22,
                'qty' => 50,
                'pengembalian_qty' => 50,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 9,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:31:21',
                'updated_at' => '2022-10-10 14:38:20',
            ),
            14 => 
            array (
                'id' => 30,
                'barang' => 29,
                'qty' => 50,
                'pengembalian_qty' => 50,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 9,
                'updated_by' => 6,
                'created_by' => 1,
                'created_at' => '2022-10-10 14:31:21',
                'updated_at' => '2022-10-10 14:38:20',
            ),
            15 => 
            array (
                'id' => 31,
                'barang' => 1,
                'qty' => 10,
                'pengembalian_qty' => 4,
                'pengembalian_hilang' => 1,
                'pengembalian_rusak' => 5,
                'surat_jalan' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-16 23:38:33',
            ),
            16 => 
            array (
                'id' => 32,
                'barang' => 5,
                'qty' => 10,
                'pengembalian_qty' => 7,
                'pengembalian_hilang' => 1,
                'pengembalian_rusak' => 2,
                'surat_jalan' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-16 23:38:33',
            ),
            17 => 
            array (
                'id' => 33,
                'barang' => 4,
                'qty' => 10,
                'pengembalian_qty' => 9,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 1,
                'surat_jalan' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-16 23:38:33',
            ),
            18 => 
            array (
                'id' => 34,
                'barang' => 100,
                'qty' => 10,
                'pengembalian_qty' => 9,
                'pengembalian_hilang' => 1,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-16 23:38:33',
            ),
            19 => 
            array (
                'id' => 35,
                'barang' => 113,
                'qty' => 10,
                'pengembalian_qty' => 9,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 1,
                'surat_jalan' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-16 23:38:33',
            ),
            20 => 
            array (
                'id' => 36,
                'barang' => 13,
                'qty' => 10,
                'pengembalian_qty' => 10,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-15 21:09:02',
                'updated_at' => '2022-10-16 18:53:46',
            ),
            21 => 
            array (
                'id' => 37,
                'barang' => 2,
                'qty' => 100,
                'pengembalian_qty' => 95,
                'pengembalian_hilang' => 3,
                'pengembalian_rusak' => 2,
                'surat_jalan' => 11,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:25:21',
                'updated_at' => '2022-10-18 22:50:38',
            ),
            22 => 
            array (
                'id' => 38,
                'barang' => 4,
                'qty' => 10,
                'pengembalian_qty' => 4,
                'pengembalian_hilang' => 3,
                'pengembalian_rusak' => 3,
                'surat_jalan' => 11,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:25:21',
                'updated_at' => '2022-10-18 22:50:38',
            ),
            23 => 
            array (
                'id' => 39,
                'barang' => 7,
                'qty' => 12,
                'pengembalian_qty' => 11,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 1,
                'surat_jalan' => 11,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:25:21',
                'updated_at' => '2022-10-18 22:50:38',
            ),
            24 => 
            array (
                'id' => 40,
                'barang' => 8,
                'qty' => 31,
                'pengembalian_qty' => 30,
                'pengembalian_hilang' => 1,
                'pengembalian_rusak' => 0,
                'surat_jalan' => 11,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:25:21',
                'updated_at' => '2022-10-18 22:50:38',
            ),
            25 => 
            array (
                'id' => 41,
                'barang' => 2,
                'qty' => 5,
                'pengembalian_qty' => 2,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 3,
                'surat_jalan' => 12,
                'updated_by' => 6,
                'created_by' => 5,
                'created_at' => '2022-10-22 10:48:11',
                'updated_at' => '2022-10-22 11:26:55',
            ),
            26 => 
            array (
                'id' => 42,
                'barang' => 4,
                'qty' => 10,
                'pengembalian_qty' => 5,
                'pengembalian_hilang' => 0,
                'pengembalian_rusak' => 5,
                'surat_jalan' => 12,
                'updated_by' => 6,
                'created_by' => 5,
                'created_at' => '2022-10-22 10:48:11',
                'updated_at' => '2022-10-22 11:26:55',
            ),
        ));
        
        
    }
}