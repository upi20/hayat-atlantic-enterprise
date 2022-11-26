<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_permissions')->delete();
        
        \DB::table('p_permissions')->insert(array (
            0 => 
            array (
                'id' => 97,
                'name' => 'admin.user_access.permission',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            1 => 
            array (
                'id' => 99,
                'name' => 'admin.user_access.permission.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-07 15:43:41',
            ),
            2 => 
            array (
                'id' => 100,
                'name' => 'admin.user_access.permission.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            3 => 
            array (
                'id' => 101,
                'name' => 'admin.user_access.permission.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            4 => 
            array (
                'id' => 102,
                'name' => 'admin.user_access.role',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            5 => 
            array (
                'id' => 103,
                'name' => 'admin.user_access.role.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-07 15:37:35',
            ),
            6 => 
            array (
                'id' => 107,
                'name' => 'admin.user_access.role.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            7 => 
            array (
                'id' => 108,
                'name' => 'admin.user_access.role.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            8 => 
            array (
                'id' => 109,
                'name' => 'member.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            9 => 
            array (
                'id' => 137,
                'name' => 'admin.menu.admin',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 00:27:17',
                'updated_at' => '2022-08-20 14:13:15',
            ),
            10 => 
            array (
                'id' => 139,
                'name' => 'admin.menu.admin.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 19:03:54',
                'updated_at' => '2022-08-20 14:13:37',
            ),
            11 => 
            array (
                'id' => 140,
                'name' => 'admin.menu.admin.save',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 21:03:40',
                'updated_at' => '2022-08-20 14:13:32',
            ),
            12 => 
            array (
                'id' => 141,
                'name' => 'admin.menu.admin.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 21:03:46',
                'updated_at' => '2022-08-20 14:13:26',
            ),
            13 => 
            array (
                'id' => 143,
                'name' => 'admin.menu.admin.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 23:07:03',
                'updated_at' => '2022-08-20 14:13:21',
            ),
            14 => 
            array (
                'id' => 168,
                'name' => 'admin.data_master.jenis',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 169,
                'name' => 'admin.data_master.jenis.insert',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 170,
                'name' => 'admin.data_master.jenis.delete',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 172,
                'name' => 'admin.data_master.jenis.update',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 173,
                'name' => 'admin.data_master.satuan',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 174,
                'name' => 'admin.data_master.satuan.insert',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 175,
                'name' => 'admin.data_master.satuan.delete',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 177,
                'name' => 'admin.data_master.satuan.update',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 178,
                'name' => 'admin.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 20:07:44',
                'updated_at' => '2022-09-18 20:07:44',
            ),
            23 => 
            array (
                'id' => 179,
                'name' => 'admin.data_master.jabatan',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:38',
                'updated_at' => '2022-09-18 21:04:38',
            ),
            24 => 
            array (
                'id' => 180,
                'name' => 'admin.data_master.jabatan.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:46',
                'updated_at' => '2022-09-18 21:04:46',
            ),
            25 => 
            array (
                'id' => 181,
                'name' => 'admin.data_master.jabatan.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:51',
                'updated_at' => '2022-09-18 21:04:51',
            ),
            26 => 
            array (
                'id' => 182,
                'name' => 'admin.data_master.jabatan.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:56',
                'updated_at' => '2022-09-18 21:04:56',
            ),
            27 => 
            array (
                'id' => 183,
                'name' => 'admin.barang.sewa',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:53:59',
                'updated_at' => '2022-09-18 22:53:59',
            ),
            28 => 
            array (
                'id' => 184,
                'name' => 'admin.barang.sewa.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:27',
                'updated_at' => '2022-09-18 22:54:27',
            ),
            29 => 
            array (
                'id' => 185,
                'name' => 'admin.barang.sewa.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:32',
                'updated_at' => '2022-09-18 22:54:32',
            ),
            30 => 
            array (
                'id' => 186,
                'name' => 'admin.barang.sewa.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:36',
                'updated_at' => '2022-09-18 22:54:36',
            ),
            31 => 
            array (
                'id' => 187,
                'name' => 'admin.barang.habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:49',
                'updated_at' => '2022-09-18 22:54:49',
            ),
            32 => 
            array (
                'id' => 188,
                'name' => 'admin.barang.habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:54',
                'updated_at' => '2022-09-18 22:54:54',
            ),
            33 => 
            array (
                'id' => 189,
                'name' => 'admin.barang.habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:59',
                'updated_at' => '2022-09-18 22:54:59',
            ),
            34 => 
            array (
                'id' => 190,
                'name' => 'admin.barang.habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:55:04',
                'updated_at' => '2022-09-18 22:55:04',
            ),
            35 => 
            array (
                'id' => 191,
                'name' => 'admin.karyawan',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:25',
                'updated_at' => '2022-09-22 22:27:25',
            ),
            36 => 
            array (
                'id' => 192,
                'name' => 'admin.karyawan.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:48',
                'updated_at' => '2022-09-22 22:27:48',
            ),
            37 => 
            array (
                'id' => 193,
                'name' => 'admin.karyawan.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:53',
                'updated_at' => '2022-09-22 22:27:53',
            ),
            38 => 
            array (
                'id' => 194,
                'name' => 'admin.karyawan.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:58',
                'updated_at' => '2022-09-22 22:27:58',
            ),
            39 => 
            array (
                'id' => 195,
                'name' => 'admin.customer',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:25',
                'updated_at' => '2022-09-22 22:59:25',
            ),
            40 => 
            array (
                'id' => 196,
                'name' => 'admin.customer.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:30',
                'updated_at' => '2022-09-22 22:59:30',
            ),
            41 => 
            array (
                'id' => 197,
                'name' => 'admin.customer.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:36',
                'updated_at' => '2022-09-22 22:59:36',
            ),
            42 => 
            array (
                'id' => 198,
                'name' => 'admin.customer.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:41',
                'updated_at' => '2022-09-22 22:59:41',
            ),
            43 => 
            array (
                'id' => 199,
                'name' => 'admin.barang.pengadaan.sewa',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:11:33',
                'updated_at' => '2022-09-24 18:11:33',
            ),
            44 => 
            array (
                'id' => 200,
                'name' => 'admin.barang.pengadaan.sewa.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:11:40',
                'updated_at' => '2022-09-24 18:11:40',
            ),
            45 => 
            array (
                'id' => 201,
                'name' => 'admin.barang.pengadaan.sewa.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:00',
                'updated_at' => '2022-09-24 18:12:00',
            ),
            46 => 
            array (
                'id' => 202,
                'name' => 'admin.barang.pengadaan.sewa.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:19',
                'updated_at' => '2022-09-24 18:12:19',
            ),
            47 => 
            array (
                'id' => 203,
                'name' => 'admin.barang.pengadaan.sewa.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:24',
                'updated_at' => '2022-09-24 18:12:24',
            ),
            48 => 
            array (
                'id' => 204,
                'name' => 'admin.barang.pengadaan.sewa.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:33',
                'updated_at' => '2022-09-24 18:12:33',
            ),
            49 => 
            array (
                'id' => 205,
                'name' => 'admin.barang.pengadaan.sewa.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:38',
                'updated_at' => '2022-09-24 18:12:38',
            ),
            50 => 
            array (
                'id' => 206,
                'name' => 'admin.barang.pengadaan.sewa.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:43',
                'updated_at' => '2022-09-24 18:12:43',
            ),
            51 => 
            array (
                'id' => 207,
                'name' => 'admin.barang.pengadaan.habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:55',
                'updated_at' => '2022-09-24 18:12:55',
            ),
            52 => 
            array (
                'id' => 208,
                'name' => 'admin.barang.pengadaan.habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:01',
                'updated_at' => '2022-09-24 18:13:01',
            ),
            53 => 
            array (
                'id' => 209,
                'name' => 'admin.barang.pengadaan.habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:06',
                'updated_at' => '2022-09-24 18:13:06',
            ),
            54 => 
            array (
                'id' => 210,
                'name' => 'admin.barang.pengadaan.habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:11',
                'updated_at' => '2022-09-24 18:13:11',
            ),
            55 => 
            array (
                'id' => 211,
                'name' => 'admin.barang.pengadaan.habis_pakai.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:17',
                'updated_at' => '2022-09-24 18:13:17',
            ),
            56 => 
            array (
                'id' => 212,
                'name' => 'admin.barang.pengadaan.habis_pakai.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:22',
                'updated_at' => '2022-09-24 18:13:22',
            ),
            57 => 
            array (
                'id' => 213,
                'name' => 'admin.barang.pengadaan.habis_pakai.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:27',
                'updated_at' => '2022-09-24 18:13:27',
            ),
            58 => 
            array (
                'id' => 214,
                'name' => 'admin.barang.pengadaan.habis_pakai.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:32',
                'updated_at' => '2022-09-24 18:13:32',
            ),
            59 => 
            array (
                'id' => 215,
                'name' => 'admin.barang.pengurangan.habis_pakai.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:07',
                'updated_at' => '2022-09-24 18:14:07',
            ),
            60 => 
            array (
                'id' => 216,
                'name' => 'admin.barang.pengurangan.habis_pakai.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:23',
                'updated_at' => '2022-09-24 18:14:23',
            ),
            61 => 
            array (
                'id' => 217,
                'name' => 'admin.barang.pengurangan.habis_pakai.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:28',
                'updated_at' => '2022-09-24 18:14:28',
            ),
            62 => 
            array (
                'id' => 218,
                'name' => 'admin.barang.pengurangan.habis_pakai.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:33',
                'updated_at' => '2022-09-24 18:14:33',
            ),
            63 => 
            array (
                'id' => 219,
                'name' => 'admin.barang.pengurangan.habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:39',
                'updated_at' => '2022-09-24 18:14:39',
            ),
            64 => 
            array (
                'id' => 220,
                'name' => 'admin.barang.pengurangan.habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:46',
                'updated_at' => '2022-09-24 18:14:46',
            ),
            65 => 
            array (
                'id' => 221,
                'name' => 'admin.barang.pengurangan.habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:50',
                'updated_at' => '2022-09-24 18:14:50',
            ),
            66 => 
            array (
                'id' => 222,
                'name' => 'admin.barang.pengurangan.habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:55',
                'updated_at' => '2022-09-24 18:14:55',
            ),
            67 => 
            array (
                'id' => 223,
                'name' => 'admin.barang.pengurangan.sewa',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:04',
                'updated_at' => '2022-09-24 18:15:04',
            ),
            68 => 
            array (
                'id' => 224,
                'name' => 'admin.barang.pengurangan.sewa.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:09',
                'updated_at' => '2022-09-24 18:15:09',
            ),
            69 => 
            array (
                'id' => 225,
                'name' => 'admin.barang.pengurangan.sewa.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:14',
                'updated_at' => '2022-09-24 18:15:14',
            ),
            70 => 
            array (
                'id' => 226,
                'name' => 'admin.barang.pengurangan.sewa.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:19',
                'updated_at' => '2022-09-24 18:15:19',
            ),
            71 => 
            array (
                'id' => 227,
                'name' => 'admin.barang.pengurangan.sewa.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:29',
                'updated_at' => '2022-09-24 18:15:29',
            ),
            72 => 
            array (
                'id' => 228,
                'name' => 'admin.barang.pengurangan.sewa.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:34',
                'updated_at' => '2022-09-24 18:15:34',
            ),
            73 => 
            array (
                'id' => 229,
                'name' => 'admin.barang.pengurangan.sewa.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:39',
                'updated_at' => '2022-09-24 18:15:39',
            ),
            74 => 
            array (
                'id' => 230,
                'name' => 'admin.barang.pengurangan.sewa.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:43',
                'updated_at' => '2022-09-24 18:15:43',
            ),
            75 => 
            array (
                'id' => 231,
                'name' => 'admin.penyewaan',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            76 => 
            array (
                'id' => 232,
                'name' => 'admin.penyewaan.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            77 => 
            array (
                'id' => 233,
                'name' => 'admin.penyewaan.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            78 => 
            array (
                'id' => 234,
                'name' => 'admin.penyewaan.reciving_order',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            79 => 
            array (
                'id' => 235,
                'name' => 'admin.penyewaan.reciving_order.barang',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            80 => 
            array (
                'id' => 236,
                'name' => 'admin.penyewaan.reciving_order.barang.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            81 => 
            array (
                'id' => 237,
                'name' => 'admin.penyewaan.reciving_order.barang.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            82 => 
            array (
                'id' => 238,
                'name' => 'admin.penyewaan.reciving_order.barang.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            83 => 
            array (
                'id' => 239,
                'name' => 'admin.pembayaran',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            84 => 
            array (
                'id' => 241,
                'name' => 'admin.pembayaran.simpan_status',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-10-10 12:20:50',
            ),
            85 => 
            array (
                'id' => 242,
                'name' => 'admin.pembayaran.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            86 => 
            array (
                'id' => 244,
                'name' => 'admin.pembayaran.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            87 => 
            array (
                'id' => 245,
                'name' => 'admin.penyewaan.selesai',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 11:21:14',
                'updated_at' => '2022-10-10 11:21:14',
            ),
            88 => 
            array (
                'id' => 246,
                'name' => 'admin.penyewaan.reciving_order.save',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 11:39:29',
                'updated_at' => '2022-10-10 11:39:29',
            ),
            89 => 
            array (
                'id' => 248,
                'name' => 'admin.pembayaran.delete',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:17:34',
                'updated_at' => '2022-10-10 12:17:34',
            ),
            90 => 
            array (
                'id' => 249,
                'name' => 'admin.pengambilan',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:57:19',
                'updated_at' => '2022-10-10 12:57:19',
            ),
            91 => 
            array (
                'id' => 250,
                'name' => 'admin.pengambilan.save',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:57:24',
                'updated_at' => '2022-10-10 12:57:24',
            ),
            92 => 
            array (
                'id' => 251,
                'name' => 'admin.pengambilan.konfirmasi',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:57:36',
                'updated_at' => '2022-10-10 12:57:36',
            ),
            93 => 
            array (
                'id' => 252,
                'name' => 'admin.pengembalian',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 13:09:44',
                'updated_at' => '2022-10-10 13:09:44',
            ),
            94 => 
            array (
                'id' => 253,
                'name' => 'admin.pengembalian.konfirmasi',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 13:09:56',
                'updated_at' => '2022-10-10 13:09:56',
            ),
            95 => 
            array (
                'id' => 254,
                'name' => 'admin.pengembalian.save',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 13:10:04',
                'updated_at' => '2022-10-10 13:10:04',
            ),
            96 => 
            array (
                'id' => 255,
                'name' => 'admin.pengembalian.barang_habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:16:58',
                'updated_at' => '2022-10-22 11:16:58',
            ),
            97 => 
            array (
                'id' => 256,
                'name' => 'admin.pengembalian.barang_habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:17:03',
                'updated_at' => '2022-10-22 11:17:03',
            ),
            98 => 
            array (
                'id' => 257,
                'name' => 'admin.pengembalian.barang_habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:17:08',
                'updated_at' => '2022-10-22 11:17:08',
            ),
            99 => 
            array (
                'id' => 258,
                'name' => 'admin.pengembalian.barang_habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:17:13',
                'updated_at' => '2022-10-22 11:17:13',
            ),
            100 => 
            array (
                'id' => 259,
                'name' => 'admin.ganti_rugi',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:29',
                'updated_at' => '2022-10-22 13:18:29',
            ),
            101 => 
            array (
                'id' => 260,
                'name' => 'admin.ganti_rugi.simpan_status',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:38',
                'updated_at' => '2022-10-22 13:18:38',
            ),
            102 => 
            array (
                'id' => 261,
                'name' => 'admin.ganti_rugi.barang',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:46',
                'updated_at' => '2022-10-22 13:18:46',
            ),
            103 => 
            array (
                'id' => 262,
                'name' => 'admin.ganti_rugi.barang.insert',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:53',
                'updated_at' => '2022-10-22 13:18:53',
            ),
            104 => 
            array (
                'id' => 263,
                'name' => 'admin.ganti_rugi.barang.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:19:02',
                'updated_at' => '2022-10-22 13:19:02',
            ),
            105 => 
            array (
                'id' => 264,
                'name' => 'admin.ganti_rugi.uang',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:21:38',
                'updated_at' => '2022-10-22 13:21:38',
            ),
            106 => 
            array (
                'id' => 265,
                'name' => 'admin.ganti_rugi.uang.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:21:43',
                'updated_at' => '2022-10-22 13:21:43',
            ),
            107 => 
            array (
                'id' => 266,
                'name' => 'admin.ganti_rugi.uang.insert',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:21:49',
                'updated_at' => '2022-10-22 13:21:49',
            ),
            108 => 
            array (
                'id' => 267,
                'name' => 'admin.setting.admin',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 14:26:38',
                'updated_at' => '2022-10-22 14:26:38',
            ),
            109 => 
            array (
                'id' => 268,
                'name' => 'admin.laporan.penyewaan.cetak_laporan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:40:32',
                'updated_at' => '2022-11-07 23:40:32',
            ),
            110 => 
            array (
                'id' => 269,
                'name' => 'admin.laporan.penyewaan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:40:47',
                'updated_at' => '2022-11-07 23:40:47',
            ),
            111 => 
            array (
                'id' => 270,
                'name' => 'admin.laporan.pengambilan.cetak_laporan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:02',
                'updated_at' => '2022-11-07 23:41:02',
            ),
            112 => 
            array (
                'id' => 271,
                'name' => 'admin.laporan.pengambilan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:06',
                'updated_at' => '2022-11-07 23:41:06',
            ),
            113 => 
            array (
                'id' => 272,
                'name' => 'admin.laporan.pengembalian.cetak_laporan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:17',
                'updated_at' => '2022-11-07 23:41:17',
            ),
            114 => 
            array (
                'id' => 273,
                'name' => 'admin.laporan.pengembalian',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:22',
                'updated_at' => '2022-11-07 23:41:22',
            ),
            115 => 
            array (
                'id' => 274,
                'name' => 'admin.laporan.ganti_rugi.cetak_laporan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:30',
                'updated_at' => '2022-11-07 23:41:30',
            ),
            116 => 
            array (
                'id' => 275,
                'name' => 'admin.laporan.ganti_rugi',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:34',
                'updated_at' => '2022-11-07 23:41:34',
            ),
            117 => 
            array (
                'id' => 276,
                'name' => 'admin.laporan.pembayaran.cetak_laporan',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:41:47',
                'updated_at' => '2022-11-07 23:42:06',
            ),
            118 => 
            array (
                'id' => 277,
                'name' => 'admin.laporan.pembayaran',
                'guard_name' => 'web',
                'created_at' => '2022-11-07 23:42:24',
                'updated_at' => '2022-11-07 23:42:24',
            ),
        ));
        
        
    }
}