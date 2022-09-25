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
                'id' => '1',
                'nama' => 'Customer 1',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '+62857981325051',
                'alamat' => 'Alamat',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
        ));
        
        
    }
}