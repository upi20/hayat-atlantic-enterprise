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
                'id' => '3',
                'barang' => '1',
                'qty' => '10',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '2',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-12 16:49:22',
                'updated_at' => '2022-11-12 16:50:03',
            ),
            1 => 
            array (
                'id' => '4',
                'barang' => '2',
                'qty' => '5',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '2',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-12 16:49:22',
                'updated_at' => '2022-11-12 16:50:03',
            ),
            2 => 
            array (
                'id' => '5',
                'barang' => '119',
                'qty' => '2',
                'pengembalian_qty' => '1',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '1',
                'surat_jalan' => '3',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-12 17:13:22',
                'updated_at' => '2022-11-12 17:20:39',
            ),
            3 => 
            array (
                'id' => '6',
                'barang' => '100',
                'qty' => '100',
                'pengembalian_qty' => '50',
                'pengembalian_hilang' => '50',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '3',
                'updated_by' => '6',
                'created_by' => '5',
                'created_at' => '2022-11-12 17:13:22',
                'updated_at' => '2022-11-12 17:20:39',
            ),
            4 => 
            array (
                'id' => '7',
                'barang' => '1',
                'qty' => '10',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '4',
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2022-11-19 09:53:24',
                'updated_at' => '2022-11-19 09:53:48',
            ),
            5 => 
            array (
                'id' => '8',
                'barang' => '2',
                'qty' => '10',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '4',
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2022-11-19 09:53:24',
                'updated_at' => '2022-11-19 09:53:48',
            ),
            6 => 
            array (
                'id' => '9',
                'barang' => '2',
                'qty' => '10',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '4',
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2022-11-19 09:53:24',
                'updated_at' => '2022-11-19 09:53:48',
            ),
        ));
        
        
    }
}