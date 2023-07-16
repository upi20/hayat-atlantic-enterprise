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
                'id' => '1',
                'barang' => '1',
                'qty' => '5',
                'pengembalian_qty' => '5',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '1',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-29 20:25:55',
                'updated_at' => '2022-12-19 14:15:47',
            ),
            1 => 
            array (
                'id' => '2',
                'barang' => '5',
                'qty' => '6',
                'pengembalian_qty' => '6',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '1',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-29 20:25:55',
                'updated_at' => '2022-12-19 14:15:47',
            ),
            2 => 
            array (
                'id' => '3',
                'barang' => '5',
                'qty' => '20',
                'pengembalian_qty' => '19',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '1',
                'surat_jalan' => '2',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-29 21:59:27',
                'updated_at' => '2022-12-19 14:28:12',
            ),
            3 => 
            array (
                'id' => '4',
                'barang' => '6',
                'qty' => '20',
                'pengembalian_qty' => '19',
                'pengembalian_hilang' => '1',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '2',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-29 21:59:27',
                'updated_at' => '2022-12-19 14:28:12',
            ),
            4 => 
            array (
                'id' => '5',
                'barang' => '2',
                'qty' => '1',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '3',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2023-07-16 12:18:07',
                'updated_at' => '2023-07-16 12:38:22',
            ),
            5 => 
            array (
                'id' => '6',
                'barang' => '4',
                'qty' => '1',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '3',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2023-07-16 12:18:07',
                'updated_at' => '2023-07-16 12:38:22',
            ),
        ));
        
        
    }
}