<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiRugiBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ganti_rugi_barang')->delete();
        
        \DB::table('ganti_rugi_barang')->insert(array (
            0 => 
            array (
                'id' => '1',
                'ganti_rugi_id' => '1',
                'barang' => '5',
                'no_surat' => 'GRB/00002',
                'tanggal' => '2023-09-12',
                'oleh' => 'Handip Yusuf Kurniawan',
                'qty' => '2',
                'keterangan' => 'Ganti rugi',
                'status' => '1',
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 10:05:35',
                'updated_at' => '2023-09-12 10:05:35',
            ),
        ));
        
        
    }
}