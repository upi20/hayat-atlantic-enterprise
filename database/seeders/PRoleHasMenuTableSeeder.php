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
                'id' => 1,
                'role_id' => 1,
                'menu_id' => 410,
                'created_at' => '2022-09-15 21:17:18',
                'updated_at' => '2022-09-15 21:17:18',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2022-09-15 21:18:54',
                'updated_at' => '2022-09-15 21:18:54',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 5,
                'menu_id' => 413,
                'created_at' => '2022-09-18 19:56:03',
                'updated_at' => '2022-09-18 19:56:03',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 1,
                'menu_id' => 414,
                'created_at' => '2022-09-18 19:56:23',
                'updated_at' => '2022-09-18 19:56:23',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 5,
                'menu_id' => 415,
                'created_at' => '2022-09-18 19:57:43',
                'updated_at' => '2022-09-18 19:57:43',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 5,
                'menu_id' => 416,
                'created_at' => '2022-09-18 19:58:01',
                'updated_at' => '2022-09-18 19:58:01',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 3,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 4,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 5,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 6,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 7,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 8,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:12',
                'updated_at' => '2022-09-18 19:59:12',
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 10,
                'menu_id' => 345,
                'created_at' => '2022-09-18 19:59:13',
                'updated_at' => '2022-09-18 19:59:13',
            ),
            16 => 
            array (
                'id' => 17,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            17 => 
            array (
                'id' => 18,
                'role_id' => 2,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            18 => 
            array (
                'id' => 19,
                'role_id' => 3,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            19 => 
            array (
                'id' => 20,
                'role_id' => 4,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            20 => 
            array (
                'id' => 21,
                'role_id' => 5,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            21 => 
            array (
                'id' => 22,
                'role_id' => 6,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            22 => 
            array (
                'id' => 23,
                'role_id' => 7,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            23 => 
            array (
                'id' => 24,
                'role_id' => 8,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            24 => 
            array (
                'id' => 25,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            25 => 
            array (
                'id' => 26,
                'role_id' => 10,
                'menu_id' => 386,
                'created_at' => '2022-09-18 19:59:37',
                'updated_at' => '2022-09-18 19:59:37',
            ),
            26 => 
            array (
                'id' => 27,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            27 => 
            array (
                'id' => 28,
                'role_id' => 2,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            28 => 
            array (
                'id' => 29,
                'role_id' => 3,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            29 => 
            array (
                'id' => 30,
                'role_id' => 4,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            30 => 
            array (
                'id' => 31,
                'role_id' => 5,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            31 => 
            array (
                'id' => 32,
                'role_id' => 7,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            32 => 
            array (
                'id' => 33,
                'role_id' => 8,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            33 => 
            array (
                'id' => 34,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            34 => 
            array (
                'id' => 35,
                'role_id' => 10,
                'menu_id' => 373,
                'created_at' => '2022-09-18 20:29:55',
                'updated_at' => '2022-09-18 20:29:55',
            ),
            35 => 
            array (
                'id' => 36,
                'role_id' => 5,
                'menu_id' => 417,
                'created_at' => '2022-09-18 21:03:05',
                'updated_at' => '2022-09-18 21:03:05',
            ),
            36 => 
            array (
                'id' => 60,
                'role_id' => 5,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            37 => 
            array (
                'id' => 61,
                'role_id' => 6,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            38 => 
            array (
                'id' => 62,
                'role_id' => 7,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            39 => 
            array (
                'id' => 63,
                'role_id' => 8,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            40 => 
            array (
                'id' => 64,
                'role_id' => 2,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            41 => 
            array (
                'id' => 65,
                'role_id' => 5,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            42 => 
            array (
                'id' => 66,
                'role_id' => 6,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            43 => 
            array (
                'id' => 67,
                'role_id' => 7,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            44 => 
            array (
                'id' => 68,
                'role_id' => 8,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            45 => 
            array (
                'id' => 69,
                'role_id' => 2,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            46 => 
            array (
                'id' => 70,
                'role_id' => 3,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            47 => 
            array (
                'id' => 71,
                'role_id' => 5,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            48 => 
            array (
                'id' => 72,
                'role_id' => 6,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            49 => 
            array (
                'id' => 73,
                'role_id' => 7,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            50 => 
            array (
                'id' => 74,
                'role_id' => 8,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            51 => 
            array (
                'id' => 75,
                'role_id' => 2,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            52 => 
            array (
                'id' => 76,
                'role_id' => 3,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            53 => 
            array (
                'id' => 77,
                'role_id' => 5,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            54 => 
            array (
                'id' => 78,
                'role_id' => 6,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            55 => 
            array (
                'id' => 79,
                'role_id' => 7,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            56 => 
            array (
                'id' => 80,
                'role_id' => 8,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            57 => 
            array (
                'id' => 81,
                'role_id' => 3,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            58 => 
            array (
                'id' => 82,
                'role_id' => 5,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            59 => 
            array (
                'id' => 83,
                'role_id' => 6,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            60 => 
            array (
                'id' => 84,
                'role_id' => 7,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            61 => 
            array (
                'id' => 85,
                'role_id' => 8,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            62 => 
            array (
                'id' => 86,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            63 => 
            array (
                'id' => 87,
                'role_id' => 2,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            64 => 
            array (
                'id' => 88,
                'role_id' => 3,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            65 => 
            array (
                'id' => 89,
                'role_id' => 5,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            66 => 
            array (
                'id' => 90,
                'role_id' => 6,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            67 => 
            array (
                'id' => 91,
                'role_id' => 7,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            68 => 
            array (
                'id' => 92,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            69 => 
            array (
                'id' => 93,
                'role_id' => 2,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            70 => 
            array (
                'id' => 94,
                'role_id' => 3,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            71 => 
            array (
                'id' => 95,
                'role_id' => 4,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            72 => 
            array (
                'id' => 96,
                'role_id' => 5,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            73 => 
            array (
                'id' => 97,
                'role_id' => 6,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            74 => 
            array (
                'id' => 98,
                'role_id' => 7,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            75 => 
            array (
                'id' => 99,
                'role_id' => 8,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            76 => 
            array (
                'id' => 100,
                'role_id' => 9,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            77 => 
            array (
                'id' => 101,
                'role_id' => 10,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            78 => 
            array (
                'id' => 102,
                'role_id' => 2,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            79 => 
            array (
                'id' => 103,
                'role_id' => 3,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            80 => 
            array (
                'id' => 104,
                'role_id' => 4,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            81 => 
            array (
                'id' => 105,
                'role_id' => 5,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            82 => 
            array (
                'id' => 106,
                'role_id' => 6,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            83 => 
            array (
                'id' => 107,
                'role_id' => 7,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            84 => 
            array (
                'id' => 108,
                'role_id' => 8,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            85 => 
            array (
                'id' => 109,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            86 => 
            array (
                'id' => 110,
                'role_id' => 10,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            87 => 
            array (
                'id' => 116,
                'role_id' => 2,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            88 => 
            array (
                'id' => 117,
                'role_id' => 4,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            89 => 
            array (
                'id' => 118,
                'role_id' => 5,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            90 => 
            array (
                'id' => 119,
                'role_id' => 6,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            91 => 
            array (
                'id' => 120,
                'role_id' => 7,
                'menu_id' => 427,
                'created_at' => '2022-09-22 21:01:42',
                'updated_at' => '2022-09-22 21:01:42',
            ),
            92 => 
            array (
                'id' => 124,
                'role_id' => 2,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            93 => 
            array (
                'id' => 125,
                'role_id' => 3,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            94 => 
            array (
                'id' => 126,
                'role_id' => 5,
                'menu_id' => 428,
                'created_at' => '2022-09-22 22:55:22',
                'updated_at' => '2022-09-22 22:55:22',
            ),
            95 => 
            array (
                'id' => 127,
                'role_id' => 2,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            96 => 
            array (
                'id' => 128,
                'role_id' => 3,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            97 => 
            array (
                'id' => 129,
                'role_id' => 5,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            98 => 
            array (
                'id' => 130,
                'role_id' => 6,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            99 => 
            array (
                'id' => 131,
                'role_id' => 7,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            100 => 
            array (
                'id' => 132,
                'role_id' => 8,
                'menu_id' => 429,
                'created_at' => '2022-09-23 00:08:36',
                'updated_at' => '2022-09-23 00:08:36',
            ),
            101 => 
            array (
                'id' => 133,
                'role_id' => 2,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            102 => 
            array (
                'id' => 134,
                'role_id' => 3,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            103 => 
            array (
                'id' => 135,
                'role_id' => 4,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            104 => 
            array (
                'id' => 136,
                'role_id' => 5,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            105 => 
            array (
                'id' => 137,
                'role_id' => 6,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            106 => 
            array (
                'id' => 138,
                'role_id' => 7,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            107 => 
            array (
                'id' => 139,
                'role_id' => 8,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            108 => 
            array (
                'id' => 140,
                'role_id' => 9,
                'menu_id' => 430,
                'created_at' => '2022-09-23 00:09:48',
                'updated_at' => '2022-09-23 00:09:48',
            ),
            109 => 
            array (
                'id' => 181,
                'role_id' => 2,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            110 => 
            array (
                'id' => 182,
                'role_id' => 3,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            111 => 
            array (
                'id' => 183,
                'role_id' => 4,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            112 => 
            array (
                'id' => 184,
                'role_id' => 5,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            113 => 
            array (
                'id' => 185,
                'role_id' => 6,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            114 => 
            array (
                'id' => 186,
                'role_id' => 7,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            115 => 
            array (
                'id' => 187,
                'role_id' => 8,
                'menu_id' => 431,
                'created_at' => '2022-09-23 00:38:35',
                'updated_at' => '2022-09-23 00:38:35',
            ),
            116 => 
            array (
                'id' => 188,
                'role_id' => 2,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            117 => 
            array (
                'id' => 189,
                'role_id' => 3,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            118 => 
            array (
                'id' => 190,
                'role_id' => 4,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            119 => 
            array (
                'id' => 191,
                'role_id' => 5,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            120 => 
            array (
                'id' => 192,
                'role_id' => 6,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            121 => 
            array (
                'id' => 193,
                'role_id' => 7,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            122 => 
            array (
                'id' => 194,
                'role_id' => 8,
                'menu_id' => 432,
                'created_at' => '2022-09-23 00:39:02',
                'updated_at' => '2022-09-23 00:39:02',
            ),
            123 => 
            array (
                'id' => 195,
                'role_id' => 2,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            124 => 
            array (
                'id' => 196,
                'role_id' => 3,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            125 => 
            array (
                'id' => 197,
                'role_id' => 5,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            126 => 
            array (
                'id' => 198,
                'role_id' => 6,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            127 => 
            array (
                'id' => 199,
                'role_id' => 7,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            128 => 
            array (
                'id' => 200,
                'role_id' => 8,
                'menu_id' => 433,
                'created_at' => '2022-09-24 16:18:47',
                'updated_at' => '2022-09-24 16:18:47',
            ),
            129 => 
            array (
                'id' => 201,
                'role_id' => 2,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            130 => 
            array (
                'id' => 202,
                'role_id' => 3,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            131 => 
            array (
                'id' => 203,
                'role_id' => 5,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            132 => 
            array (
                'id' => 204,
                'role_id' => 6,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            133 => 
            array (
                'id' => 205,
                'role_id' => 7,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            134 => 
            array (
                'id' => 206,
                'role_id' => 8,
                'menu_id' => 434,
                'created_at' => '2022-09-24 16:19:12',
                'updated_at' => '2022-09-24 16:19:12',
            ),
            135 => 
            array (
                'id' => 210,
                'role_id' => 3,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            136 => 
            array (
                'id' => 211,
                'role_id' => 4,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            137 => 
            array (
                'id' => 212,
                'role_id' => 5,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            138 => 
            array (
                'id' => 213,
                'role_id' => 6,
                'menu_id' => 420,
                'created_at' => '2022-09-24 19:32:16',
                'updated_at' => '2022-09-24 19:32:16',
            ),
            139 => 
            array (
                'id' => 214,
                'role_id' => 5,
                'menu_id' => 435,
                'created_at' => '2022-09-25 13:51:35',
                'updated_at' => '2022-09-25 13:51:35',
            ),
            140 => 
            array (
                'id' => 215,
                'role_id' => 5,
                'menu_id' => 436,
                'created_at' => '2022-10-01 12:50:57',
                'updated_at' => '2022-10-01 12:50:57',
            ),
        ));
        
        
    }
}