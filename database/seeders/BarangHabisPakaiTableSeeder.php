<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangHabisPakaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang_habis_pakai')->delete();
        
        \DB::table('barang_habis_pakai')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Lakban hitam',
                'kode' => 'PTLBH01',
                'jenis' => '4',
                'satuan' => '1',
                'harga' => '15000',
                'qty' => '15',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-11-12 16:35:53',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Lakban bening',
                'kode' => 'PTLBB02',
                'jenis' => '4',
                'satuan' => '1',
                'harga' => '10000',
                'qty' => '5',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-11-12 17:29:59',
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'Lakban merah',
                'kode' => 'PTLBM03',
                'jenis' => '4',
                'satuan' => '1',
                'harga' => '16000',
                'qty' => '6',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'nama' => 'Selotip listrik',
                'kode' => 'PTSLT04',
                'jenis' => '4',
                'satuan' => '1',
                'harga' => '7500',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-11-12 17:29:59',
            ),
            4 => 
            array (
                'id' => '5',
                'nama' => 'Isi staples 13/8',
                'kode' => 'PTISK05',
                'jenis' => '4',
                'satuan' => '5',
                'harga' => '15500',
                'qty' => '2',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'nama' => 'Isi staples 23/8',
                'kode' => 'PTISB06',
                'jenis' => '4',
                'satuan' => '5',
                'harga' => '21000',
                'qty' => '2',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'nama' => 'Peniti',
                'kode' => 'PTPNT07',
                'jenis' => '4',
                'satuan' => '5',
                'harga' => '35000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '8',
                'nama' => 'Paku payung',
                'kode' => 'PTPPY08',
                'jenis' => '4',
                'satuan' => '5',
                'harga' => '9000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '9',
                'nama' => 'Sekrup',
                'kode' => 'PTSKR09',
                'jenis' => '4',
                'satuan' => '5',
                'harga' => '41000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '10',
                'nama' => 'Paku beton',
                'kode' => 'PTPBT10',
                'jenis' => '4',
                'satuan' => '5',
                'harga' => '46000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '11',
                'nama' => 'Tali rapia',
                'kode' => 'PTTRP11',
                'jenis' => '4',
                'satuan' => '6',
                'harga' => '125000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '12',
                'nama' => 'Karung',
                'kode' => 'PTKRG12',
                'jenis' => '4',
                'satuan' => '7',
                'harga' => '3000',
                'qty' => '20',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '13',
                'nama' => 'Kayu reng',
                'kode' => 'PTKRG13',
                'jenis' => '4',
                'satuan' => '8',
                'harga' => '90000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '14',
                'nama' => 'Deterjen',
                'kode' => 'KPDTJ14',
                'jenis' => '5',
                'satuan' => '9',
                'harga' => '18000',
                'qty' => '3',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '15',
                'nama' => 'Bayclin',
                'kode' => 'KPBYC15',
                'jenis' => '5',
                'satuan' => '10',
                'harga' => '18000',
                'qty' => '3',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '16',
                'nama' => 'Oxalic acid',
                'kode' => 'KPOAC16',
                'jenis' => '5',
                'satuan' => '11',
                'harga' => '25000',
                'qty' => '2',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '17',
                'nama' => 'Bensin',
                'kode' => 'KPBSN17',
                'jenis' => '5',
                'satuan' => '12',
                'harga' => '7650',
                'qty' => '2',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '18',
                'nama' => 'Sabun cuci piring',
                'kode' => 'KPSCP18',
                'jenis' => '5',
                'satuan' => '9',
                'harga' => '20000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '19',
                'nama' => 'Masker',
                'kode' => 'KKMSK19',
                'jenis' => '6',
                'satuan' => '5',
                'harga' => '25000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '20',
                'nama' => 'Handsanitizer',
                'kode' => 'KKHST20',
                'jenis' => '6',
                'satuan' => '10',
                'harga' => '25000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '21',
                'nama' => 'Materai 10.000',
                'kode' => 'KKMTR21',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '12000',
                'qty' => '2',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '22',
                'nama' => 'Tisu',
                'kode' => 'KKTSU22',
                'jenis' => '6',
                'satuan' => '13',
                'harga' => '16000',
                'qty' => '2',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '23',
                'nama' => 'Pewangi ruangan',
                'kode' => 'KKPRG23',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '25000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '24',
                'nama' => 'Air galon',
                'kode' => 'KKAGL24',
                'jenis' => '6',
                'satuan' => '14',
                'harga' => '6000',
                'qty' => '9',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => '2022-09-24 17:18:58',
            ),
            24 => 
            array (
                'id' => '25',
                'nama' => 'Kertas 3 ply NCR PRS',
                'kode' => 'KKCRS25',
                'jenis' => '6',
                'satuan' => '5',
                'harga' => '455000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '26',
                'nama' => 'Tinta hitam',
                'kode' => 'KKTHT26',
                'jenis' => '6',
                'satuan' => '10',
                'harga' => '25000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '27',
                'nama' => 'Isi staples no.10',
                'kode' => 'KKIST27',
                'jenis' => '6',
                'satuan' => '5',
                'harga' => '23000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '28',
                'nama' => 'Tip ex',
                'kode' => 'KKTEX28',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '7000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '29',
                'nama' => 'Isi cutter ',
                'kode' => 'KKICT29',
                'jenis' => '6',
                'satuan' => '5',
                'harga' => '8000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '30',
                'nama' => 'Karet kuning',
                'kode' => 'KKKKN30',
                'jenis' => '6',
                'satuan' => '9',
                'harga' => '7000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '31',
                'nama' => 'Plastik 50x40',
                'kode' => 'KKPLS31',
                'jenis' => '6',
                'satuan' => '13',
                'harga' => '9500',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '32',
                'nama' => 'Amplop 104',
                'kode' => 'KKAMP32',
                'jenis' => '6',
                'satuan' => '5',
                'harga' => '18000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '33',
                'nama' => 'Amplop no. 90',
                'kode' => 'KKAMP33',
                'jenis' => '6',
                'satuan' => '5',
                'harga' => '22000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '34',
                'nama' => 'Pensil',
                'kode' => 'KKPNS24',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '4000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '35',
                'nama' => 'Penghapus',
                'kode' => 'KKPHP25',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '2000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '36',
                'nama' => 'Spidol Permanen',
                'kode' => 'KKSPP26',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '7000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '37',
                'nama' => 'Hekter',
                'kode' => 'KKHKT27',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '10000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '38',
                'nama' => 'Tinta stempel',
                'kode' => 'KKTST28',
                'jenis' => '6',
                'satuan' => '10',
                'harga' => '6000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '39',
                'nama' => 'Stempel',
                'kode' => 'KKSTP29',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '18000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '40',
                'nama' => 'Gunting besar',
                'kode' => 'KKGTB30',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '15000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => '41',
                'nama' => 'Cutter besar',
                'kode' => 'KKCTB31',
                'jenis' => '6',
                'satuan' => '1',
                'harga' => '12000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => '42',
                'nama' => 'Aqua gelas',
                'kode' => 'KKAQG42',
                'jenis' => '6',
                'satuan' => '15',
                'harga' => '23000',
                'qty' => '1',
                'keterangan' => 'Data Awal',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-09-17 22:04:43',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => '43',
                'nama' => 'Lakb',
                'kode' => 'PB',
                'jenis' => '2',
                'satuan' => '1',
                'harga' => '1000',
                'qty' => '0',
                'keterangan' => NULL,
                'updated_by' => NULL,
                'created_by' => '5',
                'created_at' => '2022-09-24 19:42:18',
                'updated_at' => '2022-09-24 19:42:18',
            ),
            43 => 
            array (
                'id' => '44',
                'nama' => 'Paku Reng',
                'kode' => 'PT005',
                'jenis' => '4',
                'satuan' => '1',
                'harga' => '5000',
                'qty' => '80',
                'keterangan' => 'Testing',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2022-11-12 16:28:56',
                'updated_at' => '2022-11-12 17:29:59',
            ),
        ));
        
        
    }
}