<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_permissions')->delete();
        
        \DB::table('p_role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 168,
                'role_id' => 5,
            ),
            1 => 
            array (
                'permission_id' => 169,
                'role_id' => 5,
            ),
            2 => 
            array (
                'permission_id' => 170,
                'role_id' => 5,
            ),
            3 => 
            array (
                'permission_id' => 172,
                'role_id' => 5,
            ),
            4 => 
            array (
                'permission_id' => 173,
                'role_id' => 5,
            ),
            5 => 
            array (
                'permission_id' => 174,
                'role_id' => 5,
            ),
            6 => 
            array (
                'permission_id' => 175,
                'role_id' => 5,
            ),
            7 => 
            array (
                'permission_id' => 177,
                'role_id' => 5,
            ),
            8 => 
            array (
                'permission_id' => 178,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 178,
                'role_id' => 2,
            ),
            10 => 
            array (
                'permission_id' => 178,
                'role_id' => 3,
            ),
            11 => 
            array (
                'permission_id' => 178,
                'role_id' => 4,
            ),
            12 => 
            array (
                'permission_id' => 178,
                'role_id' => 5,
            ),
            13 => 
            array (
                'permission_id' => 178,
                'role_id' => 6,
            ),
            14 => 
            array (
                'permission_id' => 178,
                'role_id' => 7,
            ),
            15 => 
            array (
                'permission_id' => 178,
                'role_id' => 8,
            ),
            16 => 
            array (
                'permission_id' => 178,
                'role_id' => 9,
            ),
            17 => 
            array (
                'permission_id' => 178,
                'role_id' => 10,
            ),
            18 => 
            array (
                'permission_id' => 179,
                'role_id' => 5,
            ),
            19 => 
            array (
                'permission_id' => 181,
                'role_id' => 5,
            ),
        ));
        
        
    }
}