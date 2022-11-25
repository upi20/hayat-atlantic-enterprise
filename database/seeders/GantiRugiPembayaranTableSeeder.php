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
                'nama' => 'Ganti Rugi Lunas',
                'no_surat' => 'GRU/00002',
                'tanggal' => '2022-11-19',
                'oleh' => 'Bpk. Faisal',
                'keterangan' => 'Di transfer lewat bank bri',
                'nominal' => '1125000',
                'pembayaran_sebelumnya' => '0',
                'dibayar' => '1125000',
                'sisa' => '0',
                'status' => '1',
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-11-19 09:56:49',
                'updated_at' => '2022-11-19 09:56:49',
            ),
        ));
        
        
    }
}