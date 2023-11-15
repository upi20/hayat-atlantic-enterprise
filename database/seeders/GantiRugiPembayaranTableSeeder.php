<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GantiRugiPembayaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ganti_rugi_pembayaran')->delete();
        
        \DB::table('ganti_rugi_pembayaran')->insert(array (
            0 => 
            array (
                'id' => '1',
                'ganti_rugi_id' => '1',
                'nama' => 'Ganti Rugi Cover Kursi Susun',
                'no_surat' => 'GRU/00002',
                'tanggal' => '2023-09-12',
                'oleh' => 'Handip Yusuf Kurniawan',
                'keterangan' => NULL,
                'nominal' => '5000',
                'pembayaran_sebelumnya' => '0',
                'dibayar' => '5000',
                'sisa' => '0',
                'status' => '1',
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2023-09-12 10:07:35',
                'updated_at' => '2023-09-12 10:07:35',
            ),
        ));
        
        
    }
}