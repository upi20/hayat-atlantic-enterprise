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
                'id' => 1,
                'ganti_rugi_id' => 1,
                'nama' => 'DP',
                'no_surat' => 1,
                'tanggal' => '2022-10-18',
                'oleh' => 'Handip Yusuf Kurniawan',
                'keterangan' => NULL,
                'nominal' => 100000,
                'pembayaran_sebelumnya' => 0,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:12:55',
                'updated_at' => '2022-10-18 22:12:55',
            ),
        ));
        
        
    }
}