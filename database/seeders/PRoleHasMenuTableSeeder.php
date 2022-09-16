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
                'id' => '1',
                'role_id' => '1',
                'menu_id' => '410',
                'created_at' => '2022-09-15 21:17:18',
                'updated_at' => '2022-09-15 21:17:18',
            ),
            1 => 
            array (
                'id' => '2',
                'role_id' => '1',
                'menu_id' => '346',
                'created_at' => '2022-09-15 21:18:54',
                'updated_at' => '2022-09-15 21:18:54',
            ),
        ));
        
        
    }
}