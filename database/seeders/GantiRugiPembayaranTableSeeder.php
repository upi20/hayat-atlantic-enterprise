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
                'status' => 0,
                'pembatalan_alasan' => 'Salah nominal',
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-18 22:12:55',
                'updated_at' => '2022-10-21 14:57:19',
            ),
            1 => 
            array (
                'id' => 2,
                'ganti_rugi_id' => 2,
                'nama' => 'Pelunasan',
                'no_surat' => 2,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'keterangan' => NULL,
                'nominal' => 17500,
                'pembayaran_sebelumnya' => 0,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 05:14:38',
                'updated_at' => '2022-10-22 05:14:38',
            ),
            2 => 
            array (
                'id' => 3,
                'ganti_rugi_id' => 3,
                'nama' => 'Pertama',
                'no_surat' => 3,
                'tanggal' => '2022-10-22',
                'oleh' => 'Daniel Nugraha',
                'keterangan' => NULL,
                'nominal' => 500000,
                'pembayaran_sebelumnya' => 0,
                'status' => 0,
                'pembatalan_alasan' => 'Uang kurang',
                'updated_by' => 5,
                'created_by' => 5,
                'created_at' => '2022-10-22 13:22:40',
                'updated_at' => '2022-10-22 13:23:22',
            ),
            3 => 
            array (
                'id' => 4,
                'ganti_rugi_id' => 4,
                'nama' => 'Pembayaran Ke 2',
                'no_surat' => 4,
                'tanggal' => '2022-10-26',
                'oleh' => 'Customer 15',
                'keterangan' => NULL,
                'nominal' => 50000,
                'pembayaran_sebelumnya' => 0,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:22:08',
                'updated_at' => '2022-10-26 00:22:08',
            ),
        ));
        
        
    }
}