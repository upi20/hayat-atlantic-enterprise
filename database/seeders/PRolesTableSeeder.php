<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_roles')->delete();
        
        \DB::table('p_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'SuperAdmin',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-06 14:36:10',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Direktur',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:24:00',
                'updated_at' => '2022-09-18 21:05:37',
                'updated_by' => 5,
                'created_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Keuangan',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:25:40',
                'updated_at' => '2022-09-15 08:25:40',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Human Resource Development',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:25:50',
                'updated_at' => '2022-09-15 08:25:50',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Administrasi',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:25:59',
                'updated_at' => '2022-09-18 21:01:24',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'General Manager',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:27:03',
                'updated_at' => '2022-09-18 21:00:07',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Kepala Bagian Warehouse',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:27:24',
                'updated_at' => '2022-09-15 08:27:24',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Warehouse',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:27:35',
                'updated_at' => '2022-09-15 08:27:35',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Kepala Bagian Delivery',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:27:43',
                'updated_at' => '2022-09-15 08:27:43',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dilivery',
                'guard_name' => 'web',
                'created_at' => '2022-09-15 08:27:50',
                'updated_at' => '2022-09-15 08:27:50',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
        ));
        
        
    }
}