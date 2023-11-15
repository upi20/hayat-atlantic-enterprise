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
                'barang' => '4',
                'qty' => '20',
                'pengembalian_qty' => '20',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '1',
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2023-09-12 09:33:59',
                'updated_at' => '2023-09-12 09:52:21',
            ),
            1 => 
            array (
                'id' => '2',
                'barang' => '5',
                'qty' => '20',
                'pengembalian_qty' => '18',
                'pengembalian_hilang' => '2',
                'pengembalian_rusak' => '0',
                'surat_jalan' => '1',
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2023-09-12 09:33:59',
                'updated_at' => '2023-09-12 09:52:21',
            ),
            2 => 
            array (
                'id' => '3',
                'barang' => '6',
                'qty' => '1',
                'pengembalian_qty' => '0',
                'pengembalian_hilang' => '0',
                'pengembalian_rusak' => '1',
                'surat_jalan' => '1',
                'updated_by' => '6',
                'created_by' => '6',
                'created_at' => '2023-09-12 09:33:59',
                'updated_at' => '2023-09-12 09:52:21',
            ),
        ));
        
        
    }
}