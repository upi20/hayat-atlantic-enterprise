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
                'nama' => 'Wahid',
                'no_telepon' => '+628579813251',
                'no_whatsapp' => NULL,
                'alamat' => 'Jl. Suryani No 2 RT03 RW6, Babakan Ciparay Bandung',
                'updated_by' => '5',
                'created_by' => '1',
                'created_at' => '2022-09-22 22:56:52',
                'updated_at' => '2023-09-12 08:58:52',
            ),
            1 => 
            array (
                'id' => '17',
                'nama' => 'Hari Baru',
                'no_telepon' => '+628579813250',
                'no_whatsapp' => NULL,
                'alamat' => 'Jl. Lengkong Kecil no 55, Bandung',
                'updated_by' => '5',
                'created_by' => '5',
                'created_at' => '2022-10-11 16:58:59',
                'updated_at' => '2023-09-12 09:03:20',
            ),
            2 => 
            array (
                'id' => '18',
                'nama' => 'Handip Yusuf Kurniawan',
                'no_telepon' => '+628798132502',
                'no_whatsapp' => '+628798132503',
                'alamat' => 'Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-10-15 18:15:35',
                'updated_at' => '2022-10-15 18:15:35',
            ),
            3 => 
            array (
                'id' => '19',
                'nama' => 'Suhid',
                'no_telepon' => '+628798132502',
                'no_whatsapp' => NULL,
                'alamat' => 'Jl. Karang Tineung Dalam No.56, Sukajadi Bandung',
                'updated_by' => '5',
                'created_by' => '1',
                'created_at' => '2022-10-15 18:15:35',
                'updated_at' => '2023-09-12 09:05:24',
            ),
            4 => 
            array (
                'id' => '20',
                'nama' => 'Rayhan',
                'no_telepon' => '+62986733552',
                'no_whatsapp' => NULL,
                'alamat' => 'Jl. Duren 1 No 21 Komp. Graha Sari Endah, Baleendah, Bandung Selatan',
                'updated_by' => '5',
                'created_by' => '1',
                'created_at' => '2023-07-07 10:37:26',
                'updated_at' => '2023-09-12 09:04:36',
            ),
        ));
        
        
    }
}