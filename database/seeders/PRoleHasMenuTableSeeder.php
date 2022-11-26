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
                'id' => 92,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            15 => 
            array (
                'id' => 93,
                'role_id' => 2,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            16 => 
            array (
                'id' => 94,
                'role_id' => 3,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            17 => 
            array (
                'id' => 95,
                'role_id' => 4,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            18 => 
            array (
                'id' => 96,
                'role_id' => 5,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            19 => 
            array (
                'id' => 97,
                'role_id' => 6,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            20 => 
            array (
                'id' => 98,
                'role_id' => 7,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            21 => 
            array (
                'id' => 99,
                'role_id' => 8,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            22 => 
            array (
                'id' => 100,
                'role_id' => 9,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            23 => 
            array (
                'id' => 101,
                'role_id' => 10,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            24 => 
            array (
                'id' => 127,
                'role_id' => 2,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            25 => 
            array (
                'id' => 128,
                'role_id' => 3,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            26 => 
            array (
                'id' => 129,
                'role_id' => 5,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            27 => 
            array (
                'id' => 130,
                'role_id' => 6,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            28 => 
            array (
                'id' => 131,
                'role_id' => 7,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            29 => 
            array (
                'id' => 132,
                'role_id' => 8,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            30 => 
            array (
                'id' => 195,
                'role_id' => 2,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            31 => 
            array (
                'id' => 196,
                'role_id' => 3,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            32 => 
            array (
                'id' => 197,
                'role_id' => 5,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            33 => 
            array (
                'id' => 198,
                'role_id' => 6,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            34 => 
            array (
                'id' => 199,
                'role_id' => 7,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            35 => 
            array (
                'id' => 200,
                'role_id' => 8,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            36 => 
            array (
                'id' => 201,
                'role_id' => 2,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            37 => 
            array (
                'id' => 202,
                'role_id' => 3,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            38 => 
            array (
                'id' => 203,
                'role_id' => 5,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            39 => 
            array (
                'id' => 204,
                'role_id' => 6,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            40 => 
            array (
                'id' => 205,
                'role_id' => 7,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            41 => 
            array (
                'id' => 206,
                'role_id' => 8,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            42 => 
            array (
                'id' => 220,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2022-10-03 08:05:27',
                'updated_at' => '2022-10-03 08:05:27',
            ),
            43 => 
            array (
                'id' => 221,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            44 => 
            array (
                'id' => 222,
                'role_id' => 5,
                'menu_id' => 397,
                'created_at' => '2022-10-03 08:06:19',
                'updated_at' => '2022-10-03 08:06:19',
            ),
            45 => 
            array (
                'id' => 235,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2022-10-03 08:14:00',
                'updated_at' => '2022-10-03 08:14:00',
            ),
            46 => 
            array (
                'id' => 236,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2022-10-03 08:14:16',
                'updated_at' => '2022-10-03 08:14:16',
            ),
            47 => 
            array (
                'id' => 255,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2022-10-22 14:25:50',
                'updated_at' => '2022-10-22 14:25:50',
            ),
            48 => 
            array (
                'id' => 326,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            49 => 
            array (
                'id' => 327,
                'role_id' => 2,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            50 => 
            array (
                'id' => 328,
                'role_id' => 3,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            51 => 
            array (
                'id' => 329,
                'role_id' => 4,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            52 => 
            array (
                'id' => 330,
                'role_id' => 5,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            53 => 
            array (
                'id' => 331,
                'role_id' => 6,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            54 => 
            array (
                'id' => 332,
                'role_id' => 7,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            55 => 
            array (
                'id' => 333,
                'role_id' => 8,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            56 => 
            array (
                'id' => 334,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            57 => 
            array (
                'id' => 335,
                'role_id' => 10,
                'menu_id' => 345,
                'created_at' => '2022-11-11 03:30:46',
                'updated_at' => '2022-11-11 03:30:46',
            ),
            58 => 
            array (
                'id' => 337,
                'role_id' => 2,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            59 => 
            array (
                'id' => 338,
                'role_id' => 3,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            60 => 
            array (
                'id' => 339,
                'role_id' => 4,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            61 => 
            array (
                'id' => 340,
                'role_id' => 5,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            62 => 
            array (
                'id' => 341,
                'role_id' => 6,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            63 => 
            array (
                'id' => 342,
                'role_id' => 7,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            64 => 
            array (
                'id' => 343,
                'role_id' => 8,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            65 => 
            array (
                'id' => 344,
                'role_id' => 9,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            66 => 
            array (
                'id' => 345,
                'role_id' => 10,
                'menu_id' => 428,
                'created_at' => '2022-11-27 03:24:14',
                'updated_at' => '2022-11-27 03:24:14',
            ),
            67 => 
            array (
                'id' => 352,
                'role_id' => 2,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            68 => 
            array (
                'id' => 353,
                'role_id' => 3,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            69 => 
            array (
                'id' => 354,
                'role_id' => 4,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            70 => 
            array (
                'id' => 355,
                'role_id' => 5,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            71 => 
            array (
                'id' => 356,
                'role_id' => 6,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            72 => 
            array (
                'id' => 357,
                'role_id' => 7,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            73 => 
            array (
                'id' => 358,
                'role_id' => 8,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            74 => 
            array (
                'id' => 359,
                'role_id' => 9,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            75 => 
            array (
                'id' => 360,
                'role_id' => 10,
                'menu_id' => 435,
                'created_at' => '2022-11-27 03:28:13',
                'updated_at' => '2022-11-27 03:28:13',
            ),
            76 => 
            array (
                'id' => 361,
                'role_id' => 2,
                'menu_id' => 436,
                'created_at' => '2022-11-27 03:31:09',
                'updated_at' => '2022-11-27 03:31:09',
            ),
            77 => 
            array (
                'id' => 362,
                'role_id' => 3,
                'menu_id' => 436,
                'created_at' => '2022-11-27 03:31:09',
                'updated_at' => '2022-11-27 03:31:09',
            ),
            78 => 
            array (
                'id' => 363,
                'role_id' => 4,
                'menu_id' => 436,
                'created_at' => '2022-11-27 03:31:09',
                'updated_at' => '2022-11-27 03:31:09',
            ),
            79 => 
            array (
                'id' => 364,
                'role_id' => 5,
                'menu_id' => 436,
                'created_at' => '2022-11-27 03:31:09',
                'updated_at' => '2022-11-27 03:31:09',
            ),
            80 => 
            array (
                'id' => 365,
                'role_id' => 6,
                'menu_id' => 436,
                'created_at' => '2022-11-27 03:31:09',
                'updated_at' => '2022-11-27 03:31:09',
            ),
            81 => 
            array (
                'id' => 366,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            82 => 
            array (
                'id' => 367,
                'role_id' => 2,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            83 => 
            array (
                'id' => 368,
                'role_id' => 3,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            84 => 
            array (
                'id' => 369,
                'role_id' => 4,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            85 => 
            array (
                'id' => 370,
                'role_id' => 5,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            86 => 
            array (
                'id' => 371,
                'role_id' => 6,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            87 => 
            array (
                'id' => 372,
                'role_id' => 7,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            88 => 
            array (
                'id' => 373,
                'role_id' => 8,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            89 => 
            array (
                'id' => 374,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            90 => 
            array (
                'id' => 375,
                'role_id' => 10,
                'menu_id' => 373,
                'created_at' => '2022-11-27 03:31:33',
                'updated_at' => '2022-11-27 03:31:33',
            ),
            91 => 
            array (
                'id' => 381,
                'role_id' => 2,
                'menu_id' => 438,
                'created_at' => '2022-11-27 03:36:33',
                'updated_at' => '2022-11-27 03:36:33',
            ),
            92 => 
            array (
                'id' => 382,
                'role_id' => 5,
                'menu_id' => 438,
                'created_at' => '2022-11-27 03:36:33',
                'updated_at' => '2022-11-27 03:36:33',
            ),
            93 => 
            array (
                'id' => 383,
                'role_id' => 6,
                'menu_id' => 438,
                'created_at' => '2022-11-27 03:36:33',
                'updated_at' => '2022-11-27 03:36:33',
            ),
            94 => 
            array (
                'id' => 384,
                'role_id' => 7,
                'menu_id' => 438,
                'created_at' => '2022-11-27 03:36:33',
                'updated_at' => '2022-11-27 03:36:33',
            ),
            95 => 
            array (
                'id' => 385,
                'role_id' => 8,
                'menu_id' => 438,
                'created_at' => '2022-11-27 03:36:33',
                'updated_at' => '2022-11-27 03:36:33',
            ),
            96 => 
            array (
                'id' => 386,
                'role_id' => 2,
                'menu_id' => 437,
                'created_at' => '2022-11-27 03:37:39',
                'updated_at' => '2022-11-27 03:37:39',
            ),
            97 => 
            array (
                'id' => 387,
                'role_id' => 3,
                'menu_id' => 437,
                'created_at' => '2022-11-27 03:37:39',
                'updated_at' => '2022-11-27 03:37:39',
            ),
            98 => 
            array (
                'id' => 388,
                'role_id' => 5,
                'menu_id' => 437,
                'created_at' => '2022-11-27 03:37:39',
                'updated_at' => '2022-11-27 03:37:39',
            ),
            99 => 
            array (
                'id' => 389,
                'role_id' => 6,
                'menu_id' => 437,
                'created_at' => '2022-11-27 03:37:39',
                'updated_at' => '2022-11-27 03:37:39',
            ),
            100 => 
            array (
                'id' => 390,
                'role_id' => 7,
                'menu_id' => 437,
                'created_at' => '2022-11-27 03:37:39',
                'updated_at' => '2022-11-27 03:37:39',
            ),
            101 => 
            array (
                'id' => 391,
                'role_id' => 8,
                'menu_id' => 437,
                'created_at' => '2022-11-27 03:37:39',
                'updated_at' => '2022-11-27 03:37:39',
            ),
            102 => 
            array (
                'id' => 392,
                'role_id' => 1,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            103 => 
            array (
                'id' => 393,
                'role_id' => 2,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            104 => 
            array (
                'id' => 394,
                'role_id' => 3,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            105 => 
            array (
                'id' => 395,
                'role_id' => 5,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            106 => 
            array (
                'id' => 396,
                'role_id' => 6,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            107 => 
            array (
                'id' => 397,
                'role_id' => 7,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            108 => 
            array (
                'id' => 398,
                'role_id' => 8,
                'menu_id' => 442,
                'created_at' => '2022-11-27 03:39:44',
                'updated_at' => '2022-11-27 03:39:44',
            ),
            109 => 
            array (
                'id' => 399,
                'role_id' => 2,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            110 => 
            array (
                'id' => 400,
                'role_id' => 3,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            111 => 
            array (
                'id' => 401,
                'role_id' => 4,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            112 => 
            array (
                'id' => 402,
                'role_id' => 5,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            113 => 
            array (
                'id' => 403,
                'role_id' => 6,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            114 => 
            array (
                'id' => 404,
                'role_id' => 7,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            115 => 
            array (
                'id' => 405,
                'role_id' => 8,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            116 => 
            array (
                'id' => 406,
                'role_id' => 9,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            117 => 
            array (
                'id' => 407,
                'role_id' => 10,
                'menu_id' => 420,
                'created_at' => '2022-11-27 03:42:30',
                'updated_at' => '2022-11-27 03:42:30',
            ),
            118 => 
            array (
                'id' => 408,
                'role_id' => 2,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            119 => 
            array (
                'id' => 409,
                'role_id' => 3,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            120 => 
            array (
                'id' => 410,
                'role_id' => 5,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            121 => 
            array (
                'id' => 411,
                'role_id' => 6,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            122 => 
            array (
                'id' => 412,
                'role_id' => 7,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            123 => 
            array (
                'id' => 413,
                'role_id' => 8,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            124 => 
            array (
                'id' => 414,
                'role_id' => 9,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            125 => 
            array (
                'id' => 415,
                'role_id' => 10,
                'menu_id' => 421,
                'created_at' => '2022-11-27 03:42:48',
                'updated_at' => '2022-11-27 03:42:48',
            ),
            126 => 
            array (
                'id' => 416,
                'role_id' => 2,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            127 => 
            array (
                'id' => 417,
                'role_id' => 3,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            128 => 
            array (
                'id' => 418,
                'role_id' => 4,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            129 => 
            array (
                'id' => 419,
                'role_id' => 5,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            130 => 
            array (
                'id' => 420,
                'role_id' => 6,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            131 => 
            array (
                'id' => 421,
                'role_id' => 7,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            132 => 
            array (
                'id' => 422,
                'role_id' => 8,
                'menu_id' => 444,
                'created_at' => '2022-11-27 03:43:00',
                'updated_at' => '2022-11-27 03:43:00',
            ),
            133 => 
            array (
                'id' => 423,
                'role_id' => 2,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            134 => 
            array (
                'id' => 424,
                'role_id' => 3,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            135 => 
            array (
                'id' => 425,
                'role_id' => 5,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            136 => 
            array (
                'id' => 426,
                'role_id' => 6,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            137 => 
            array (
                'id' => 427,
                'role_id' => 7,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            138 => 
            array (
                'id' => 428,
                'role_id' => 8,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            139 => 
            array (
                'id' => 429,
                'role_id' => 9,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            140 => 
            array (
                'id' => 430,
                'role_id' => 10,
                'menu_id' => 423,
                'created_at' => '2022-11-27 03:43:13',
                'updated_at' => '2022-11-27 03:43:13',
            ),
            141 => 
            array (
                'id' => 431,
                'role_id' => 2,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            142 => 
            array (
                'id' => 432,
                'role_id' => 3,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            143 => 
            array (
                'id' => 433,
                'role_id' => 5,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            144 => 
            array (
                'id' => 434,
                'role_id' => 6,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            145 => 
            array (
                'id' => 435,
                'role_id' => 7,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            146 => 
            array (
                'id' => 436,
                'role_id' => 8,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            147 => 
            array (
                'id' => 437,
                'role_id' => 9,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            148 => 
            array (
                'id' => 438,
                'role_id' => 10,
                'menu_id' => 422,
                'created_at' => '2022-11-27 03:43:26',
                'updated_at' => '2022-11-27 03:43:26',
            ),
            149 => 
            array (
                'id' => 439,
                'role_id' => 2,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            150 => 
            array (
                'id' => 440,
                'role_id' => 3,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            151 => 
            array (
                'id' => 441,
                'role_id' => 5,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            152 => 
            array (
                'id' => 442,
                'role_id' => 6,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            153 => 
            array (
                'id' => 443,
                'role_id' => 7,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            154 => 
            array (
                'id' => 444,
                'role_id' => 8,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            155 => 
            array (
                'id' => 445,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            156 => 
            array (
                'id' => 446,
                'role_id' => 10,
                'menu_id' => 425,
                'created_at' => '2022-11-27 03:43:40',
                'updated_at' => '2022-11-27 03:43:40',
            ),
            157 => 
            array (
                'id' => 447,
                'role_id' => 1,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            158 => 
            array (
                'id' => 448,
                'role_id' => 2,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            159 => 
            array (
                'id' => 449,
                'role_id' => 3,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            160 => 
            array (
                'id' => 450,
                'role_id' => 4,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            161 => 
            array (
                'id' => 451,
                'role_id' => 5,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            162 => 
            array (
                'id' => 452,
                'role_id' => 6,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            163 => 
            array (
                'id' => 453,
                'role_id' => 7,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            164 => 
            array (
                'id' => 454,
                'role_id' => 8,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            165 => 
            array (
                'id' => 455,
                'role_id' => 9,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            166 => 
            array (
                'id' => 456,
                'role_id' => 10,
                'menu_id' => 439,
                'created_at' => '2022-11-27 03:44:10',
                'updated_at' => '2022-11-27 03:44:10',
            ),
            167 => 
            array (
                'id' => 457,
                'role_id' => 1,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            168 => 
            array (
                'id' => 458,
                'role_id' => 2,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            169 => 
            array (
                'id' => 459,
                'role_id' => 3,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            170 => 
            array (
                'id' => 460,
                'role_id' => 4,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            171 => 
            array (
                'id' => 461,
                'role_id' => 5,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            172 => 
            array (
                'id' => 462,
                'role_id' => 6,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            173 => 
            array (
                'id' => 463,
                'role_id' => 7,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            174 => 
            array (
                'id' => 464,
                'role_id' => 8,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            175 => 
            array (
                'id' => 465,
                'role_id' => 9,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            176 => 
            array (
                'id' => 466,
                'role_id' => 10,
                'menu_id' => 440,
                'created_at' => '2022-11-27 03:44:32',
                'updated_at' => '2022-11-27 03:44:32',
            ),
            177 => 
            array (
                'id' => 467,
                'role_id' => 1,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:54',
                'updated_at' => '2022-11-27 03:44:54',
            ),
            178 => 
            array (
                'id' => 468,
                'role_id' => 2,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:54',
                'updated_at' => '2022-11-27 03:44:54',
            ),
            179 => 
            array (
                'id' => 469,
                'role_id' => 3,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:54',
                'updated_at' => '2022-11-27 03:44:54',
            ),
            180 => 
            array (
                'id' => 470,
                'role_id' => 4,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            181 => 
            array (
                'id' => 471,
                'role_id' => 5,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            182 => 
            array (
                'id' => 472,
                'role_id' => 6,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            183 => 
            array (
                'id' => 473,
                'role_id' => 7,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            184 => 
            array (
                'id' => 474,
                'role_id' => 8,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            185 => 
            array (
                'id' => 475,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            186 => 
            array (
                'id' => 476,
                'role_id' => 10,
                'menu_id' => 419,
                'created_at' => '2022-11-27 03:44:55',
                'updated_at' => '2022-11-27 03:44:55',
            ),
            187 => 
            array (
                'id' => 477,
                'role_id' => 2,
                'menu_id' => 431,
                'created_at' => '2022-11-27 03:45:18',
                'updated_at' => '2022-11-27 03:45:18',
            ),
            188 => 
            array (
                'id' => 478,
                'role_id' => 3,
                'menu_id' => 431,
                'created_at' => '2022-11-27 03:45:18',
                'updated_at' => '2022-11-27 03:45:18',
            ),
            189 => 
            array (
                'id' => 479,
                'role_id' => 5,
                'menu_id' => 431,
                'created_at' => '2022-11-27 03:45:18',
                'updated_at' => '2022-11-27 03:45:18',
            ),
            190 => 
            array (
                'id' => 480,
                'role_id' => 6,
                'menu_id' => 431,
                'created_at' => '2022-11-27 03:45:18',
                'updated_at' => '2022-11-27 03:45:18',
            ),
            191 => 
            array (
                'id' => 481,
                'role_id' => 7,
                'menu_id' => 431,
                'created_at' => '2022-11-27 03:45:18',
                'updated_at' => '2022-11-27 03:45:18',
            ),
            192 => 
            array (
                'id' => 482,
                'role_id' => 8,
                'menu_id' => 431,
                'created_at' => '2022-11-27 03:45:18',
                'updated_at' => '2022-11-27 03:45:18',
            ),
            193 => 
            array (
                'id' => 483,
                'role_id' => 2,
                'menu_id' => 432,
                'created_at' => '2022-11-27 03:45:24',
                'updated_at' => '2022-11-27 03:45:24',
            ),
            194 => 
            array (
                'id' => 484,
                'role_id' => 3,
                'menu_id' => 432,
                'created_at' => '2022-11-27 03:45:24',
                'updated_at' => '2022-11-27 03:45:24',
            ),
            195 => 
            array (
                'id' => 485,
                'role_id' => 5,
                'menu_id' => 432,
                'created_at' => '2022-11-27 03:45:24',
                'updated_at' => '2022-11-27 03:45:24',
            ),
            196 => 
            array (
                'id' => 486,
                'role_id' => 6,
                'menu_id' => 432,
                'created_at' => '2022-11-27 03:45:24',
                'updated_at' => '2022-11-27 03:45:24',
            ),
            197 => 
            array (
                'id' => 487,
                'role_id' => 7,
                'menu_id' => 432,
                'created_at' => '2022-11-27 03:45:24',
                'updated_at' => '2022-11-27 03:45:24',
            ),
            198 => 
            array (
                'id' => 488,
                'role_id' => 8,
                'menu_id' => 432,
                'created_at' => '2022-11-27 03:45:24',
                'updated_at' => '2022-11-27 03:45:24',
            ),
            199 => 
            array (
                'id' => 496,
                'role_id' => 1,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            200 => 
            array (
                'id' => 497,
                'role_id' => 2,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            201 => 
            array (
                'id' => 498,
                'role_id' => 3,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            202 => 
            array (
                'id' => 499,
                'role_id' => 4,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            203 => 
            array (
                'id' => 500,
                'role_id' => 5,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            204 => 
            array (
                'id' => 501,
                'role_id' => 6,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            205 => 
            array (
                'id' => 502,
                'role_id' => 7,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            206 => 
            array (
                'id' => 503,
                'role_id' => 8,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            207 => 
            array (
                'id' => 504,
                'role_id' => 9,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            208 => 
            array (
                'id' => 505,
                'role_id' => 10,
                'menu_id' => 441,
                'created_at' => '2022-11-27 03:46:21',
                'updated_at' => '2022-11-27 03:46:21',
            ),
            209 => 
            array (
                'id' => 506,
                'role_id' => 2,
                'menu_id' => 430,
                'created_at' => '2022-11-27 03:52:03',
                'updated_at' => '2022-11-27 03:52:03',
            ),
            210 => 
            array (
                'id' => 507,
                'role_id' => 3,
                'menu_id' => 430,
                'created_at' => '2022-11-27 03:52:03',
                'updated_at' => '2022-11-27 03:52:03',
            ),
            211 => 
            array (
                'id' => 508,
                'role_id' => 5,
                'menu_id' => 430,
                'created_at' => '2022-11-27 03:52:03',
                'updated_at' => '2022-11-27 03:52:03',
            ),
            212 => 
            array (
                'id' => 509,
                'role_id' => 6,
                'menu_id' => 430,
                'created_at' => '2022-11-27 03:52:03',
                'updated_at' => '2022-11-27 03:52:03',
            ),
            213 => 
            array (
                'id' => 510,
                'role_id' => 7,
                'menu_id' => 430,
                'created_at' => '2022-11-27 03:52:03',
                'updated_at' => '2022-11-27 03:52:03',
            ),
            214 => 
            array (
                'id' => 511,
                'role_id' => 8,
                'menu_id' => 430,
                'created_at' => '2022-11-27 03:52:03',
                'updated_at' => '2022-11-27 03:52:03',
            ),
            215 => 
            array (
                'id' => 512,
                'role_id' => 2,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
            216 => 
            array (
                'id' => 513,
                'role_id' => 3,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
            217 => 
            array (
                'id' => 514,
                'role_id' => 4,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
            218 => 
            array (
                'id' => 515,
                'role_id' => 5,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
            219 => 
            array (
                'id' => 516,
                'role_id' => 6,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
            220 => 
            array (
                'id' => 517,
                'role_id' => 7,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
            221 => 
            array (
                'id' => 518,
                'role_id' => 9,
                'menu_id' => 427,
                'created_at' => '2022-11-27 03:56:00',
                'updated_at' => '2022-11-27 03:56:00',
            ),
        ));
        
        
    }
}