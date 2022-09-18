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
                'id' => 56,
                'role_id' => 3,
                'menu_id' => 420,
                'created_at' => '2022-09-18 21:20:43',
                'updated_at' => '2022-09-18 21:20:43',
            ),
            37 => 
            array (
                'id' => 57,
                'role_id' => 4,
                'menu_id' => 420,
                'created_at' => '2022-09-18 21:20:43',
                'updated_at' => '2022-09-18 21:20:43',
            ),
            38 => 
            array (
                'id' => 58,
                'role_id' => 5,
                'menu_id' => 420,
                'created_at' => '2022-09-18 21:20:43',
                'updated_at' => '2022-09-18 21:20:43',
            ),
            39 => 
            array (
                'id' => 59,
                'role_id' => 6,
                'menu_id' => 420,
                'created_at' => '2022-09-18 21:20:43',
                'updated_at' => '2022-09-18 21:20:43',
            ),
            40 => 
            array (
                'id' => 60,
                'role_id' => 5,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            41 => 
            array (
                'id' => 61,
                'role_id' => 6,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            42 => 
            array (
                'id' => 62,
                'role_id' => 7,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            43 => 
            array (
                'id' => 63,
                'role_id' => 8,
                'menu_id' => 421,
                'created_at' => '2022-09-18 21:21:44',
                'updated_at' => '2022-09-18 21:21:44',
            ),
            44 => 
            array (
                'id' => 64,
                'role_id' => 2,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            45 => 
            array (
                'id' => 65,
                'role_id' => 5,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            46 => 
            array (
                'id' => 66,
                'role_id' => 6,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            47 => 
            array (
                'id' => 67,
                'role_id' => 7,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            48 => 
            array (
                'id' => 68,
                'role_id' => 8,
                'menu_id' => 422,
                'created_at' => '2022-09-18 21:22:20',
                'updated_at' => '2022-09-18 21:22:20',
            ),
            49 => 
            array (
                'id' => 69,
                'role_id' => 2,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            50 => 
            array (
                'id' => 70,
                'role_id' => 3,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            51 => 
            array (
                'id' => 71,
                'role_id' => 5,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            52 => 
            array (
                'id' => 72,
                'role_id' => 6,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            53 => 
            array (
                'id' => 73,
                'role_id' => 7,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            54 => 
            array (
                'id' => 74,
                'role_id' => 8,
                'menu_id' => 423,
                'created_at' => '2022-09-18 21:23:37',
                'updated_at' => '2022-09-18 21:23:37',
            ),
            55 => 
            array (
                'id' => 75,
                'role_id' => 2,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            56 => 
            array (
                'id' => 76,
                'role_id' => 3,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            57 => 
            array (
                'id' => 77,
                'role_id' => 5,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            58 => 
            array (
                'id' => 78,
                'role_id' => 6,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            59 => 
            array (
                'id' => 79,
                'role_id' => 7,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            60 => 
            array (
                'id' => 80,
                'role_id' => 8,
                'menu_id' => 424,
                'created_at' => '2022-09-18 21:24:18',
                'updated_at' => '2022-09-18 21:24:18',
            ),
            61 => 
            array (
                'id' => 81,
                'role_id' => 3,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            62 => 
            array (
                'id' => 82,
                'role_id' => 5,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            63 => 
            array (
                'id' => 83,
                'role_id' => 6,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            64 => 
            array (
                'id' => 84,
                'role_id' => 7,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            65 => 
            array (
                'id' => 85,
                'role_id' => 8,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            66 => 
            array (
                'id' => 86,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2022-09-18 21:25:45',
                'updated_at' => '2022-09-18 21:25:45',
            ),
            67 => 
            array (
                'id' => 87,
                'role_id' => 2,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            68 => 
            array (
                'id' => 88,
                'role_id' => 3,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            69 => 
            array (
                'id' => 89,
                'role_id' => 5,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            70 => 
            array (
                'id' => 90,
                'role_id' => 6,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            71 => 
            array (
                'id' => 91,
                'role_id' => 7,
                'menu_id' => 426,
                'created_at' => '2022-09-18 21:26:25',
                'updated_at' => '2022-09-18 21:26:25',
            ),
            72 => 
            array (
                'id' => 92,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            73 => 
            array (
                'id' => 93,
                'role_id' => 2,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:01',
                'updated_at' => '2022-09-18 21:48:01',
            ),
            74 => 
            array (
                'id' => 94,
                'role_id' => 3,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            75 => 
            array (
                'id' => 95,
                'role_id' => 4,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            76 => 
            array (
                'id' => 96,
                'role_id' => 5,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            77 => 
            array (
                'id' => 97,
                'role_id' => 6,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            78 => 
            array (
                'id' => 98,
                'role_id' => 7,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            79 => 
            array (
                'id' => 99,
                'role_id' => 8,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            80 => 
            array (
                'id' => 100,
                'role_id' => 9,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            81 => 
            array (
                'id' => 101,
                'role_id' => 10,
                'menu_id' => 418,
                'created_at' => '2022-09-18 21:48:02',
                'updated_at' => '2022-09-18 21:48:02',
            ),
            82 => 
            array (
                'id' => 102,
                'role_id' => 2,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            83 => 
            array (
                'id' => 103,
                'role_id' => 3,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            84 => 
            array (
                'id' => 104,
                'role_id' => 4,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            85 => 
            array (
                'id' => 105,
                'role_id' => 5,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            86 => 
            array (
                'id' => 106,
                'role_id' => 6,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            87 => 
            array (
                'id' => 107,
                'role_id' => 7,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            88 => 
            array (
                'id' => 108,
                'role_id' => 8,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            89 => 
            array (
                'id' => 109,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
            90 => 
            array (
                'id' => 110,
                'role_id' => 10,
                'menu_id' => 419,
                'created_at' => '2022-09-18 22:53:42',
                'updated_at' => '2022-09-18 22:53:42',
            ),
        ));
        
        
    }
}