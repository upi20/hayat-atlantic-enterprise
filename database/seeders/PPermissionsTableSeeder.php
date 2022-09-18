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
        ));
        
        
    }
}