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

        \DB::table('p_role_has_permissions')->insert(array(
            0 =>
            array(
                'permission_id' => 1,
                'role_id' => 1,
            )
        ));
    }
}
