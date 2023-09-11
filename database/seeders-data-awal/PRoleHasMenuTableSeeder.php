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
                'id' => 21,
                'role_id' => 5,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            7 => 
            array (
                'id' => 22,
                'role_id' => 6,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            8 => 
            array (
                'id' => 23,
                'role_id' => 7,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            9 => 
            array (
                'id' => 24,
                'role_id' => 8,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            10 => 
            array (
                'id' => 26,
                'role_id' => 10,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            11 => 
            array (
                'id' => 36,
                'role_id' => 5,
                'menu_id' => 417,
                'created_at' => '2022-09-18 21:03:05',
                'updated_at' => '2022-09-18 21:03:05',
            ),
            12 => 
            array (
                'id' => 124,
                'role_id' => 2,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            13 => 
            array (
                'id' => 125,
                'role_id' => 3,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            14 => 
            array (
                'id' => 126,
                'role_id' => 5,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            15 => 
            array (
                'id' => 181,
                'role_id' => 2,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            16 => 
            array (
                'id' => 182,
                'role_id' => 3,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            17 => 
            array (
                'id' => 184,
                'role_id' => 5,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            18 => 
            array (
                'id' => 185,
                'role_id' => 6,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            19 => 
            array (
                'id' => 186,
                'role_id' => 7,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            20 => 
            array (
                'id' => 187,
                'role_id' => 8,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            21 => 
            array (
                'id' => 188,
                'role_id' => 2,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            22 => 
            array (
                'id' => 189,
                'role_id' => 3,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            23 => 
            array (
                'id' => 191,
                'role_id' => 5,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            24 => 
            array (
                'id' => 192,
                'role_id' => 6,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            25 => 
            array (
                'id' => 193,
                'role_id' => 7,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            26 => 
            array (
                'id' => 194,
                'role_id' => 8,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            27 => 
            array (
                'id' => 195,
                'role_id' => 2,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            28 => 
            array (
                'id' => 196,
                'role_id' => 3,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            29 => 
            array (
                'id' => 197,
                'role_id' => 5,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            30 => 
            array (
                'id' => 198,
                'role_id' => 6,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            31 => 
            array (
                'id' => 199,
                'role_id' => 7,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            32 => 
            array (
                'id' => 200,
                'role_id' => 8,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            33 => 
            array (
                'id' => 201,
                'role_id' => 2,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            34 => 
            array (
                'id' => 202,
                'role_id' => 3,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            35 => 
            array (
                'id' => 203,
                'role_id' => 5,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            36 => 
            array (
                'id' => 204,
                'role_id' => 6,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            37 => 
            array (
                'id' => 205,
                'role_id' => 7,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            38 => 
            array (
                'id' => 206,
                'role_id' => 8,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            39 => 
            array (
                'id' => 215,
                'role_id' => 5,
                'menu_id' => 436,
                'created_at' => '2022-10-01 12:50:57',
                'updated_at' => '2022-10-01 12:50:57',
            ),
            40 => 
            array (
                'id' => 220,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2022-10-03 08:05:27',
                'updated_at' => '2022-10-03 08:05:27',
            ),
            41 => 
            array (
                'id' => 221,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            42 => 
            array (
                'id' => 222,
                'role_id' => 5,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            43 => 
            array (
                'id' => 227,
                'role_id' => 1,
                'menu_id' => 440,
                'created_at' => '2022-10-03 08:10:12',
                'updated_at' => '2022-10-03 08:10:12',
            ),
            44 => 
            array (
                'id' => 228,
                'role_id' => 5,
                'menu_id' => 440,
                'created_at' => '2022-10-03 08:10:12',
                'updated_at' => '2022-10-03 08:10:12',
            ),
            45 => 
            array (
                'id' => 229,
                'role_id' => 1,
                'menu_id' => 441,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-10-03 08:11:55',
            ),
            46 => 
            array (
                'id' => 230,
                'role_id' => 5,
                'menu_id' => 441,
                'created_at' => '2022-10-03 08:11:55',
                'updated_at' => '2022-10-03 08:11:55',
            ),
            47 => 
            array (
                'id' => 235,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2022-10-03 08:14:00',
                'updated_at' => '2022-10-03 08:14:00',
            ),
            48 => 
            array (
                'id' => 236,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2022-10-03 08:14:16',
                'updated_at' => '2022-10-03 08:14:16',
            ),
            49 => 
            array (
                'id' => 243,
                'role_id' => 5,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            50 => 
            array (
                'id' => 244,
                'role_id' => 7,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            51 => 
            array (
                'id' => 245,
                'role_id' => 8,
                'menu_id' => 435,
                'created_at' => '2022-10-10 13:03:57',
                'updated_at' => '2022-10-10 13:03:57',
            ),
            52 => 
            array (
                'id' => 252,
                'role_id' => 1,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            53 => 
            array (
                'id' => 253,
                'role_id' => 3,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            54 => 
            array (
                'id' => 254,
                'role_id' => 5,
                'menu_id' => 442,
                'created_at' => '2022-10-17 00:18:29',
                'updated_at' => '2022-10-17 00:18:29',
            ),
            55 => 
            array (
                'id' => 255,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2022-10-22 14:25:50',
                'updated_at' => '2022-10-22 14:25:50',
            ),
            56 => 
            array (
                'id' => 281,
                'role_id' => 5,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            57 => 
            array (
                'id' => 282,
                'role_id' => 6,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            58 => 
            array (
                'id' => 283,
                'role_id' => 7,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            59 => 
            array (
                'id' => 284,
                'role_id' => 8,
                'menu_id' => 421,
                'created_at' => '2022-11-06 11:03:27',
                'updated_at' => '2022-11-06 11:03:27',
            ),
            60 => 
            array (
                'id' => 291,
                'role_id' => 2,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            61 => 
            array (
                'id' => 292,
                'role_id' => 3,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            62 => 
            array (
                'id' => 293,
                'role_id' => 5,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            63 => 
            array (
                'id' => 294,
                'role_id' => 6,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            64 => 
            array (
                'id' => 295,
                'role_id' => 7,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            65 => 
            array (
                'id' => 296,
                'role_id' => 8,
                'menu_id' => 423,
                'created_at' => '2022-11-06 19:55:29',
                'updated_at' => '2022-11-06 19:55:29',
            ),
            66 => 
            array (
                'id' => 297,
                'role_id' => 2,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            67 => 
            array (
                'id' => 298,
                'role_id' => 5,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            68 => 
            array (
                'id' => 299,
                'role_id' => 6,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            69 => 
            array (
                'id' => 300,
                'role_id' => 7,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            70 => 
            array (
                'id' => 301,
                'role_id' => 8,
                'menu_id' => 422,
                'created_at' => '2022-11-06 21:49:33',
                'updated_at' => '2022-11-06 21:49:33',
            ),
            71 => 
            array (
                'id' => 302,
                'role_id' => 3,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            72 => 
            array (
                'id' => 303,
                'role_id' => 5,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            73 => 
            array (
                'id' => 304,
                'role_id' => 6,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            74 => 
            array (
                'id' => 305,
                'role_id' => 7,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            75 => 
            array (
                'id' => 306,
                'role_id' => 8,
                'menu_id' => 425,
                'created_at' => '2022-11-06 22:59:52',
                'updated_at' => '2022-11-06 22:59:52',
            ),
            76 => 
            array (
                'id' => 317,
                'role_id' => 2,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            77 => 
            array (
                'id' => 318,
                'role_id' => 3,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            78 => 
            array (
                'id' => 320,
                'role_id' => 5,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            79 => 
            array (
                'id' => 321,
                'role_id' => 6,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            80 => 
            array (
                'id' => 322,
                'role_id' => 7,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            81 => 
            array (
                'id' => 323,
                'role_id' => 8,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            82 => 
            array (
                'id' => 325,
                'role_id' => 10,
                'menu_id' => 444,
                'created_at' => '2022-11-07 22:18:08',
                'updated_at' => '2022-11-07 22:18:08',
            ),
            83 => 
            array (
                'id' => 326,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            84 => 
            array (
                'id' => 327,
                'role_id' => 2,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            85 => 
            array (
                'id' => 328,
                'role_id' => 3,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            86 => 
            array (
                'id' => 330,
                'role_id' => 5,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            87 => 
            array (
                'id' => 331,
                'role_id' => 6,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            88 => 
            array (
                'id' => 332,
                'role_id' => 7,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            89 => 
            array (
                'id' => 333,
                'role_id' => 8,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            90 => 
            array (
                'id' => 335,
                'role_id' => 10,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            91 => 
            array (
                'id' => 336,
                'role_id' => 5,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            92 => 
            array (
                'id' => 337,
                'role_id' => 7,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            93 => 
            array (
                'id' => 338,
                'role_id' => 8,
                'menu_id' => 437,
                'created_at' => '2023-08-17 00:41:25',
                'updated_at' => '2023-08-17 00:41:25',
            ),
            94 => 
            array (
                'id' => 342,
                'role_id' => 3,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            95 => 
            array (
                'id' => 344,
                'role_id' => 5,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            96 => 
            array (
                'id' => 345,
                'role_id' => 6,
                'menu_id' => 420,
                'created_at' => '2023-09-07 13:01:31',
                'updated_at' => '2023-09-07 13:01:31',
            ),
            97 => 
            array (
                'id' => 353,
                'role_id' => 2,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            98 => 
            array (
                'id' => 354,
                'role_id' => 3,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            99 => 
            array (
                'id' => 356,
                'role_id' => 5,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            100 => 
            array (
                'id' => 357,
                'role_id' => 7,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            101 => 
            array (
                'id' => 358,
                'role_id' => 8,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            102 => 
            array (
                'id' => 360,
                'role_id' => 10,
                'menu_id' => 419,
                'created_at' => '2023-09-08 17:09:46',
                'updated_at' => '2023-09-08 17:09:46',
            ),
            103 => 
            array (
                'id' => 361,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            104 => 
            array (
                'id' => 362,
                'role_id' => 2,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            105 => 
            array (
                'id' => 363,
                'role_id' => 3,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            106 => 
            array (
                'id' => 365,
                'role_id' => 5,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            107 => 
            array (
                'id' => 366,
                'role_id' => 6,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            108 => 
            array (
                'id' => 367,
                'role_id' => 7,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            109 => 
            array (
                'id' => 368,
                'role_id' => 8,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            110 => 
            array (
                'id' => 370,
                'role_id' => 10,
                'menu_id' => 373,
                'created_at' => '2023-09-08 17:10:02',
                'updated_at' => '2023-09-08 17:10:02',
            ),
            111 => 
            array (
                'id' => 371,
                'role_id' => 2,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            112 => 
            array (
                'id' => 372,
                'role_id' => 3,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            113 => 
            array (
                'id' => 374,
                'role_id' => 5,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            114 => 
            array (
                'id' => 375,
                'role_id' => 7,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            115 => 
            array (
                'id' => 376,
                'role_id' => 8,
                'menu_id' => 430,
                'created_at' => '2023-09-08 17:10:17',
                'updated_at' => '2023-09-08 17:10:17',
            ),
            116 => 
            array (
                'id' => 378,
                'role_id' => 2,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            117 => 
            array (
                'id' => 379,
                'role_id' => 3,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            118 => 
            array (
                'id' => 380,
                'role_id' => 5,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            119 => 
            array (
                'id' => 381,
                'role_id' => 7,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            120 => 
            array (
                'id' => 382,
                'role_id' => 8,
                'menu_id' => 429,
                'created_at' => '2023-09-08 17:10:48',
                'updated_at' => '2023-09-08 17:10:48',
            ),
            121 => 
            array (
                'id' => 383,
                'role_id' => 2,
                'menu_id' => 427,
                'created_at' => '2023-09-08 17:11:05',
                'updated_at' => '2023-09-08 17:11:05',
            ),
            122 => 
            array (
                'id' => 385,
                'role_id' => 5,
                'menu_id' => 427,
                'created_at' => '2023-09-08 17:11:05',
                'updated_at' => '2023-09-08 17:11:05',
            ),
            123 => 
            array (
                'id' => 395,
                'role_id' => 5,
                'menu_id' => 446,
                'created_at' => '2023-09-08 22:17:32',
                'updated_at' => '2023-09-08 22:17:32',
            ),
            124 => 
            array (
                'id' => 396,
                'role_id' => 7,
                'menu_id' => 446,
                'created_at' => '2023-09-08 22:17:32',
                'updated_at' => '2023-09-08 22:17:32',
            ),
            125 => 
            array (
                'id' => 397,
                'role_id' => 8,
                'menu_id' => 446,
                'created_at' => '2023-09-08 22:17:32',
                'updated_at' => '2023-09-08 22:17:32',
            ),
            126 => 
            array (
                'id' => 398,
                'role_id' => 1,
                'menu_id' => 445,
                'created_at' => '2023-09-08 22:31:38',
                'updated_at' => '2023-09-08 22:31:38',
            ),
            127 => 
            array (
                'id' => 399,
                'role_id' => 5,
                'menu_id' => 445,
                'created_at' => '2023-09-08 22:31:38',
                'updated_at' => '2023-09-08 22:31:38',
            ),
            128 => 
            array (
                'id' => 400,
                'role_id' => 7,
                'menu_id' => 445,
                'created_at' => '2023-09-08 22:31:38',
                'updated_at' => '2023-09-08 22:31:38',
            ),
            129 => 
            array (
                'id' => 401,
                'role_id' => 8,
                'menu_id' => 445,
                'created_at' => '2023-09-08 22:31:38',
                'updated_at' => '2023-09-08 22:31:38',
            ),
            130 => 
            array (
                'id' => 402,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2023-09-08 22:45:47',
                'updated_at' => '2023-09-08 22:45:47',
            ),
            131 => 
            array (
                'id' => 403,
                'role_id' => 5,
                'menu_id' => 418,
                'created_at' => '2023-09-08 22:45:47',
                'updated_at' => '2023-09-08 22:45:47',
            ),
            132 => 
            array (
                'id' => 404,
                'role_id' => 7,
                'menu_id' => 418,
                'created_at' => '2023-09-08 22:45:47',
                'updated_at' => '2023-09-08 22:45:47',
            ),
            133 => 
            array (
                'id' => 405,
                'role_id' => 8,
                'menu_id' => 418,
                'created_at' => '2023-09-08 22:45:47',
                'updated_at' => '2023-09-08 22:45:47',
            ),
        ));
        
        
    }
}