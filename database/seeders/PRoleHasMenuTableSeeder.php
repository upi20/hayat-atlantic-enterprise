<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 3,
                'role_id' => 5,
                'menu_id' => 413,
                'created_at' => '2022-09-18 19:56:03',
                'updated_at' => '2022-09-18 19:56:03',
            ),
            1 => 
            array (
                'id' => 5,
                'role_id' => 5,
                'menu_id' => 415,
                'created_at' => '2022-09-18 19:57:43',
                'updated_at' => '2022-09-18 19:57:43',
            ),
            2 => 
            array (
                'id' => 6,
                'role_id' => 5,
                'menu_id' => 416,
                'created_at' => '2022-09-18 19:58:01',
                'updated_at' => '2022-09-18 19:58:01',
            ),
            3 => 
            array (
                'id' => 17,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            4 => 
            array (
                'id' => 18,
                'role_id' => 2,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            5 => 
            array (
                'id' => 19,
                'role_id' => 3,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            6 => 
            array (
                'id' => 20,
                'role_id' => 4,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            7 => 
            array (
                'id' => 21,
                'role_id' => 5,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            8 => 
            array (
                'id' => 22,
                'role_id' => 6,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            9 => 
            array (
                'id' => 23,
                'role_id' => 7,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            10 => 
            array (
                'id' => 24,
                'role_id' => 8,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            11 => 
            array (
                'id' => 25,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            12 => 
            array (
                'id' => 26,
                'role_id' => 10,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            13 => 
            array (
                'id' => 27,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            14 => 
            array (
                'id' => 28,
                'role_id' => 2,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            15 => 
            array (
                'id' => 29,
                'role_id' => 3,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            16 => 
            array (
                'id' => 30,
                'role_id' => 4,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            17 => 
            array (
                'id' => 31,
                'role_id' => 5,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            18 => 
            array (
                'id' => 32,
                'role_id' => 7,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            19 => 
            array (
                'id' => 33,
                'role_id' => 8,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            20 => 
            array (
                'id' => 34,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            21 => 
            array (
                'id' => 35,
                'role_id' => 10,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            22 => 
            array (
                'id' => 36,
                'role_id' => 5,
                'menu_id' => 417,
                'created_at' => '2022-09-18 21:03:05',
                'updated_at' => '2022-09-18 21:03:05',
            ),
            23 => 
            array (
                'id' => 92,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            24 => 
            array (
                'id' => 93,
                'role_id' => 2,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            25 => 
            array (
                'id' => 94,
                'role_id' => 3,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            26 => 
            array (
                'id' => 95,
                'role_id' => 4,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            27 => 
            array (
                'id' => 96,
                'role_id' => 5,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            28 => 
            array (
                'id' => 97,
                'role_id' => 6,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            29 => 
            array (
                'id' => 98,
                'role_id' => 7,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            30 => 
            array (
                'id' => 99,
                'role_id' => 8,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            31 => 
            array (
                'id' => 100,
                'role_id' => 9,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            32 => 
            array (
                'id' => 101,
                'role_id' => 10,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            33 => 
            array (
                'id' => 102,
                'role_id' => 2,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            34 => 
            array (
                'id' => 103,
                'role_id' => 3,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            35 => 
            array (
                'id' => 104,
                'role_id' => 4,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            36 => 
            array (
                'id' => 105,
                'role_id' => 5,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            37 => 
            array (
                'id' => 106,
                'role_id' => 6,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            38 => 
            array (
                'id' => 107,
                'role_id' => 7,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            39 => 
            array (
                'id' => 108,
                'role_id' => 8,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            40 => 
            array (
                'id' => 109,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            41 => 
            array (
                'id' => 110,
                'role_id' => 10,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            42 => 
            array (
                'id' => 116,
                'role_id' => 2,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            43 => 
            array (
                'id' => 117,
                'role_id' => 4,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            44 => 
            array (
                'id' => 118,
                'role_id' => 5,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            45 => 
            array (
                'id' => 119,
                'role_id' => 6,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            46 => 
            array (
                'id' => 120,
                'role_id' => 7,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            47 => 
            array (
                'id' => 124,
                'role_id' => 2,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            48 => 
            array (
                'id' => 125,
                'role_id' => 3,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            49 => 
            array (
                'id' => 126,
                'role_id' => 5,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            50 => 
            array (
                'id' => 127,
                'role_id' => 2,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            51 => 
            array (
                'id' => 128,
                'role_id' => 3,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            52 => 
            array (
                'id' => 129,
                'role_id' => 5,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            53 => 
            array (
                'id' => 130,
                'role_id' => 6,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            54 => 
            array (
                'id' => 131,
                'role_id' => 7,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            55 => 
            array (
                'id' => 132,
                'role_id' => 8,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            56 => 
            array (
                'id' => 133,
                'role_id' => 2,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            57 => 
            array (
                'id' => 134,
                'role_id' => 3,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            58 => 
            array (
                'id' => 135,
                'role_id' => 4,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            59 => 
            array (
                'id' => 136,
                'role_id' => 5,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            60 => 
            array (
                'id' => 137,
                'role_id' => 6,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            61 => 
            array (
                'id' => 138,
                'role_id' => 7,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            62 => 
            array (
                'id' => 139,
                'role_id' => 8,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            63 => 
            array (
                'id' => 140,
                'role_id' => 9,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            64 => 
            array (
                'id' => 181,
                'role_id' => 2,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            65 => 
            array (
                'id' => 182,
                'role_id' => 3,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            66 => 
            array (
                'id' => 183,
                'role_id' => 4,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            67 => 
            array (
                'id' => 184,
                'role_id' => 5,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            68 => 
            array (
                'id' => 185,
                'role_id' => 6,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            69 => 
            array (
                'id' => 186,
                'role_id' => 7,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            70 => 
            array (
                'id' => 187,
                'role_id' => 8,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            71 => 
            array (
                'id' => 188,
                'role_id' => 2,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            72 => 
            array (
                'id' => 189,
                'role_id' => 3,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            73 => 
            array (
                'id' => 190,
                'role_id' => 4,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            74 => 
            array (
                'id' => 191,
                'role_id' => 5,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            75 => 
            array (
                'id' => 192,
                'role_id' => 6,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            76 => 
            array (
                'id' => 193,
                'role_id' => 7,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            77 => 
            array (
                'id' => 194,
                'role_id' => 8,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            78 => 
            array (
                'id' => 195,
                'role_id' => 2,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            79 => 
            array (
                'id' => 196,
                'role_id' => 3,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            80 => 
            array (
                'id' => 197,
                'role_id' => 5,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            81 => 
            array (
                'id' => 198,
                'role_id' => 6,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            82 => 
            array (
                'id' => 199,
                'role_id' => 7,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            83 => 
            array (
                'id' => 200,
                'role_id' => 8,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            84 => 
            array (
                'id' => 201,
                'role_id' => 2,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            85 => 
            array (
                'id' => 202,
                'role_id' => 3,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            86 => 
            array (
                'id' => 203,
                'role_id' => 5,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            87 => 
            array (
                'id' => 204,
                'role_id' => 6,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            88 => 
            array (
                'id' => 205,
                'role_id' => 7,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            89 => 
            array (
                'id' => 206,
                'role_id' => 8,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            90 => 
            array (
                'id' => 210,
                'role_id' => 3,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            91 => 
            array (
                'id' => 211,
                'role_id' => 4,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            92 => 
            array (
                'id' => 212,
                'role_id' => 5,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            93 => 
            array (
                'id' => 213,
                'role_id' => 6,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            94 => 
            array (
                'id' => 215,
                'role_id' => 5,
                'menu_id' => 436,
                'created_at' => '2022-10-01 12:50:57',
                'updated_at' => '2022-10-01 12:50:57',
            ),
            95 => 
            array (
                'id' => 220,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2022-10-03 08:05:27',
                'updated_at' => '2022-10-03 08:05:27',
            ),
            96 => 
            array (
                'id' => 221,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            97 => 
            array (
                'id' => 222,
                'role_id' => 5,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            98 => 
            array (
                'id' => 223,
                'role_id' => 1,
                'menu_id' => 439,
                'created_at' => '2022-10-03 08:07:56',
                'updated_at' => '2022-10-03 08:07:56',
            ),
            99 => 
            array (
                'id' => 224,
                'role_id' => 5,
                'menu_id' => 439,
                'created_at' => '2022-10-03 08:07:56',
                'updated_at' => '2022-10-03 08:07:56',
            ),
            100 => 
            array (
                'id' => 227,
                'role_id' => 1,
                'menu_id' => 440,
                'created_at' => '2022-10-03 08:10:12',
                'updated_at' => '2022-10-03 08:10:12',
            ),
            101 => 
            array (
                'id' => 228,
                'role_id' => 5,
                'menu_id' => 440,
                'created_at' => '2022-10-03 08:10:12',
                'updated_at' => '2022-10-03 08:10:12',
            ),
            102 => 
            array (
                'id' => 229,
                'role_id' => 1,
                'menu_id' => 441,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-10-03 08:11:55',
            ),
            103 => 
            array (
                'id' => 230,
                'role_id' => 5,
                'menu_id' => 441,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-10-03 08:11:55',
            ),
            104 => 
            array (
                'id' => 235,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2022-10-03 08:14:00',
                'updated_at' => '2022-10-03 08:14:00',
            ),
            105 => 
            array (
                'id' => 236,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2022-10-03 08:14:16',
                'updated_at' => '2022-10-03 08:14:16',
            ),
            106 => 
            array (
                'id' => 243,
                'role_id' => 5,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            107 => 
            array (
                'id' => 244,
                'role_id' => 7,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            108 => 
            array (
                'id' => 245,
                'role_id' => 8,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            109 => 
            array (
                'id' => 252,
                'role_id' => 1,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            110 => 
            array (
                'id' => 253,
                'role_id' => 3,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            111 => 
            array (
                'id' => 254,
                'role_id' => 5,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            112 => 
            array (
                'id' => 255,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2022-10-22 14:25:50',
                'updated_at' => '2022-10-22 14:25:50',
            ),
            113 => 
            array (
                'id' => 281,
                'role_id' => 5,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            114 => 
            array (
                'id' => 282,
                'role_id' => 6,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            115 => 
            array (
                'id' => 283,
                'role_id' => 7,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            116 => 
            array (
                'id' => 284,
                'role_id' => 8,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            117 => 
            array (
                'id' => 291,
                'role_id' => 2,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            118 => 
            array (
                'id' => 292,
                'role_id' => 3,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            119 => 
            array (
                'id' => 293,
                'role_id' => 5,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            120 => 
            array (
                'id' => 294,
                'role_id' => 6,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            121 => 
            array (
                'id' => 295,
                'role_id' => 7,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            122 => 
            array (
                'id' => 296,
                'role_id' => 8,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            123 => 
            array (
                'id' => 297,
                'role_id' => 2,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            124 => 
            array (
                'id' => 298,
                'role_id' => 5,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            125 => 
            array (
                'id' => 299,
                'role_id' => 6,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            126 => 
            array (
                'id' => 300,
                'role_id' => 7,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            127 => 
            array (
                'id' => 301,
                'role_id' => 8,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            128 => 
            array (
                'id' => 302,
                'role_id' => 3,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            129 => 
            array (
                'id' => 303,
                'role_id' => 5,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            130 => 
            array (
                'id' => 304,
                'role_id' => 6,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            131 => 
            array (
                'id' => 305,
                'role_id' => 7,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            132 => 
            array (
                'id' => 306,
                'role_id' => 8,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            133 => 
            array (
                'id' => 307,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            134 => 
            array (
                'id' => 317,
                'role_id' => 2,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            135 => 
            array (
                'id' => 318,
                'role_id' => 3,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            136 => 
            array (
                'id' => 319,
                'role_id' => 4,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            137 => 
            array (
                'id' => 320,
                'role_id' => 5,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            138 => 
            array (
                'id' => 321,
                'role_id' => 6,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            139 => 
            array (
                'id' => 322,
                'role_id' => 7,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            140 => 
            array (
                'id' => 323,
                'role_id' => 8,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            141 => 
            array (
                'id' => 324,
                'role_id' => 9,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            142 => 
            array (
                'id' => 325,
                'role_id' => 10,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            143 => 
            array (
                'id' => 326,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            144 => 
            array (
                'id' => 327,
                'role_id' => 2,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            145 => 
            array (
                'id' => 328,
                'role_id' => 3,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            146 => 
            array (
                'id' => 329,
                'role_id' => 4,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            147 => 
            array (
                'id' => 330,
                'role_id' => 5,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            148 => 
            array (
                'id' => 331,
                'role_id' => 6,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            149 => 
            array (
                'id' => 332,
                'role_id' => 7,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            150 => 
            array (
                'id' => 333,
                'role_id' => 8,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            151 => 
            array (
                'id' => 334,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            152 => 
            array (
                'id' => 335,
                'role_id' => 10,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            153 => 
            array (
                'id' => 336,
                'role_id' => 5,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            154 => 
            array (
                'id' => 337,
                'role_id' => 7,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            155 => 
            array (
                'id' => 338,
                'role_id' => 8,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            156 => 
            array (
                'id' => 339,
                'role_id' => 5,
                'menu_id' => 438,
                'created_at' => '2023-08-17 00:45:02',
                'updated_at' => '2023-08-17 00:45:02',
            ),
            157 => 
            array (
                'id' => 340,
                'role_id' => 7,
                'menu_id' => 438,
                'created_at' => '2023-08-17 00:45:02',
                'updated_at' => '2023-08-17 00:45:02',
            ),
            158 => 
            array (
                'id' => 341,
                'role_id' => 8,
                'menu_id' => 438,
                'created_at' => '2023-08-17 00:45:02',
                'updated_at' => '2023-08-17 00:45:02',
            ),
        ));
        
        
    }
}