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
                'id' => 36,
                'role_id' => 5,
                'menu_id' => 417,
                'created_at' => '2022-09-18 21:03:05',
                'updated_at' => '2022-09-18 21:03:05',
            ),
            14 => 
            array (
                'id' => 124,
                'role_id' => 2,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            15 => 
            array (
                'id' => 125,
                'role_id' => 3,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            16 => 
            array (
                'id' => 126,
                'role_id' => 5,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            17 => 
            array (
                'id' => 181,
                'role_id' => 2,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            18 => 
            array (
                'id' => 182,
                'role_id' => 3,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            19 => 
            array (
                'id' => 183,
                'role_id' => 4,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            20 => 
            array (
                'id' => 184,
                'role_id' => 5,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            21 => 
            array (
                'id' => 185,
                'role_id' => 6,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            22 => 
            array (
                'id' => 186,
                'role_id' => 7,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            23 => 
            array (
                'id' => 187,
                'role_id' => 8,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            24 => 
            array (
                'id' => 188,
                'role_id' => 2,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            25 => 
            array (
                'id' => 189,
                'role_id' => 3,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            26 => 
            array (
                'id' => 190,
                'role_id' => 4,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            27 => 
            array (
                'id' => 191,
                'role_id' => 5,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            28 => 
            array (
                'id' => 192,
                'role_id' => 6,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            29 => 
            array (
                'id' => 193,
                'role_id' => 7,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            30 => 
            array (
                'id' => 194,
                'role_id' => 8,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            31 => 
            array (
                'id' => 195,
                'role_id' => 2,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            32 => 
            array (
                'id' => 196,
                'role_id' => 3,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            33 => 
            array (
                'id' => 197,
                'role_id' => 5,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            34 => 
            array (
                'id' => 198,
                'role_id' => 6,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            35 => 
            array (
                'id' => 199,
                'role_id' => 7,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            36 => 
            array (
                'id' => 200,
                'role_id' => 8,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            37 => 
            array (
                'id' => 201,
                'role_id' => 2,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            38 => 
            array (
                'id' => 202,
                'role_id' => 3,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            39 => 
            array (
                'id' => 203,
                'role_id' => 5,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            40 => 
            array (
                'id' => 204,
                'role_id' => 6,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            41 => 
            array (
                'id' => 205,
                'role_id' => 7,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            42 => 
            array (
                'id' => 206,
                'role_id' => 8,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            43 => 
            array (
                'id' => 215,
                'role_id' => 5,
                'menu_id' => 436,
                'created_at' => '2022-10-01 12:50:57',
                'updated_at' => '2022-10-01 12:50:57',
            ),
            44 => 
            array (
                'id' => 220,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2022-10-03 08:05:27',
                'updated_at' => '2022-10-03 08:05:27',
            ),
            45 => 
            array (
                'id' => 221,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            46 => 
            array (
                'id' => 222,
                'role_id' => 5,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            47 => 
            array (
                'id' => 227,
                'role_id' => 1,
                'menu_id' => 440,
                'created_at' => '2022-10-03 08:10:12',
                'updated_at' => '2022-10-03 08:10:12',
            ),
            48 => 
            array (
                'id' => 228,
                'role_id' => 5,
                'menu_id' => 440,
                'created_at' => '2022-10-03 08:10:12',
                'updated_at' => '2022-10-03 08:10:12',
            ),
            49 => 
            array (
                'id' => 229,
                'role_id' => 1,
                'menu_id' => 441,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-10-03 08:11:55',
            ),
            50 => 
            array (
                'id' => 230,
                'role_id' => 5,
                'menu_id' => 441,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-10-03 08:11:55',
            ),
            51 => 
            array (
                'id' => 235,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2022-10-03 08:14:00',
                'updated_at' => '2022-10-03 08:14:00',
            ),
            52 => 
            array (
                'id' => 236,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2022-10-03 08:14:16',
                'updated_at' => '2022-10-03 08:14:16',
            ),
            53 => 
            array (
                'id' => 243,
                'role_id' => 5,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            54 => 
            array (
                'id' => 244,
                'role_id' => 7,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            55 => 
            array (
                'id' => 245,
                'role_id' => 8,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            56 => 
            array (
                'id' => 252,
                'role_id' => 1,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            57 => 
            array (
                'id' => 253,
                'role_id' => 3,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            58 => 
            array (
                'id' => 254,
                'role_id' => 5,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            59 => 
            array (
                'id' => 255,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2022-10-22 14:25:50',
                'updated_at' => '2022-10-22 14:25:50',
            ),
            60 => 
            array (
                'id' => 281,
                'role_id' => 5,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            61 => 
            array (
                'id' => 282,
                'role_id' => 6,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            62 => 
            array (
                'id' => 283,
                'role_id' => 7,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            63 => 
            array (
                'id' => 284,
                'role_id' => 8,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            64 => 
            array (
                'id' => 291,
                'role_id' => 2,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            65 => 
            array (
                'id' => 292,
                'role_id' => 3,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            66 => 
            array (
                'id' => 293,
                'role_id' => 5,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            67 => 
            array (
                'id' => 294,
                'role_id' => 6,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            68 => 
            array (
                'id' => 295,
                'role_id' => 7,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            69 => 
            array (
                'id' => 296,
                'role_id' => 8,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            70 => 
            array (
                'id' => 297,
                'role_id' => 2,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            71 => 
            array (
                'id' => 298,
                'role_id' => 5,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            72 => 
            array (
                'id' => 299,
                'role_id' => 6,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            73 => 
            array (
                'id' => 300,
                'role_id' => 7,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            74 => 
            array (
                'id' => 301,
                'role_id' => 8,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            75 => 
            array (
                'id' => 302,
                'role_id' => 3,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            76 => 
            array (
                'id' => 303,
                'role_id' => 5,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            77 => 
            array (
                'id' => 304,
                'role_id' => 6,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            78 => 
            array (
                'id' => 305,
                'role_id' => 7,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            79 => 
            array (
                'id' => 306,
                'role_id' => 8,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            80 => 
            array (
                'id' => 307,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            81 => 
            array (
                'id' => 317,
                'role_id' => 2,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            82 => 
            array (
                'id' => 318,
                'role_id' => 3,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            83 => 
            array (
                'id' => 319,
                'role_id' => 4,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            84 => 
            array (
                'id' => 320,
                'role_id' => 5,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            85 => 
            array (
                'id' => 321,
                'role_id' => 6,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            86 => 
            array (
                'id' => 322,
                'role_id' => 7,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            87 => 
            array (
                'id' => 323,
                'role_id' => 8,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            88 => 
            array (
                'id' => 324,
                'role_id' => 9,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            89 => 
            array (
                'id' => 325,
                'role_id' => 10,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            90 => 
            array (
                'id' => 326,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            91 => 
            array (
                'id' => 327,
                'role_id' => 2,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            92 => 
            array (
                'id' => 328,
                'role_id' => 3,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            93 => 
            array (
                'id' => 329,
                'role_id' => 4,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            94 => 
            array (
                'id' => 330,
                'role_id' => 5,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            95 => 
            array (
                'id' => 331,
                'role_id' => 6,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            96 => 
            array (
                'id' => 332,
                'role_id' => 7,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            97 => 
            array (
                'id' => 333,
                'role_id' => 8,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            98 => 
            array (
                'id' => 334,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            99 => 
            array (
                'id' => 335,
                'role_id' => 10,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            100 => 
            array (
                'id' => 336,
                'role_id' => 5,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            101 => 
            array (
                'id' => 337,
                'role_id' => 7,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            102 => 
            array (
                'id' => 338,
                'role_id' => 8,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            103 => 
            array (
                'id' => 339,
                'role_id' => 5,
                'menu_id' => 438,
                'created_at' => '2023-08-17 00:45:02',
                'updated_at' => '2023-08-17 00:45:02',
            ),
            104 => 
            array (
                'id' => 340,
                'role_id' => 7,
                'menu_id' => 438,
                'created_at' => '2023-08-17 00:45:02',
                'updated_at' => '2023-08-17 00:45:02',
            ),
            105 => 
            array (
                'id' => 341,
                'role_id' => 8,
                'menu_id' => 438,
                'created_at' => '2023-08-17 00:45:02',
                'updated_at' => '2023-08-17 00:45:02',
            ),
            106 => 
            array (
                'id' => 342,
                'role_id' => 3,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            107 => 
            array (
                'id' => 343,
                'role_id' => 4,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            108 => 
            array (
                'id' => 344,
                'role_id' => 5,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            109 => 
            array (
                'id' => 345,
                'role_id' => 6,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            110 => 
            array (
                'id' => 349,
                'role_id' => 1,
                'menu_id' => 445,
                'created_at' => '2023-09-08 16:43:22',
                'updated_at' => '2023-09-08 16:43:22',
            ),
            111 => 
            array (
                'id' => 350,
                'role_id' => 5,
                'menu_id' => 445,
                'created_at' => '2023-09-08 16:43:22',
                'updated_at' => '2023-09-08 16:43:22',
            ),
            112 => 
            array (
                'id' => 351,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2023-09-08 17:09:30',
                'updated_at' => '2023-09-08 17:09:30',
            ),
            113 => 
            array (
                'id' => 352,
                'role_id' => 5,
                'menu_id' => 418,
                'created_at' => '2023-09-08 17:09:30',
                'updated_at' => '2023-09-08 17:09:30',
            ),
            114 => 
            array (
                'id' => 353,
                'role_id' => 2,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            115 => 
            array (
                'id' => 354,
                'role_id' => 3,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            116 => 
            array (
                'id' => 355,
                'role_id' => 4,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            117 => 
            array (
                'id' => 356,
                'role_id' => 5,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            118 => 
            array (
                'id' => 357,
                'role_id' => 7,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            119 => 
            array (
                'id' => 358,
                'role_id' => 8,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            120 => 
            array (
                'id' => 359,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            121 => 
            array (
                'id' => 360,
                'role_id' => 10,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            122 => 
            array (
                'id' => 361,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            123 => 
            array (
                'id' => 362,
                'role_id' => 2,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            124 => 
            array (
                'id' => 363,
                'role_id' => 3,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            125 => 
            array (
                'id' => 364,
                'role_id' => 4,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            126 => 
            array (
                'id' => 365,
                'role_id' => 5,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            127 => 
            array (
                'id' => 366,
                'role_id' => 6,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            128 => 
            array (
                'id' => 367,
                'role_id' => 7,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            129 => 
            array (
                'id' => 368,
                'role_id' => 8,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            130 => 
            array (
                'id' => 369,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            131 => 
            array (
                'id' => 370,
                'role_id' => 10,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            132 => 
            array (
                'id' => 371,
                'role_id' => 2,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            133 => 
            array (
                'id' => 372,
                'role_id' => 3,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            134 => 
            array (
                'id' => 373,
                'role_id' => 4,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            135 => 
            array (
                'id' => 374,
                'role_id' => 5,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            136 => 
            array (
                'id' => 375,
                'role_id' => 7,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            137 => 
            array (
                'id' => 376,
                'role_id' => 8,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            138 => 
            array (
                'id' => 377,
                'role_id' => 9,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            139 => 
            array (
                'id' => 378,
                'role_id' => 2,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            140 => 
            array (
                'id' => 379,
                'role_id' => 3,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            141 => 
            array (
                'id' => 380,
                'role_id' => 5,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            142 => 
            array (
                'id' => 381,
                'role_id' => 7,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            143 => 
            array (
                'id' => 382,
                'role_id' => 8,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            144 => 
            array (
                'id' => 383,
                'role_id' => 2,
                'menu_id' => 427,
                'created_at' => '2023-09-08 17:11:05',
                'updated_at' => '2023-09-08 17:11:05',
            ),
            145 => 
            array (
                'id' => 384,
                'role_id' => 4,
                'menu_id' => 427,
                'created_at' => '2023-09-08 17:11:05',
                'updated_at' => '2023-09-08 17:11:05',
            ),
            146 => 
            array (
                'id' => 385,
                'role_id' => 5,
                'menu_id' => 427,
                'created_at' => '2023-09-08 17:11:05',
                'updated_at' => '2023-09-08 17:11:05',
            ),
        ));
        
        
    }
}