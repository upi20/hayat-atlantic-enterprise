<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => '22',
                'nama' => 'Ahmad',
                'no_telepon' => '088977862031',
                'no_whatsapp' => '088977862031',
                'alamat' => 'Baleendah',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-11-25 17:39:34',
                'updated_at' => '2022-11-25 17:39:34',
            ),
        ));
        
        
    }
}