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
                'permission_id' => '109',
                'role_id' => '1',
            ),
            1 => 
            array (
                'permission_id' => '109',
                'role_id' => '2',
            ),
            2 => 
            array (
                'permission_id' => '109',
                'role_id' => '3',
            ),
            3 => 
            array (
                'permission_id' => '109',
                'role_id' => '4',
            ),
            4 => 
            array (
                'permission_id' => '109',
                'role_id' => '5',
            ),
            5 => 
            array (
                'permission_id' => '109',
                'role_id' => '6',
            ),
            6 => 
            array (
                'permission_id' => '109',
                'role_id' => '7',
            ),
            7 => 
            array (
                'permission_id' => '109',
                'role_id' => '8',
            ),
            8 => 
            array (
                'permission_id' => '109',
                'role_id' => '9',
            ),
            9 => 
            array (
                'permission_id' => '109',
                'role_id' => '10',
            ),
            10 => 
            array (
                'permission_id' => '168',
                'role_id' => '5',
            ),
            11 => 
            array (
                'permission_id' => '169',
                'role_id' => '5',
            ),
            12 => 
            array (
                'permission_id' => '170',
                'role_id' => '5',
            ),
            13 => 
            array (
                'permission_id' => '172',
                'role_id' => '5',
            ),
            14 => 
            array (
                'permission_id' => '173',
                'role_id' => '5',
            ),
            15 => 
            array (
                'permission_id' => '174',
                'role_id' => '5',
            ),
            16 => 
            array (
                'permission_id' => '175',
                'role_id' => '5',
            ),
            17 => 
            array (
                'permission_id' => '177',
                'role_id' => '5',
            ),
            18 => 
            array (
                'permission_id' => '178',
                'role_id' => '1',
            ),
            19 => 
            array (
                'permission_id' => '178',
                'role_id' => '2',
            ),
            20 => 
            array (
                'permission_id' => '178',
                'role_id' => '3',
            ),
            21 => 
            array (
                'permission_id' => '178',
                'role_id' => '4',
            ),
            22 => 
            array (
                'permission_id' => '178',
                'role_id' => '5',
            ),
            23 => 
            array (
                'permission_id' => '178',
                'role_id' => '6',
            ),
            24 => 
            array (
                'permission_id' => '178',
                'role_id' => '7',
            ),
            25 => 
            array (
                'permission_id' => '178',
                'role_id' => '8',
            ),
            26 => 
            array (
                'permission_id' => '178',
                'role_id' => '9',
            ),
            27 => 
            array (
                'permission_id' => '178',
                'role_id' => '10',
            ),
            28 => 
            array (
                'permission_id' => '179',
                'role_id' => '5',
            ),
            29 => 
            array (
                'permission_id' => '181',
                'role_id' => '5',
            ),
            30 => 
            array (
                'permission_id' => '183',
                'role_id' => '1',
            ),
            31 => 
            array (
                'permission_id' => '183',
                'role_id' => '2',
            ),
            32 => 
            array (
                'permission_id' => '183',
                'role_id' => '3',
            ),
            33 => 
            array (
                'permission_id' => '183',
                'role_id' => '5',
            ),
            34 => 
            array (
                'permission_id' => '183',
                'role_id' => '6',
            ),
            35 => 
            array (
                'permission_id' => '183',
                'role_id' => '7',
            ),
            36 => 
            array (
                'permission_id' => '183',
                'role_id' => '8',
            ),
            37 => 
            array (
                'permission_id' => '183',
                'role_id' => '9',
            ),
            38 => 
            array (
                'permission_id' => '183',
                'role_id' => '10',
            ),
            39 => 
            array (
                'permission_id' => '184',
                'role_id' => '5',
            ),
            40 => 
            array (
                'permission_id' => '185',
                'role_id' => '5',
            ),
            41 => 
            array (
                'permission_id' => '186',
                'role_id' => '5',
            ),
            42 => 
            array (
                'permission_id' => '187',
                'role_id' => '1',
            ),
            43 => 
            array (
                'permission_id' => '187',
                'role_id' => '2',
            ),
            44 => 
            array (
                'permission_id' => '187',
                'role_id' => '3',
            ),
            45 => 
            array (
                'permission_id' => '187',
                'role_id' => '5',
            ),
            46 => 
            array (
                'permission_id' => '187',
                'role_id' => '6',
            ),
            47 => 
            array (
                'permission_id' => '187',
                'role_id' => '7',
            ),
            48 => 
            array (
                'permission_id' => '187',
                'role_id' => '8',
            ),
            49 => 
            array (
                'permission_id' => '187',
                'role_id' => '9',
            ),
            50 => 
            array (
                'permission_id' => '187',
                'role_id' => '10',
            ),
            51 => 
            array (
                'permission_id' => '188',
                'role_id' => '5',
            ),
            52 => 
            array (
                'permission_id' => '189',
                'role_id' => '5',
            ),
            53 => 
            array (
                'permission_id' => '190',
                'role_id' => '5',
            ),
            54 => 
            array (
                'permission_id' => '191',
                'role_id' => '5',
            ),
            55 => 
            array (
                'permission_id' => '192',
                'role_id' => '5',
            ),
            56 => 
            array (
                'permission_id' => '193',
                'role_id' => '5',
            ),
            57 => 
            array (
                'permission_id' => '194',
                'role_id' => '5',
            ),
            58 => 
            array (
                'permission_id' => '195',
                'role_id' => '5',
            ),
            59 => 
            array (
                'permission_id' => '196',
                'role_id' => '5',
            ),
            60 => 
            array (
                'permission_id' => '197',
                'role_id' => '5',
            ),
            61 => 
            array (
                'permission_id' => '198',
                'role_id' => '5',
            ),
            62 => 
            array (
                'permission_id' => '199',
                'role_id' => '5',
            ),
            63 => 
            array (
                'permission_id' => '200',
                'role_id' => '5',
            ),
            64 => 
            array (
                'permission_id' => '201',
                'role_id' => '5',
            ),
            65 => 
            array (
                'permission_id' => '202',
                'role_id' => '5',
            ),
            66 => 
            array (
                'permission_id' => '203',
                'role_id' => '5',
            ),
            67 => 
            array (
                'permission_id' => '204',
                'role_id' => '5',
            ),
            68 => 
            array (
                'permission_id' => '205',
                'role_id' => '5',
            ),
            69 => 
            array (
                'permission_id' => '206',
                'role_id' => '5',
            ),
            70 => 
            array (
                'permission_id' => '207',
                'role_id' => '5',
            ),
            71 => 
            array (
                'permission_id' => '208',
                'role_id' => '5',
            ),
            72 => 
            array (
                'permission_id' => '209',
                'role_id' => '5',
            ),
            73 => 
            array (
                'permission_id' => '210',
                'role_id' => '5',
            ),
            74 => 
            array (
                'permission_id' => '211',
                'role_id' => '5',
            ),
            75 => 
            array (
                'permission_id' => '212',
                'role_id' => '5',
            ),
            76 => 
            array (
                'permission_id' => '213',
                'role_id' => '5',
            ),
            77 => 
            array (
                'permission_id' => '214',
                'role_id' => '5',
            ),
            78 => 
            array (
                'permission_id' => '215',
                'role_id' => '5',
            ),
            79 => 
            array (
                'permission_id' => '216',
                'role_id' => '5',
            ),
            80 => 
            array (
                'permission_id' => '217',
                'role_id' => '5',
            ),
            81 => 
            array (
                'permission_id' => '218',
                'role_id' => '5',
            ),
            82 => 
            array (
                'permission_id' => '219',
                'role_id' => '5',
            ),
            83 => 
            array (
                'permission_id' => '220',
                'role_id' => '5',
            ),
            84 => 
            array (
                'permission_id' => '221',
                'role_id' => '5',
            ),
            85 => 
            array (
                'permission_id' => '222',
                'role_id' => '5',
            ),
            86 => 
            array (
                'permission_id' => '223',
                'role_id' => '5',
            ),
            87 => 
            array (
                'permission_id' => '224',
                'role_id' => '5',
            ),
            88 => 
            array (
                'permission_id' => '225',
                'role_id' => '5',
            ),
            89 => 
            array (
                'permission_id' => '226',
                'role_id' => '5',
            ),
            90 => 
            array (
                'permission_id' => '227',
                'role_id' => '5',
            ),
            91 => 
            array (
                'permission_id' => '228',
                'role_id' => '5',
            ),
            92 => 
            array (
                'permission_id' => '229',
                'role_id' => '5',
            ),
            93 => 
            array (
                'permission_id' => '230',
                'role_id' => '5',
            ),
            94 => 
            array (
                'permission_id' => '231',
                'role_id' => '5',
            ),
            95 => 
            array (
                'permission_id' => '231',
                'role_id' => '7',
            ),
            96 => 
            array (
                'permission_id' => '233',
                'role_id' => '5',
            ),
            97 => 
            array (
                'permission_id' => '234',
                'role_id' => '5',
            ),
            98 => 
            array (
                'permission_id' => '235',
                'role_id' => '5',
            ),
            99 => 
            array (
                'permission_id' => '236',
                'role_id' => '5',
            ),
            100 => 
            array (
                'permission_id' => '237',
                'role_id' => '5',
            ),
            101 => 
            array (
                'permission_id' => '238',
                'role_id' => '5',
            ),
            102 => 
            array (
                'permission_id' => '239',
                'role_id' => '5',
            ),
            103 => 
            array (
                'permission_id' => '241',
                'role_id' => '5',
            ),
            104 => 
            array (
                'permission_id' => '242',
                'role_id' => '5',
            ),
            105 => 
            array (
                'permission_id' => '244',
                'role_id' => '5',
            ),
            106 => 
            array (
                'permission_id' => '245',
                'role_id' => '5',
            ),
            107 => 
            array (
                'permission_id' => '246',
                'role_id' => '5',
            ),
            108 => 
            array (
                'permission_id' => '249',
                'role_id' => '5',
            ),
            109 => 
            array (
                'permission_id' => '249',
                'role_id' => '7',
            ),
            110 => 
            array (
                'permission_id' => '250',
                'role_id' => '7',
            ),
            111 => 
            array (
                'permission_id' => '251',
                'role_id' => '5',
            ),
            112 => 
            array (
                'permission_id' => '252',
                'role_id' => '5',
            ),
            113 => 
            array (
                'permission_id' => '252',
                'role_id' => '7',
            ),
            114 => 
            array (
                'permission_id' => '253',
                'role_id' => '5',
            ),
            115 => 
            array (
                'permission_id' => '254',
                'role_id' => '7',
            ),
            116 => 
            array (
                'permission_id' => '255',
                'role_id' => '5',
            ),
            117 => 
            array (
                'permission_id' => '255',
                'role_id' => '7',
            ),
            118 => 
            array (
                'permission_id' => '256',
                'role_id' => '5',
            ),
            119 => 
            array (
                'permission_id' => '256',
                'role_id' => '7',
            ),
            120 => 
            array (
                'permission_id' => '257',
                'role_id' => '5',
            ),
            121 => 
            array (
                'permission_id' => '257',
                'role_id' => '7',
            ),
            122 => 
            array (
                'permission_id' => '258',
                'role_id' => '5',
            ),
            123 => 
            array (
                'permission_id' => '258',
                'role_id' => '7',
            ),
            124 => 
            array (
                'permission_id' => '259',
                'role_id' => '5',
            ),
            125 => 
            array (
                'permission_id' => '260',
                'role_id' => '5',
            ),
            126 => 
            array (
                'permission_id' => '261',
                'role_id' => '5',
            ),
            127 => 
            array (
                'permission_id' => '262',
                'role_id' => '5',
            ),
            128 => 
            array (
                'permission_id' => '263',
                'role_id' => '5',
            ),
            129 => 
            array (
                'permission_id' => '264',
                'role_id' => '5',
            ),
            130 => 
            array (
                'permission_id' => '265',
                'role_id' => '5',
            ),
            131 => 
            array (
                'permission_id' => '266',
                'role_id' => '5',
            ),
            132 => 
            array (
                'permission_id' => '267',
                'role_id' => '5',
            ),
            133 => 
            array (
                'permission_id' => '268',
                'role_id' => '1',
            ),
            134 => 
            array (
                'permission_id' => '268',
                'role_id' => '2',
            ),
            135 => 
            array (
                'permission_id' => '268',
                'role_id' => '4',
            ),
            136 => 
            array (
                'permission_id' => '268',
                'role_id' => '5',
            ),
            137 => 
            array (
                'permission_id' => '268',
                'role_id' => '6',
            ),
            138 => 
            array (
                'permission_id' => '268',
                'role_id' => '7',
            ),
            139 => 
            array (
                'permission_id' => '268',
                'role_id' => '8',
            ),
            140 => 
            array (
                'permission_id' => '268',
                'role_id' => '9',
            ),
            141 => 
            array (
                'permission_id' => '268',
                'role_id' => '10',
            ),
            142 => 
            array (
                'permission_id' => '269',
                'role_id' => '1',
            ),
            143 => 
            array (
                'permission_id' => '269',
                'role_id' => '2',
            ),
            144 => 
            array (
                'permission_id' => '269',
                'role_id' => '4',
            ),
            145 => 
            array (
                'permission_id' => '269',
                'role_id' => '5',
            ),
            146 => 
            array (
                'permission_id' => '269',
                'role_id' => '6',
            ),
            147 => 
            array (
                'permission_id' => '269',
                'role_id' => '7',
            ),
            148 => 
            array (
                'permission_id' => '269',
                'role_id' => '8',
            ),
            149 => 
            array (
                'permission_id' => '269',
                'role_id' => '9',
            ),
            150 => 
            array (
                'permission_id' => '269',
                'role_id' => '10',
            ),
            151 => 
            array (
                'permission_id' => '270',
                'role_id' => '1',
            ),
            152 => 
            array (
                'permission_id' => '270',
                'role_id' => '2',
            ),
            153 => 
            array (
                'permission_id' => '270',
                'role_id' => '4',
            ),
            154 => 
            array (
                'permission_id' => '270',
                'role_id' => '5',
            ),
            155 => 
            array (
                'permission_id' => '270',
                'role_id' => '6',
            ),
            156 => 
            array (
                'permission_id' => '270',
                'role_id' => '7',
            ),
            157 => 
            array (
                'permission_id' => '270',
                'role_id' => '8',
            ),
            158 => 
            array (
                'permission_id' => '270',
                'role_id' => '9',
            ),
            159 => 
            array (
                'permission_id' => '270',
                'role_id' => '10',
            ),
            160 => 
            array (
                'permission_id' => '271',
                'role_id' => '1',
            ),
            161 => 
            array (
                'permission_id' => '271',
                'role_id' => '2',
            ),
            162 => 
            array (
                'permission_id' => '271',
                'role_id' => '4',
            ),
            163 => 
            array (
                'permission_id' => '271',
                'role_id' => '5',
            ),
            164 => 
            array (
                'permission_id' => '271',
                'role_id' => '6',
            ),
            165 => 
            array (
                'permission_id' => '271',
                'role_id' => '7',
            ),
            166 => 
            array (
                'permission_id' => '271',
                'role_id' => '8',
            ),
            167 => 
            array (
                'permission_id' => '271',
                'role_id' => '9',
            ),
            168 => 
            array (
                'permission_id' => '271',
                'role_id' => '10',
            ),
            169 => 
            array (
                'permission_id' => '272',
                'role_id' => '1',
            ),
            170 => 
            array (
                'permission_id' => '272',
                'role_id' => '2',
            ),
            171 => 
            array (
                'permission_id' => '272',
                'role_id' => '4',
            ),
            172 => 
            array (
                'permission_id' => '272',
                'role_id' => '5',
            ),
            173 => 
            array (
                'permission_id' => '272',
                'role_id' => '6',
            ),
            174 => 
            array (
                'permission_id' => '272',
                'role_id' => '7',
            ),
            175 => 
            array (
                'permission_id' => '272',
                'role_id' => '8',
            ),
            176 => 
            array (
                'permission_id' => '272',
                'role_id' => '9',
            ),
            177 => 
            array (
                'permission_id' => '272',
                'role_id' => '10',
            ),
            178 => 
            array (
                'permission_id' => '273',
                'role_id' => '1',
            ),
            179 => 
            array (
                'permission_id' => '273',
                'role_id' => '2',
            ),
            180 => 
            array (
                'permission_id' => '273',
                'role_id' => '4',
            ),
            181 => 
            array (
                'permission_id' => '273',
                'role_id' => '5',
            ),
            182 => 
            array (
                'permission_id' => '273',
                'role_id' => '6',
            ),
            183 => 
            array (
                'permission_id' => '273',
                'role_id' => '7',
            ),
            184 => 
            array (
                'permission_id' => '273',
                'role_id' => '8',
            ),
            185 => 
            array (
                'permission_id' => '273',
                'role_id' => '9',
            ),
            186 => 
            array (
                'permission_id' => '273',
                'role_id' => '10',
            ),
            187 => 
            array (
                'permission_id' => '274',
                'role_id' => '1',
            ),
            188 => 
            array (
                'permission_id' => '274',
                'role_id' => '2',
            ),
            189 => 
            array (
                'permission_id' => '274',
                'role_id' => '4',
            ),
            190 => 
            array (
                'permission_id' => '274',
                'role_id' => '5',
            ),
            191 => 
            array (
                'permission_id' => '274',
                'role_id' => '6',
            ),
            192 => 
            array (
                'permission_id' => '274',
                'role_id' => '7',
            ),
            193 => 
            array (
                'permission_id' => '274',
                'role_id' => '8',
            ),
            194 => 
            array (
                'permission_id' => '274',
                'role_id' => '9',
            ),
            195 => 
            array (
                'permission_id' => '274',
                'role_id' => '10',
            ),
            196 => 
            array (
                'permission_id' => '275',
                'role_id' => '1',
            ),
            197 => 
            array (
                'permission_id' => '275',
                'role_id' => '2',
            ),
            198 => 
            array (
                'permission_id' => '275',
                'role_id' => '4',
            ),
            199 => 
            array (
                'permission_id' => '275',
                'role_id' => '5',
            ),
            200 => 
            array (
                'permission_id' => '275',
                'role_id' => '6',
            ),
            201 => 
            array (
                'permission_id' => '275',
                'role_id' => '7',
            ),
            202 => 
            array (
                'permission_id' => '275',
                'role_id' => '8',
            ),
            203 => 
            array (
                'permission_id' => '275',
                'role_id' => '9',
            ),
            204 => 
            array (
                'permission_id' => '275',
                'role_id' => '10',
            ),
            205 => 
            array (
                'permission_id' => '276',
                'role_id' => '1',
            ),
            206 => 
            array (
                'permission_id' => '276',
                'role_id' => '2',
            ),
            207 => 
            array (
                'permission_id' => '276',
                'role_id' => '4',
            ),
            208 => 
            array (
                'permission_id' => '276',
                'role_id' => '5',
            ),
            209 => 
            array (
                'permission_id' => '276',
                'role_id' => '6',
            ),
            210 => 
            array (
                'permission_id' => '276',
                'role_id' => '7',
            ),
            211 => 
            array (
                'permission_id' => '276',
                'role_id' => '8',
            ),
            212 => 
            array (
                'permission_id' => '276',
                'role_id' => '9',
            ),
            213 => 
            array (
                'permission_id' => '276',
                'role_id' => '10',
            ),
            214 => 
            array (
                'permission_id' => '277',
                'role_id' => '1',
            ),
            215 => 
            array (
                'permission_id' => '277',
                'role_id' => '2',
            ),
            216 => 
            array (
                'permission_id' => '277',
                'role_id' => '4',
            ),
            217 => 
            array (
                'permission_id' => '277',
                'role_id' => '5',
            ),
            218 => 
            array (
                'permission_id' => '277',
                'role_id' => '6',
            ),
            219 => 
            array (
                'permission_id' => '277',
                'role_id' => '7',
            ),
            220 => 
            array (
                'permission_id' => '277',
                'role_id' => '8',
            ),
            221 => 
            array (
                'permission_id' => '277',
                'role_id' => '9',
            ),
            222 => 
            array (
                'permission_id' => '277',
                'role_id' => '10',
            ),
        ));
        
        
    }
}