<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => 345,
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-09 13:47:23',
            ),
            1 => 
            array (
                'id' => 361,
                'parent_id' => NULL,
                'title' => 'Menu Management',
                'icon' => 'fas fa-stream',
                'route' => 'admin.menu.admin',
                'sequence' => 30,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            2 => 
            array (
                'id' => 367,
                'parent_id' => NULL,
                'title' => 'Akses Pengguna',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => 27,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            3 => 
            array (
                'id' => 368,
                'parent_id' => 367,
                'title' => 'Perizinan',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => 28,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            4 => 
            array (
                'id' => 369,
                'parent_id' => 367,
                'title' => 'Jabatan',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => 29,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            5 => 
            array (
                'id' => 373,
                'parent_id' => NULL,
                'title' => 'Ganti Password',
                'icon' => 'fas fa-key',
                'route' => 'pegawai.password',
                'sequence' => 36,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-10-17 00:18:40',
            ),
            6 => 
            array (
                'id' => 386,
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => 37,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2022-10-17 00:18:40',
            ),
            7 => 
            array (
                'id' => 397,
                'parent_id' => NULL,
                'title' => 'Pengaturan Admin',
                'icon' => 'fas fa-wrench',
                'route' => 'admin.setting.admin',
                'sequence' => 31,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:10:57',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            8 => 
            array (
                'id' => 404,
                'parent_id' => 403,
                'title' => 'Anggota',
                'icon' => NULL,
                'route' => 'admin.lapooran.anggota',
                'sequence' => 41,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-18 18:55:08',
                'updated_at' => '2022-08-20 14:04:25',
            ),
            9 => 
            array (
                'id' => 413,
                'parent_id' => NULL,
                'title' => 'Data Master',
                'icon' => 'fas fa-database',
                'route' => NULL,
                'sequence' => 32,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 19:56:03',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            10 => 
            array (
                'id' => 415,
                'parent_id' => 413,
                'title' => 'Jenis Barang',
                'icon' => NULL,
                'route' => 'admin.data_master.jenis',
                'sequence' => 33,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 19:57:43',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            11 => 
            array (
                'id' => 416,
                'parent_id' => 413,
                'title' => 'Satuan Barang',
                'icon' => NULL,
                'route' => 'admin.data_master.satuan',
                'sequence' => 34,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 19:58:01',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            12 => 
            array (
                'id' => 417,
                'parent_id' => 413,
                'title' => 'Jabatan Pegawai',
                'icon' => NULL,
                'route' => 'admin.data_master.jabatan',
                'sequence' => 35,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:03:05',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            13 => 
            array (
                'id' => 418,
                'parent_id' => NULL,
                'title' => 'Barang Sewa',
                'icon' => 'fas fa-box',
                'route' => 'admin.barang.sewa',
                'sequence' => 17,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:17:27',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            14 => 
            array (
                'id' => 419,
                'parent_id' => NULL,
                'title' => 'Barang Habis Pakai',
                'icon' => 'fas fa-toolbox',
                'route' => 'admin.barang.habis_pakai',
                'sequence' => 18,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:19:13',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            15 => 
            array (
                'id' => 420,
                'parent_id' => NULL,
                'title' => 'Laporan',
                'icon' => 'fas fa-file-alt',
                'route' => NULL,
                'sequence' => 9,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:20:43',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            16 => 
            array (
                'id' => 421,
                'parent_id' => 420,
                'title' => 'Penyewaan',
                'icon' => NULL,
                'route' => 'admin.laporan.penyewaan',
                'sequence' => 10,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            17 => 
            array (
                'id' => 422,
                'parent_id' => 420,
                'title' => 'Pengembalian barang',
                'icon' => NULL,
                'route' => 'admin.laporan.pengembalian',
                'sequence' => 12,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:22:19',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            18 => 
            array (
                'id' => 423,
                'parent_id' => 420,
                'title' => 'Pengambilan barang',
                'icon' => NULL,
                'route' => 'admin.laporan.pengambilan',
                'sequence' => 11,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            19 => 
            array (
                'id' => 425,
                'parent_id' => 420,
                'title' => 'Ganti Rugi',
                'icon' => NULL,
                'route' => 'admin.laporan.ganti_rugi',
                'sequence' => 13,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            20 => 
            array (
                'id' => 427,
                'parent_id' => NULL,
                'title' => 'Karyawan',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.karyawan',
                'sequence' => 26,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-22 20:51:04',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            21 => 
            array (
                'id' => 428,
                'parent_id' => NULL,
                'title' => 'Customer',
                'icon' => 'far fa-id-badge',
                'route' => 'admin.customer',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-22 22:47:27',
                'updated_at' => '2022-10-03 08:12:43',
            ),
            22 => 
            array (
                'id' => 429,
                'parent_id' => NULL,
                'title' => 'Pengadaan Barang',
                'icon' => 'fas fa-truck',
                'route' => NULL,
                'sequence' => 19,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            23 => 
            array (
                'id' => 430,
                'parent_id' => NULL,
                'title' => 'Pengurangan Barang',
                'icon' => 'fas fa-people-carry',
                'route' => NULL,
                'sequence' => 22,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            24 => 
            array (
                'id' => 431,
                'parent_id' => 429,
                'title' => 'Barang Sewa',
                'icon' => NULL,
                'route' => 'admin.barang.pengadaan.sewa',
                'sequence' => 20,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-23 00:12:16',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            25 => 
            array (
                'id' => 432,
                'parent_id' => 429,
                'title' => 'Barang Habis Pakai',
                'icon' => NULL,
                'route' => 'admin.barang.pengadaan.habis_pakai',
                'sequence' => 21,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-23 00:13:05',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            26 => 
            array (
                'id' => 433,
                'parent_id' => 430,
                'title' => 'Barang Sewa',
                'icon' => NULL,
                'route' => 'admin.barang.pengurangan.sewa',
                'sequence' => 23,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-23 00:14:48',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            27 => 
            array (
                'id' => 434,
                'parent_id' => 430,
                'title' => 'Barang Habis Pakai',
                'icon' => NULL,
                'route' => 'admin.barang.pengurangan.habis_pakai',
                'sequence' => 24,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-23 00:21:11',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            28 => 
            array (
                'id' => 435,
                'parent_id' => NULL,
                'title' => 'Penyewaan',
                'icon' => 'fas fa-box-open',
                'route' => 'admin.penyewaan',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-25 10:06:57',
                'updated_at' => '2022-10-03 08:12:43',
            ),
            29 => 
            array (
                'id' => 436,
                'parent_id' => NULL,
                'title' => 'Pembayaran',
                'icon' => 'fas fa-dollar-sign',
                'route' => 'admin.pembayaran',
                'sequence' => 5,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-10-01 12:50:57',
                'updated_at' => '2022-10-03 08:12:43',
            ),
            30 => 
            array (
                'id' => 437,
                'parent_id' => NULL,
                'title' => 'Pengambilan Barang',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'admin.pengambilan',
                'sequence' => 6,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-10-02 14:04:55',
                'updated_at' => '2022-10-03 08:12:43',
            ),
            31 => 
            array (
                'id' => 438,
                'parent_id' => NULL,
                'title' => 'Pengembalian Barang',
                'icon' => 'fas fa-sign-in-alt',
                'route' => 'admin.pengembalian',
                'sequence' => 7,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-10-02 14:09:12',
                'updated_at' => '2022-10-03 08:12:43',
            ),
            32 => 
            array (
                'id' => 439,
                'parent_id' => NULL,
                'title' => 'Menu Penyewaan',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 2,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-10-03 08:07:56',
                'updated_at' => '2022-10-03 08:12:43',
            ),
            33 => 
            array (
                'id' => 440,
                'parent_id' => NULL,
                'title' => 'Menu Data Barang',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 16,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-10-03 08:09:26',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            34 => 
            array (
                'id' => 441,
                'parent_id' => NULL,
                'title' => 'Menu Lain',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 25,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-11-05 01:39:34',
            ),
            35 => 
            array (
                'id' => 442,
                'parent_id' => NULL,
                'title' => 'Ganti Rugi',
                'icon' => 'fas fa-sync',
                'route' => 'admin.ganti_rugi',
                'sequence' => 8,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:39:08',
            ),
        ));
        
        
    }
}