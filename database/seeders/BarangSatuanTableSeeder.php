<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSatuanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_satuan')->delete();
        
        \DB::table('barang_satuan')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Pcs',
                'keterangan' => 'Pieces',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:53:44',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Set',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'M',
                'keterangan' => 'Meter',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:53:11',
            ),
            3 => 
            array (
                'id' => '4',
                'nama' => 'Unit',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'nama' => 'Box',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'nama' => 'Roll',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'nama' => 'Lbr',
                'keterangan' => 'Lebar',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:53:05',
            ),
            7 => 
            array (
                'id' => '8',
                'nama' => 'Ikat',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '9',
                'nama' => 'Bks',
                'keterangan' => 'Bungkus',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:52:26',
            ),
            9 => 
            array (
                'id' => '10',
                'nama' => 'Btl',
                'keterangan' => 'Botol',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:52:41',
            ),
            10 => 
            array (
                'id' => '11',
                'nama' => 'Kg',
                'keterangan' => 'Kilo Gram',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:52:50',
            ),
            11 => 
            array (
                'id' => '12',
                'nama' => 'L',
                'keterangan' => 'Liter',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-18 19:52:58',
            ),
            12 => 
            array (
                'id' => '13',
                'nama' => 'Pack',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '14',
                'nama' => 'Galon',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '15',
                'nama' => 'Dus',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '1',
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}