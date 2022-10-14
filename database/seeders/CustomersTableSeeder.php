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
                'no_telepon' => '+628579813251',
                'no_whatsapp' => '+6285798132501',
                'alamat' => 'Alamat 1',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Customer 2',
                'no_telepon' => '+628579813252',
                'no_whatsapp' => '+6285798132502',
                'alamat' => 'Alamat 2',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'Customer 3',
                'no_telepon' => '+628579813253',
                'no_whatsapp' => '+6285798132503',
                'alamat' => 'Alamat 3',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            3 => 
            array (
                'id' => '4',
                'nama' => 'Customer 4',
                'no_telepon' => '+628579813254',
                'no_whatsapp' => '+6285798132504',
                'alamat' => 'Alamat 4',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            4 => 
            array (
                'id' => '5',
                'nama' => 'Customer 5',
                'no_telepon' => '+628579813255',
                'no_whatsapp' => '+6285798132505',
                'alamat' => 'Alamat 5',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            5 => 
            array (
                'id' => '6',
                'nama' => 'Customer 6',
                'no_telepon' => '+628579813256',
                'no_whatsapp' => '+6285798132506',
                'alamat' => 'Alamat 6',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            6 => 
            array (
                'id' => '7',
                'nama' => 'Customer 7',
                'no_telepon' => '+628579813257',
                'no_whatsapp' => '+6285798132507',
                'alamat' => 'Alamat 7',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            7 => 
            array (
                'id' => '8',
                'nama' => 'Customer 8',
                'no_telepon' => '+628579813258',
                'no_whatsapp' => '+6285798132508',
                'alamat' => 'Alamat 8',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            8 => 
            array (
                'id' => '9',
                'nama' => 'Customer 9',
                'no_telepon' => '+628579813259',
                'no_whatsapp' => '+6285798132509',
                'alamat' => 'Alamat 9',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            9 => 
            array (
                'id' => '10',
                'nama' => 'Customer 10',
                'no_telepon' => '+6285798132510',
                'no_whatsapp' => '+62857981325010',
                'alamat' => 'Alamat 10',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            10 => 
            array (
                'id' => '11',
                'nama' => 'Customer 11',
                'no_telepon' => '+6285798132511',
                'no_whatsapp' => '+62857981325011',
                'alamat' => 'Alamat 11',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            11 => 
            array (
                'id' => '12',
                'nama' => 'Customer 12',
                'no_telepon' => '+6285798132512',
                'no_whatsapp' => '+62857981325012',
                'alamat' => 'Alamat 12',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            12 => 
            array (
                'id' => '13',
                'nama' => 'Customer 13',
                'no_telepon' => '+6285798132513',
                'no_whatsapp' => '+62857981325013',
                'alamat' => 'Alamat 13',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            13 => 
            array (
                'id' => '14',
                'nama' => 'Customer 14',
                'no_telepon' => '+6285798132514',
                'no_whatsapp' => '+62857981325014',
                'alamat' => 'Alamat 14',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            14 => 
            array (
                'id' => '15',
                'nama' => 'Customer 15',
                'no_telepon' => '+6285798132515',
                'no_whatsapp' => '+62857981325015',
                'alamat' => 'Alamat 15',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2022-09-22 22:57:07',
            ),
            15 => 
            array (
                'id' => '16',
                'nama' => 'Daniel Nugraha',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '+6285798132505',
                'alamat' => 'Pontianak',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-10-10 14:19:34',
                'updated_at' => '2022-10-10 14:19:34',
            ),
            16 => 
            array (
                'id' => '17',
                'nama' => 'Dr Baru',
                'no_telepon' => '+628579813250',
                'no_whatsapp' => '+628579813250',
                'alamat' => 'Lengkong',
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-10-11 16:58:59',
                'updated_at' => '2022-10-11 16:58:59',
            ),
        ));
        
        
    }
}