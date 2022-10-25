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
                'id' => 1,
                'ganti_rugi_id' => 2,
                'barang' => 2,
                'no_surat' => 1,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'qty' => 5,
                'keterangan' => NULL,
                'status' => 0,
                'pembatalan_alasan' => 'Diganti dengan uang',
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:12:08',
                'updated_at' => '2022-10-22 04:57:04',
            ),
            1 => 
            array (
                'id' => 2,
                'ganti_rugi_id' => 2,
                'barang' => 4,
                'no_surat' => 2,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'qty' => 6,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:12:20',
                'updated_at' => '2022-10-22 02:12:20',
            ),
            2 => 
            array (
                'id' => 3,
                'ganti_rugi_id' => 2,
                'barang' => 7,
                'no_surat' => 3,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'qty' => 1,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:12:26',
                'updated_at' => '2022-10-22 02:12:26',
            ),
            3 => 
            array (
                'id' => 4,
                'ganti_rugi_id' => 2,
                'barang' => 8,
                'no_surat' => 4,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'qty' => 1,
                'keterangan' => NULL,
                'status' => 0,
                'pembatalan_alasan' => 'Mau dibayar dengan uang',
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-22 02:12:33',
                'updated_at' => '2022-10-22 05:08:39',
            ),
            4 => 
            array (
                'id' => 5,
                'ganti_rugi_id' => 2,
                'barang' => 2,
                'no_surat' => 5,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'qty' => 3,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 05:13:30',
                'updated_at' => '2022-10-22 05:13:30',
            ),
            5 => 
            array (
                'id' => 6,
                'ganti_rugi_id' => 2,
                'barang' => 2,
                'no_surat' => 6,
                'tanggal' => '2022-10-22',
                'oleh' => 'Dr Baru',
                'qty' => 1,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 05:14:16',
                'updated_at' => '2022-10-22 05:14:16',
            ),
            6 => 
            array (
                'id' => 7,
                'ganti_rugi_id' => 1,
                'barang' => 1,
                'no_surat' => 7,
                'tanggal' => '2022-10-22',
                'oleh' => 'Handip Yusuf Kurniawan',
                'qty' => 6,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:15:47',
                'updated_at' => '2022-10-22 06:15:47',
            ),
            7 => 
            array (
                'id' => 8,
                'ganti_rugi_id' => 1,
                'barang' => 5,
                'no_surat' => 8,
                'tanggal' => '2022-10-22',
                'oleh' => 'Handip Yusuf Kurniawan',
                'qty' => 3,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:15:52',
                'updated_at' => '2022-10-22 06:15:52',
            ),
            8 => 
            array (
                'id' => 9,
                'ganti_rugi_id' => 1,
                'barang' => 4,
                'no_surat' => 9,
                'tanggal' => '2022-10-22',
                'oleh' => 'Handip Yusuf Kurniawan',
                'qty' => 1,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:15:56',
                'updated_at' => '2022-10-22 06:15:56',
            ),
            9 => 
            array (
                'id' => 10,
                'ganti_rugi_id' => 1,
                'barang' => 100,
                'no_surat' => 10,
                'tanggal' => '2022-10-22',
                'oleh' => 'Handip Yusuf Kurniawan',
                'qty' => 1,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:16:00',
                'updated_at' => '2022-10-22 06:16:00',
            ),
            10 => 
            array (
                'id' => 11,
                'ganti_rugi_id' => 1,
                'barang' => 113,
                'no_surat' => 11,
                'tanggal' => '2022-10-22',
                'oleh' => 'Handip Yusuf Kurniawan',
                'qty' => 1,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-22 06:16:05',
                'updated_at' => '2022-10-22 06:16:05',
            ),
            11 => 
            array (
                'id' => 12,
                'ganti_rugi_id' => 3,
                'barang' => 2,
                'no_surat' => 12,
                'tanggal' => '2022-10-22',
                'oleh' => 'Daniel Nugraha',
                'qty' => 3,
                'keterangan' => NULL,
                'status' => 0,
                'pembatalan_alasan' => 'Diganti uang',
                'updated_by' => 5,
                'created_by' => 5,
                'created_at' => '2022-10-22 13:21:19',
                'updated_at' => '2022-10-22 13:23:01',
            ),
            12 => 
            array (
                'id' => 13,
                'ganti_rugi_id' => 4,
                'barang' => 1,
                'no_surat' => 13,
                'tanggal' => '2022-10-26',
                'oleh' => 'Customer 15',
                'qty' => 5,
                'keterangan' => NULL,
                'status' => 1,
                'pembatalan_alasan' => NULL,
                'updated_by' => NULL,
                'created_by' => 1,
                'created_at' => '2022-10-26 00:22:29',
                'updated_at' => '2022-10-26 00:22:29',
            ),
        ));
        
        
    }
}