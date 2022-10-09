<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangPenguranganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_pengurangan')->delete();
        
        \DB::table('barang_pengurangan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Testing',
                'keterangan' => 'Testing wkwk',
                'tanggal' => '2022-09-24 16:19:00',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-09-24 16:20:00',
                'updated_at' => '2022-09-24 16:20:00',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00003',
                'keterangan' => 'Tanggal 2022-10-08, Di Althaf Subhan Lokasi Gedung Serba guna Widyatama.',
                'tanggal' => '2022-10-07 00:00:00',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:10:42',
                'updated_at' => '2022-10-10 00:10:42',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Barang Hilang Saat Penyewaan Dengan Surat Jalan Nomor SJ/00002',
                'keterangan' => 'Tanggal 2022-10-13, Di Bpk. Ir. Faisal Lokasi Jl. Supratman no 54 gedung b',
                'tanggal' => '2022-10-12 00:00:00',
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-10 00:11:24',
                'updated_at' => '2022-10-10 00:11:24',
            ),
        ));
        
        
    }
}