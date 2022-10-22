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
                'id' => 27,
                'name' => 'admin.artikel.data',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            1 => 
            array (
                'id' => 30,
                'name' => 'admin.artikel.data.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            2 => 
            array (
                'id' => 31,
                'name' => 'admin.artikel.data.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            3 => 
            array (
                'id' => 32,
                'name' => 'admin.artikel.data.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            4 => 
            array (
                'id' => 33,
                'name' => 'admin.artikel.kategori',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            5 => 
            array (
                'id' => 35,
                'name' => 'admin.artikel.kategori.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            6 => 
            array (
                'id' => 36,
                'name' => 'admin.artikel.kategori.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            7 => 
            array (
                'id' => 37,
                'name' => 'admin.artikel.kategori.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            8 => 
            array (
                'id' => 38,
                'name' => 'admin.artikel.tag',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            9 => 
            array (
                'id' => 40,
                'name' => 'admin.artikel.tag.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            10 => 
            array (
                'id' => 41,
                'name' => 'admin.artikel.tag.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            11 => 
            array (
                'id' => 42,
                'name' => 'admin.artikel.tag.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            12 => 
            array (
                'id' => 61,
                'name' => 'admin.galeri',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            13 => 
            array (
                'id' => 63,
                'name' => 'admin.galeri.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            14 => 
            array (
                'id' => 64,
                'name' => 'admin.galeri.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            15 => 
            array (
                'id' => 65,
                'name' => 'admin.galeri.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            16 => 
            array (
                'id' => 66,
                'name' => 'admin.social_media',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            17 => 
            array (
                'id' => 67,
                'name' => 'admin.social_media.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            18 => 
            array (
                'id' => 68,
                'name' => 'admin.social_media.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            19 => 
            array (
                'id' => 69,
                'name' => 'admin.social_media.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            20 => 
            array (
                'id' => 70,
                'name' => 'admin.contact',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            21 => 
            array (
                'id' => 71,
                'name' => 'admin.contact.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            22 => 
            array (
                'id' => 72,
                'name' => 'admin.contact.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            23 => 
            array (
                'id' => 73,
                'name' => 'admin.contact.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            24 => 
            array (
                'id' => 74,
                'name' => 'admin.footer_instagram',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:43',
                'updated_at' => '2022-08-04 16:05:43',
            ),
            25 => 
            array (
                'id' => 97,
                'name' => 'admin.user_access.permission',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            26 => 
            array (
                'id' => 99,
                'name' => 'admin.user_access.permission.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-07 15:43:41',
            ),
            27 => 
            array (
                'id' => 100,
                'name' => 'admin.user_access.permission.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            28 => 
            array (
                'id' => 101,
                'name' => 'admin.user_access.permission.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            29 => 
            array (
                'id' => 102,
                'name' => 'admin.user_access.role',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            30 => 
            array (
                'id' => 103,
                'name' => 'admin.user_access.role.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-07 15:37:35',
            ),
            31 => 
            array (
                'id' => 107,
                'name' => 'admin.user_access.role.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            32 => 
            array (
                'id' => 108,
                'name' => 'admin.user_access.role.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            33 => 
            array (
                'id' => 109,
                'name' => 'member.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            34 => 
            array (
                'id' => 110,
                'name' => 'member.profile',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:44',
                'updated_at' => '2022-08-04 16:05:44',
            ),
            35 => 
            array (
                'id' => 135,
                'name' => 'member.password',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:45',
                'updated_at' => '2022-08-04 16:05:45',
            ),
            36 => 
            array (
                'id' => 136,
                'name' => 'member.password.save',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:45',
                'updated_at' => '2022-08-04 16:05:45',
            ),
            37 => 
            array (
                'id' => 137,
                'name' => 'admin.menu.admin',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 00:27:17',
                'updated_at' => '2022-08-20 14:13:15',
            ),
            38 => 
            array (
                'id' => 139,
                'name' => 'admin.menu.admin.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 19:03:54',
                'updated_at' => '2022-08-20 14:13:37',
            ),
            39 => 
            array (
                'id' => 140,
                'name' => 'admin.menu.admin.save',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 21:03:40',
                'updated_at' => '2022-08-20 14:13:32',
            ),
            40 => 
            array (
                'id' => 141,
                'name' => 'admin.menu.admin.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 21:03:46',
                'updated_at' => '2022-08-20 14:13:26',
            ),
            41 => 
            array (
                'id' => 143,
                'name' => 'admin.menu.admin.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-05 23:07:03',
                'updated_at' => '2022-08-20 14:13:21',
            ),
            42 => 
            array (
                'id' => 145,
                'name' => 'admin.profile.save_another',
                'guard_name' => 'web',
                'created_at' => '2022-08-06 14:48:58',
                'updated_at' => '2022-08-06 14:48:58',
            ),
            43 => 
            array (
                'id' => 146,
                'name' => 'admin.pengurus.periode.set_role',
                'guard_name' => 'web',
                'created_at' => '2022-08-08 21:06:58',
                'updated_at' => '2022-08-08 21:06:58',
            ),
            44 => 
            array (
                'id' => 147,
                'name' => 'admin.pendaftaran.gform',
                'guard_name' => 'web',
                'created_at' => '2022-08-08 21:07:44',
                'updated_at' => '2022-08-08 21:07:44',
            ),
            45 => 
            array (
                'id' => 148,
                'name' => 'admin.pendaftaran.gform.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-08 21:08:04',
                'updated_at' => '2022-08-08 21:08:04',
            ),
            46 => 
            array (
                'id' => 149,
                'name' => 'admin.pendaftaran.gform.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-08 21:08:12',
                'updated_at' => '2022-08-08 21:08:12',
            ),
            47 => 
            array (
                'id' => 150,
                'name' => 'admin.pendaftaran.gform.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-08 21:08:18',
                'updated_at' => '2022-08-08 21:08:18',
            ),
            48 => 
            array (
                'id' => 151,
                'name' => 'admin.kata_alumni',
                'guard_name' => 'web',
                'created_at' => '2022-08-09 15:19:19',
                'updated_at' => '2022-08-09 15:19:19',
            ),
            49 => 
            array (
                'id' => 152,
                'name' => 'admin.kata_alumni.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-09 15:19:25',
                'updated_at' => '2022-08-09 15:19:25',
            ),
            50 => 
            array (
                'id' => 153,
                'name' => 'admin.kata_alumni.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-09 15:19:30',
                'updated_at' => '2022-08-09 15:19:30',
            ),
            51 => 
            array (
                'id' => 154,
                'name' => 'admin.kata_alumni.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-09 15:19:35',
                'updated_at' => '2022-08-09 15:19:35',
            ),
            52 => 
            array (
                'id' => 155,
                'name' => 'member.kata_alumni',
                'guard_name' => 'web',
                'created_at' => '2022-08-09 15:22:56',
                'updated_at' => '2022-08-09 15:22:56',
            ),
            53 => 
            array (
                'id' => 156,
                'name' => 'admin.kontak.faq',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            54 => 
            array (
                'id' => 157,
                'name' => 'admin.kontak.faq.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            55 => 
            array (
                'id' => 158,
                'name' => 'admin.kontak.faq.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            56 => 
            array (
                'id' => 159,
                'name' => 'admin.kontak.faq.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            57 => 
            array (
                'id' => 160,
                'name' => 'admin.kontak.faq.setting',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            58 => 
            array (
                'id' => 161,
                'name' => 'admin.kontak.list',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            59 => 
            array (
                'id' => 162,
                'name' => 'admin.kontak.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            60 => 
            array (
                'id' => 163,
                'name' => 'admin.kontak.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            61 => 
            array (
                'id' => 164,
                'name' => 'admin.kontak.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            62 => 
            array (
                'id' => 165,
                'name' => 'admin.kontak.list.setting',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            63 => 
            array (
                'id' => 166,
                'name' => 'admin.kontak.message',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            64 => 
            array (
                'id' => 167,
                'name' => 'admin.kontak.message.setting',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-04 16:05:41',
            ),
            65 => 
            array (
                'id' => 168,
                'name' => 'admin.data_master.jenis',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 169,
                'name' => 'admin.data_master.jenis.insert',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 170,
                'name' => 'admin.data_master.jenis.delete',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 172,
                'name' => 'admin.data_master.jenis.update',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 173,
                'name' => 'admin.data_master.satuan',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 174,
                'name' => 'admin.data_master.satuan.insert',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 175,
                'name' => 'admin.data_master.satuan.delete',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 177,
                'name' => 'admin.data_master.satuan.update',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 178,
                'name' => 'admin.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 20:07:44',
                'updated_at' => '2022-09-18 20:07:44',
            ),
            74 => 
            array (
                'id' => 179,
                'name' => 'admin.data_master.jabatan',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:38',
                'updated_at' => '2022-09-18 21:04:38',
            ),
            75 => 
            array (
                'id' => 180,
                'name' => 'admin.data_master.jabatan.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:46',
                'updated_at' => '2022-09-18 21:04:46',
            ),
            76 => 
            array (
                'id' => 181,
                'name' => 'admin.data_master.jabatan.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:51',
                'updated_at' => '2022-09-18 21:04:51',
            ),
            77 => 
            array (
                'id' => 182,
                'name' => 'admin.data_master.jabatan.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 21:04:56',
                'updated_at' => '2022-09-18 21:04:56',
            ),
            78 => 
            array (
                'id' => 183,
                'name' => 'admin.barang.sewa',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:53:59',
                'updated_at' => '2022-09-18 22:53:59',
            ),
            79 => 
            array (
                'id' => 184,
                'name' => 'admin.barang.sewa.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:27',
                'updated_at' => '2022-09-18 22:54:27',
            ),
            80 => 
            array (
                'id' => 185,
                'name' => 'admin.barang.sewa.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:32',
                'updated_at' => '2022-09-18 22:54:32',
            ),
            81 => 
            array (
                'id' => 186,
                'name' => 'admin.barang.sewa.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:36',
                'updated_at' => '2022-09-18 22:54:36',
            ),
            82 => 
            array (
                'id' => 187,
                'name' => 'admin.barang.habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:49',
                'updated_at' => '2022-09-18 22:54:49',
            ),
            83 => 
            array (
                'id' => 188,
                'name' => 'admin.barang.habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:54',
                'updated_at' => '2022-09-18 22:54:54',
            ),
            84 => 
            array (
                'id' => 189,
                'name' => 'admin.barang.habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:54:59',
                'updated_at' => '2022-09-18 22:54:59',
            ),
            85 => 
            array (
                'id' => 190,
                'name' => 'admin.barang.habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-18 22:55:04',
                'updated_at' => '2022-09-18 22:55:04',
            ),
            86 => 
            array (
                'id' => 191,
                'name' => 'admin.karyawan',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:25',
                'updated_at' => '2022-09-22 22:27:25',
            ),
            87 => 
            array (
                'id' => 192,
                'name' => 'admin.karyawan.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:48',
                'updated_at' => '2022-09-22 22:27:48',
            ),
            88 => 
            array (
                'id' => 193,
                'name' => 'admin.karyawan.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:53',
                'updated_at' => '2022-09-22 22:27:53',
            ),
            89 => 
            array (
                'id' => 194,
                'name' => 'admin.karyawan.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:27:58',
                'updated_at' => '2022-09-22 22:27:58',
            ),
            90 => 
            array (
                'id' => 195,
                'name' => 'admin.customer',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:25',
                'updated_at' => '2022-09-22 22:59:25',
            ),
            91 => 
            array (
                'id' => 196,
                'name' => 'admin.customer.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:30',
                'updated_at' => '2022-09-22 22:59:30',
            ),
            92 => 
            array (
                'id' => 197,
                'name' => 'admin.customer.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:36',
                'updated_at' => '2022-09-22 22:59:36',
            ),
            93 => 
            array (
                'id' => 198,
                'name' => 'admin.customer.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-22 22:59:41',
                'updated_at' => '2022-09-22 22:59:41',
            ),
            94 => 
            array (
                'id' => 199,
                'name' => 'admin.barang.pengadaan.sewa',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:11:33',
                'updated_at' => '2022-09-24 18:11:33',
            ),
            95 => 
            array (
                'id' => 200,
                'name' => 'admin.barang.pengadaan.sewa.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:11:40',
                'updated_at' => '2022-09-24 18:11:40',
            ),
            96 => 
            array (
                'id' => 201,
                'name' => 'admin.barang.pengadaan.sewa.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:00',
                'updated_at' => '2022-09-24 18:12:00',
            ),
            97 => 
            array (
                'id' => 202,
                'name' => 'admin.barang.pengadaan.sewa.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:19',
                'updated_at' => '2022-09-24 18:12:19',
            ),
            98 => 
            array (
                'id' => 203,
                'name' => 'admin.barang.pengadaan.sewa.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:24',
                'updated_at' => '2022-09-24 18:12:24',
            ),
            99 => 
            array (
                'id' => 204,
                'name' => 'admin.barang.pengadaan.sewa.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:33',
                'updated_at' => '2022-09-24 18:12:33',
            ),
            100 => 
            array (
                'id' => 205,
                'name' => 'admin.barang.pengadaan.sewa.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:38',
                'updated_at' => '2022-09-24 18:12:38',
            ),
            101 => 
            array (
                'id' => 206,
                'name' => 'admin.barang.pengadaan.sewa.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:43',
                'updated_at' => '2022-09-24 18:12:43',
            ),
            102 => 
            array (
                'id' => 207,
                'name' => 'admin.barang.pengadaan.habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:12:55',
                'updated_at' => '2022-09-24 18:12:55',
            ),
            103 => 
            array (
                'id' => 208,
                'name' => 'admin.barang.pengadaan.habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:01',
                'updated_at' => '2022-09-24 18:13:01',
            ),
            104 => 
            array (
                'id' => 209,
                'name' => 'admin.barang.pengadaan.habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:06',
                'updated_at' => '2022-09-24 18:13:06',
            ),
            105 => 
            array (
                'id' => 210,
                'name' => 'admin.barang.pengadaan.habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:11',
                'updated_at' => '2022-09-24 18:13:11',
            ),
            106 => 
            array (
                'id' => 211,
                'name' => 'admin.barang.pengadaan.habis_pakai.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:17',
                'updated_at' => '2022-09-24 18:13:17',
            ),
            107 => 
            array (
                'id' => 212,
                'name' => 'admin.barang.pengadaan.habis_pakai.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:22',
                'updated_at' => '2022-09-24 18:13:22',
            ),
            108 => 
            array (
                'id' => 213,
                'name' => 'admin.barang.pengadaan.habis_pakai.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:27',
                'updated_at' => '2022-09-24 18:13:27',
            ),
            109 => 
            array (
                'id' => 214,
                'name' => 'admin.barang.pengadaan.habis_pakai.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:13:32',
                'updated_at' => '2022-09-24 18:13:32',
            ),
            110 => 
            array (
                'id' => 215,
                'name' => 'admin.barang.pengurangan.habis_pakai.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:07',
                'updated_at' => '2022-09-24 18:14:07',
            ),
            111 => 
            array (
                'id' => 216,
                'name' => 'admin.barang.pengurangan.habis_pakai.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:23',
                'updated_at' => '2022-09-24 18:14:23',
            ),
            112 => 
            array (
                'id' => 217,
                'name' => 'admin.barang.pengurangan.habis_pakai.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:28',
                'updated_at' => '2022-09-24 18:14:28',
            ),
            113 => 
            array (
                'id' => 218,
                'name' => 'admin.barang.pengurangan.habis_pakai.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:33',
                'updated_at' => '2022-09-24 18:14:33',
            ),
            114 => 
            array (
                'id' => 219,
                'name' => 'admin.barang.pengurangan.habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:39',
                'updated_at' => '2022-09-24 18:14:39',
            ),
            115 => 
            array (
                'id' => 220,
                'name' => 'admin.barang.pengurangan.habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:46',
                'updated_at' => '2022-09-24 18:14:46',
            ),
            116 => 
            array (
                'id' => 221,
                'name' => 'admin.barang.pengurangan.habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:50',
                'updated_at' => '2022-09-24 18:14:50',
            ),
            117 => 
            array (
                'id' => 222,
                'name' => 'admin.barang.pengurangan.habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:14:55',
                'updated_at' => '2022-09-24 18:14:55',
            ),
            118 => 
            array (
                'id' => 223,
                'name' => 'admin.barang.pengurangan.sewa',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:04',
                'updated_at' => '2022-09-24 18:15:04',
            ),
            119 => 
            array (
                'id' => 224,
                'name' => 'admin.barang.pengurangan.sewa.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:09',
                'updated_at' => '2022-09-24 18:15:09',
            ),
            120 => 
            array (
                'id' => 225,
                'name' => 'admin.barang.pengurangan.sewa.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:14',
                'updated_at' => '2022-09-24 18:15:14',
            ),
            121 => 
            array (
                'id' => 226,
                'name' => 'admin.barang.pengurangan.sewa.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:19',
                'updated_at' => '2022-09-24 18:15:19',
            ),
            122 => 
            array (
                'id' => 227,
                'name' => 'admin.barang.pengurangan.sewa.list',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:29',
                'updated_at' => '2022-09-24 18:15:29',
            ),
            123 => 
            array (
                'id' => 228,
                'name' => 'admin.barang.pengurangan.sewa.list.insert',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:34',
                'updated_at' => '2022-09-24 18:15:34',
            ),
            124 => 
            array (
                'id' => 229,
                'name' => 'admin.barang.pengurangan.sewa.list.update',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:39',
                'updated_at' => '2022-09-24 18:15:39',
            ),
            125 => 
            array (
                'id' => 230,
                'name' => 'admin.barang.pengurangan.sewa.list.delete',
                'guard_name' => 'web',
                'created_at' => '2022-09-24 18:15:43',
                'updated_at' => '2022-09-24 18:15:43',
            ),
            126 => 
            array (
                'id' => 231,
                'name' => 'admin.penyewaan',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            127 => 
            array (
                'id' => 232,
                'name' => 'admin.penyewaan.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            128 => 
            array (
                'id' => 233,
                'name' => 'admin.penyewaan.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            129 => 
            array (
                'id' => 234,
                'name' => 'admin.penyewaan.reciving_order',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            130 => 
            array (
                'id' => 235,
                'name' => 'admin.penyewaan.reciving_order.barang',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            131 => 
            array (
                'id' => 236,
                'name' => 'admin.penyewaan.reciving_order.barang.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            132 => 
            array (
                'id' => 237,
                'name' => 'admin.penyewaan.reciving_order.barang.update',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            133 => 
            array (
                'id' => 238,
                'name' => 'admin.penyewaan.reciving_order.barang.delete',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            134 => 
            array (
                'id' => 239,
                'name' => 'admin.pembayaran',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            135 => 
            array (
                'id' => 241,
                'name' => 'admin.pembayaran.simpan_status',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-10-10 12:20:50',
            ),
            136 => 
            array (
                'id' => 242,
                'name' => 'admin.pembayaran.insert',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            137 => 
            array (
                'id' => 244,
                'name' => 'admin.pembayaran.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:42',
                'updated_at' => '2022-08-04 16:05:42',
            ),
            138 => 
            array (
                'id' => 245,
                'name' => 'admin.penyewaan.selesai',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 11:21:14',
                'updated_at' => '2022-10-10 11:21:14',
            ),
            139 => 
            array (
                'id' => 246,
                'name' => 'admin.penyewaan.reciving_order.save',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 11:39:29',
                'updated_at' => '2022-10-10 11:39:29',
            ),
            140 => 
            array (
                'id' => 248,
                'name' => 'admin.pembayaran.delete',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:17:34',
                'updated_at' => '2022-10-10 12:17:34',
            ),
            141 => 
            array (
                'id' => 249,
                'name' => 'admin.pengambilan',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:57:19',
                'updated_at' => '2022-10-10 12:57:19',
            ),
            142 => 
            array (
                'id' => 250,
                'name' => 'admin.pengambilan.save',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:57:24',
                'updated_at' => '2022-10-10 12:57:24',
            ),
            143 => 
            array (
                'id' => 251,
                'name' => 'admin.pengambilan.konfirmasi',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 12:57:36',
                'updated_at' => '2022-10-10 12:57:36',
            ),
            144 => 
            array (
                'id' => 252,
                'name' => 'admin.pengembalian',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 13:09:44',
                'updated_at' => '2022-10-10 13:09:44',
            ),
            145 => 
            array (
                'id' => 253,
                'name' => 'admin.pengembalian.konfirmasi',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 13:09:56',
                'updated_at' => '2022-10-10 13:09:56',
            ),
            146 => 
            array (
                'id' => 254,
                'name' => 'admin.pengembalian.save',
                'guard_name' => 'web',
                'created_at' => '2022-10-10 13:10:04',
                'updated_at' => '2022-10-10 13:10:04',
            ),
            147 => 
            array (
                'id' => 255,
                'name' => 'admin.pengembalian.barang_habis_pakai',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:16:58',
                'updated_at' => '2022-10-22 11:16:58',
            ),
            148 => 
            array (
                'id' => 256,
                'name' => 'admin.pengembalian.barang_habis_pakai.insert',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:17:03',
                'updated_at' => '2022-10-22 11:17:03',
            ),
            149 => 
            array (
                'id' => 257,
                'name' => 'admin.pengembalian.barang_habis_pakai.update',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:17:08',
                'updated_at' => '2022-10-22 11:17:08',
            ),
            150 => 
            array (
                'id' => 258,
                'name' => 'admin.pengembalian.barang_habis_pakai.delete',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 11:17:13',
                'updated_at' => '2022-10-22 11:17:13',
            ),
            151 => 
            array (
                'id' => 259,
                'name' => 'admin.ganti_rugi',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:29',
                'updated_at' => '2022-10-22 13:18:29',
            ),
            152 => 
            array (
                'id' => 260,
                'name' => 'admin.ganti_rugi.simpan_status',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:38',
                'updated_at' => '2022-10-22 13:18:38',
            ),
            153 => 
            array (
                'id' => 261,
                'name' => 'admin.ganti_rugi.barang',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:46',
                'updated_at' => '2022-10-22 13:18:46',
            ),
            154 => 
            array (
                'id' => 262,
                'name' => 'admin.ganti_rugi.barang.insert',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:18:53',
                'updated_at' => '2022-10-22 13:18:53',
            ),
            155 => 
            array (
                'id' => 263,
                'name' => 'admin.ganti_rugi.barang.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:19:02',
                'updated_at' => '2022-10-22 13:19:02',
            ),
            156 => 
            array (
                'id' => 264,
                'name' => 'admin.ganti_rugi.uang',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:21:38',
                'updated_at' => '2022-10-22 13:21:38',
            ),
            157 => 
            array (
                'id' => 265,
                'name' => 'admin.ganti_rugi.uang.batalkan',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:21:43',
                'updated_at' => '2022-10-22 13:21:43',
            ),
            158 => 
            array (
                'id' => 266,
                'name' => 'admin.ganti_rugi.uang.insert',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 13:21:49',
                'updated_at' => '2022-10-22 13:21:49',
            ),
            159 => 
            array (
                'id' => 267,
                'name' => 'admin.setting.admin',
                'guard_name' => 'web',
                'created_at' => '2022-10-22 14:26:38',
                'updated_at' => '2022-10-22 14:26:38',
            ),
        ));
        
        
    }
}