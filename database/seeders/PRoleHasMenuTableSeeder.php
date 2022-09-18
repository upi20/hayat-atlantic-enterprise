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
        ));
        
        
    }
}