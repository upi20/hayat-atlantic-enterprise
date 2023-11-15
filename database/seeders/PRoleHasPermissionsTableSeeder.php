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
                'role_id' => '5',
            ),
            3 => 
            array (
                'permission_id' => '109',
                'role_id' => '6',
            ),
            4 => 
            array (
                'permission_id' => '109',
                'role_id' => '7',
            ),
            5 => 
            array (
                'permission_id' => '109',
                'role_id' => '8',
            ),
            6 => 
            array (
                'permission_id' => '109',
                'role_id' => '10',
            ),
            7 => 
            array (
                'permission_id' => '168',
                'role_id' => '5',
            ),
            8 => 
            array (
                'permission_id' => '169',
                'role_id' => '5',
            ),
            9 => 
            array (
                'permission_id' => '170',
                'role_id' => '5',
            ),
            10 => 
            array (
                'permission_id' => '172',
                'role_id' => '5',
            ),
            11 => 
            array (
                'permission_id' => '173',
                'role_id' => '5',
            ),
            12 => 
            array (
                'permission_id' => '174',
                'role_id' => '5',
            ),
            13 => 
            array (
                'permission_id' => '175',
                'role_id' => '5',
            ),
            14 => 
            array (
                'permission_id' => '177',
                'role_id' => '5',
            ),
            15 => 
            array (
                'permission_id' => '178',
                'role_id' => '1',
            ),
            16 => 
            array (
                'permission_id' => '178',
                'role_id' => '2',
            ),
            17 => 
            array (
                'permission_id' => '178',
                'role_id' => '5',
            ),
            18 => 
            array (
                'permission_id' => '178',
                'role_id' => '6',
            ),
            19 => 
            array (
                'permission_id' => '178',
                'role_id' => '7',
            ),
            20 => 
            array (
                'permission_id' => '178',
                'role_id' => '8',
            ),
            21 => 
            array (
                'permission_id' => '178',
                'role_id' => '10',
            ),
            22 => 
            array (
                'permission_id' => '179',
                'role_id' => '5',
            ),
            23 => 
            array (
                'permission_id' => '181',
                'role_id' => '5',
            ),
            24 => 
            array (
                'permission_id' => '183',
                'role_id' => '1',
            ),
            25 => 
            array (
                'permission_id' => '183',
                'role_id' => '2',
            ),
            26 => 
            array (
                'permission_id' => '183',
                'role_id' => '5',
            ),
            27 => 
            array (
                'permission_id' => '183',
                'role_id' => '6',
            ),
            28 => 
            array (
                'permission_id' => '183',
                'role_id' => '7',
            ),
            29 => 
            array (
                'permission_id' => '183',
                'role_id' => '8',
            ),
            30 => 
            array (
                'permission_id' => '183',
                'role_id' => '10',
            ),
            31 => 
            array (
                'permission_id' => '184',
                'role_id' => '5',
            ),
            32 => 
            array (
                'permission_id' => '184',
                'role_id' => '7',
            ),
            33 => 
            array (
                'permission_id' => '184',
                'role_id' => '8',
            ),
            34 => 
            array (
                'permission_id' => '185',
                'role_id' => '5',
            ),
            35 => 
            array (
                'permission_id' => '185',
                'role_id' => '7',
            ),
            36 => 
            array (
                'permission_id' => '185',
                'role_id' => '8',
            ),
            37 => 
            array (
                'permission_id' => '186',
                'role_id' => '5',
            ),
            38 => 
            array (
                'permission_id' => '186',
                'role_id' => '7',
            ),
            39 => 
            array (
                'permission_id' => '186',
                'role_id' => '8',
            ),
            40 => 
            array (
                'permission_id' => '187',
                'role_id' => '1',
            ),
            41 => 
            array (
                'permission_id' => '187',
                'role_id' => '2',
            ),
            42 => 
            array (
                'permission_id' => '187',
                'role_id' => '5',
            ),
            43 => 
            array (
                'permission_id' => '187',
                'role_id' => '6',
            ),
            44 => 
            array (
                'permission_id' => '187',
                'role_id' => '7',
            ),
            45 => 
            array (
                'permission_id' => '187',
                'role_id' => '8',
            ),
            46 => 
            array (
                'permission_id' => '187',
                'role_id' => '10',
            ),
            47 => 
            array (
                'permission_id' => '188',
                'role_id' => '5',
            ),
            48 => 
            array (
                'permission_id' => '188',
                'role_id' => '7',
            ),
            49 => 
            array (
                'permission_id' => '188',
                'role_id' => '8',
            ),
            50 => 
            array (
                'permission_id' => '189',
                'role_id' => '5',
            ),
            51 => 
            array (
                'permission_id' => '189',
                'role_id' => '7',
            ),
            52 => 
            array (
                'permission_id' => '189',
                'role_id' => '8',
            ),
            53 => 
            array (
                'permission_id' => '190',
                'role_id' => '5',
            ),
            54 => 
            array (
                'permission_id' => '190',
                'role_id' => '7',
            ),
            55 => 
            array (
                'permission_id' => '190',
                'role_id' => '8',
            ),
            56 => 
            array (
                'permission_id' => '191',
                'role_id' => '5',
            ),
            57 => 
            array (
                'permission_id' => '191',
                'role_id' => '6',
            ),
            58 => 
            array (
                'permission_id' => '192',
                'role_id' => '5',
            ),
            59 => 
            array (
                'permission_id' => '193',
                'role_id' => '5',
            ),
            60 => 
            array (
                'permission_id' => '194',
                'role_id' => '5',
            ),
            61 => 
            array (
                'permission_id' => '195',
                'role_id' => '5',
            ),
            62 => 
            array (
                'permission_id' => '195',
                'role_id' => '6',
            ),
            63 => 
            array (
                'permission_id' => '196',
                'role_id' => '5',
            ),
            64 => 
            array (
                'permission_id' => '197',
                'role_id' => '5',
            ),
            65 => 
            array (
                'permission_id' => '198',
                'role_id' => '5',
            ),
            66 => 
            array (
                'permission_id' => '199',
                'role_id' => '3',
            ),
            67 => 
            array (
                'permission_id' => '199',
                'role_id' => '5',
            ),
            68 => 
            array (
                'permission_id' => '199',
                'role_id' => '7',
            ),
            69 => 
            array (
                'permission_id' => '199',
                'role_id' => '8',
            ),
            70 => 
            array (
                'permission_id' => '200',
                'role_id' => '5',
            ),
            71 => 
            array (
                'permission_id' => '200',
                'role_id' => '7',
            ),
            72 => 
            array (
                'permission_id' => '201',
                'role_id' => '5',
            ),
            73 => 
            array (
                'permission_id' => '201',
                'role_id' => '7',
            ),
            74 => 
            array (
                'permission_id' => '202',
                'role_id' => '5',
            ),
            75 => 
            array (
                'permission_id' => '202',
                'role_id' => '7',
            ),
            76 => 
            array (
                'permission_id' => '203',
                'role_id' => '5',
            ),
            77 => 
            array (
                'permission_id' => '203',
                'role_id' => '7',
            ),
            78 => 
            array (
                'permission_id' => '203',
                'role_id' => '8',
            ),
            79 => 
            array (
                'permission_id' => '204',
                'role_id' => '5',
            ),
            80 => 
            array (
                'permission_id' => '204',
                'role_id' => '7',
            ),
            81 => 
            array (
                'permission_id' => '205',
                'role_id' => '5',
            ),
            82 => 
            array (
                'permission_id' => '205',
                'role_id' => '7',
            ),
            83 => 
            array (
                'permission_id' => '206',
                'role_id' => '5',
            ),
            84 => 
            array (
                'permission_id' => '206',
                'role_id' => '7',
            ),
            85 => 
            array (
                'permission_id' => '207',
                'role_id' => '5',
            ),
            86 => 
            array (
                'permission_id' => '207',
                'role_id' => '7',
            ),
            87 => 
            array (
                'permission_id' => '207',
                'role_id' => '8',
            ),
            88 => 
            array (
                'permission_id' => '208',
                'role_id' => '5',
            ),
            89 => 
            array (
                'permission_id' => '208',
                'role_id' => '7',
            ),
            90 => 
            array (
                'permission_id' => '209',
                'role_id' => '5',
            ),
            91 => 
            array (
                'permission_id' => '209',
                'role_id' => '7',
            ),
            92 => 
            array (
                'permission_id' => '210',
                'role_id' => '5',
            ),
            93 => 
            array (
                'permission_id' => '210',
                'role_id' => '7',
            ),
            94 => 
            array (
                'permission_id' => '211',
                'role_id' => '5',
            ),
            95 => 
            array (
                'permission_id' => '211',
                'role_id' => '7',
            ),
            96 => 
            array (
                'permission_id' => '211',
                'role_id' => '8',
            ),
            97 => 
            array (
                'permission_id' => '212',
                'role_id' => '5',
            ),
            98 => 
            array (
                'permission_id' => '212',
                'role_id' => '7',
            ),
            99 => 
            array (
                'permission_id' => '213',
                'role_id' => '5',
            ),
            100 => 
            array (
                'permission_id' => '213',
                'role_id' => '7',
            ),
            101 => 
            array (
                'permission_id' => '214',
                'role_id' => '5',
            ),
            102 => 
            array (
                'permission_id' => '214',
                'role_id' => '7',
            ),
            103 => 
            array (
                'permission_id' => '215',
                'role_id' => '5',
            ),
            104 => 
            array (
                'permission_id' => '215',
                'role_id' => '7',
            ),
            105 => 
            array (
                'permission_id' => '216',
                'role_id' => '5',
            ),
            106 => 
            array (
                'permission_id' => '216',
                'role_id' => '7',
            ),
            107 => 
            array (
                'permission_id' => '217',
                'role_id' => '5',
            ),
            108 => 
            array (
                'permission_id' => '217',
                'role_id' => '7',
            ),
            109 => 
            array (
                'permission_id' => '218',
                'role_id' => '5',
            ),
            110 => 
            array (
                'permission_id' => '218',
                'role_id' => '7',
            ),
            111 => 
            array (
                'permission_id' => '218',
                'role_id' => '8',
            ),
            112 => 
            array (
                'permission_id' => '219',
                'role_id' => '5',
            ),
            113 => 
            array (
                'permission_id' => '219',
                'role_id' => '7',
            ),
            114 => 
            array (
                'permission_id' => '220',
                'role_id' => '5',
            ),
            115 => 
            array (
                'permission_id' => '220',
                'role_id' => '7',
            ),
            116 => 
            array (
                'permission_id' => '221',
                'role_id' => '5',
            ),
            117 => 
            array (
                'permission_id' => '221',
                'role_id' => '7',
            ),
            118 => 
            array (
                'permission_id' => '222',
                'role_id' => '5',
            ),
            119 => 
            array (
                'permission_id' => '222',
                'role_id' => '7',
            ),
            120 => 
            array (
                'permission_id' => '222',
                'role_id' => '8',
            ),
            121 => 
            array (
                'permission_id' => '223',
                'role_id' => '3',
            ),
            122 => 
            array (
                'permission_id' => '223',
                'role_id' => '5',
            ),
            123 => 
            array (
                'permission_id' => '223',
                'role_id' => '7',
            ),
            124 => 
            array (
                'permission_id' => '223',
                'role_id' => '8',
            ),
            125 => 
            array (
                'permission_id' => '224',
                'role_id' => '5',
            ),
            126 => 
            array (
                'permission_id' => '224',
                'role_id' => '7',
            ),
            127 => 
            array (
                'permission_id' => '225',
                'role_id' => '5',
            ),
            128 => 
            array (
                'permission_id' => '225',
                'role_id' => '7',
            ),
            129 => 
            array (
                'permission_id' => '226',
                'role_id' => '5',
            ),
            130 => 
            array (
                'permission_id' => '226',
                'role_id' => '7',
            ),
            131 => 
            array (
                'permission_id' => '227',
                'role_id' => '5',
            ),
            132 => 
            array (
                'permission_id' => '227',
                'role_id' => '7',
            ),
            133 => 
            array (
                'permission_id' => '227',
                'role_id' => '8',
            ),
            134 => 
            array (
                'permission_id' => '228',
                'role_id' => '5',
            ),
            135 => 
            array (
                'permission_id' => '228',
                'role_id' => '7',
            ),
            136 => 
            array (
                'permission_id' => '229',
                'role_id' => '5',
            ),
            137 => 
            array (
                'permission_id' => '229',
                'role_id' => '7',
            ),
            138 => 
            array (
                'permission_id' => '230',
                'role_id' => '5',
            ),
            139 => 
            array (
                'permission_id' => '230',
                'role_id' => '7',
            ),
            140 => 
            array (
                'permission_id' => '231',
                'role_id' => '5',
            ),
            141 => 
            array (
                'permission_id' => '231',
                'role_id' => '6',
            ),
            142 => 
            array (
                'permission_id' => '231',
                'role_id' => '7',
            ),
            143 => 
            array (
                'permission_id' => '231',
                'role_id' => '8',
            ),
            144 => 
            array (
                'permission_id' => '233',
                'role_id' => '5',
            ),
            145 => 
            array (
                'permission_id' => '234',
                'role_id' => '5',
            ),
            146 => 
            array (
                'permission_id' => '235',
                'role_id' => '5',
            ),
            147 => 
            array (
                'permission_id' => '236',
                'role_id' => '5',
            ),
            148 => 
            array (
                'permission_id' => '237',
                'role_id' => '5',
            ),
            149 => 
            array (
                'permission_id' => '238',
                'role_id' => '5',
            ),
            150 => 
            array (
                'permission_id' => '239',
                'role_id' => '5',
            ),
            151 => 
            array (
                'permission_id' => '241',
                'role_id' => '5',
            ),
            152 => 
            array (
                'permission_id' => '242',
                'role_id' => '5',
            ),
            153 => 
            array (
                'permission_id' => '244',
                'role_id' => '5',
            ),
            154 => 
            array (
                'permission_id' => '245',
                'role_id' => '5',
            ),
            155 => 
            array (
                'permission_id' => '246',
                'role_id' => '5',
            ),
            156 => 
            array (
                'permission_id' => '249',
                'role_id' => '5',
            ),
            157 => 
            array (
                'permission_id' => '249',
                'role_id' => '7',
            ),
            158 => 
            array (
                'permission_id' => '249',
                'role_id' => '8',
            ),
            159 => 
            array (
                'permission_id' => '250',
                'role_id' => '7',
            ),
            160 => 
            array (
                'permission_id' => '250',
                'role_id' => '8',
            ),
            161 => 
            array (
                'permission_id' => '251',
                'role_id' => '5',
            ),
            162 => 
            array (
                'permission_id' => '252',
                'role_id' => '5',
            ),
            163 => 
            array (
                'permission_id' => '252',
                'role_id' => '7',
            ),
            164 => 
            array (
                'permission_id' => '252',
                'role_id' => '8',
            ),
            165 => 
            array (
                'permission_id' => '253',
                'role_id' => '5',
            ),
            166 => 
            array (
                'permission_id' => '254',
                'role_id' => '7',
            ),
            167 => 
            array (
                'permission_id' => '254',
                'role_id' => '8',
            ),
            168 => 
            array (
                'permission_id' => '255',
                'role_id' => '5',
            ),
            169 => 
            array (
                'permission_id' => '255',
                'role_id' => '7',
            ),
            170 => 
            array (
                'permission_id' => '255',
                'role_id' => '8',
            ),
            171 => 
            array (
                'permission_id' => '256',
                'role_id' => '5',
            ),
            172 => 
            array (
                'permission_id' => '256',
                'role_id' => '7',
            ),
            173 => 
            array (
                'permission_id' => '256',
                'role_id' => '8',
            ),
            174 => 
            array (
                'permission_id' => '257',
                'role_id' => '5',
            ),
            175 => 
            array (
                'permission_id' => '257',
                'role_id' => '7',
            ),
            176 => 
            array (
                'permission_id' => '257',
                'role_id' => '8',
            ),
            177 => 
            array (
                'permission_id' => '258',
                'role_id' => '5',
            ),
            178 => 
            array (
                'permission_id' => '258',
                'role_id' => '7',
            ),
            179 => 
            array (
                'permission_id' => '258',
                'role_id' => '8',
            ),
            180 => 
            array (
                'permission_id' => '259',
                'role_id' => '5',
            ),
            181 => 
            array (
                'permission_id' => '259',
                'role_id' => '6',
            ),
            182 => 
            array (
                'permission_id' => '260',
                'role_id' => '5',
            ),
            183 => 
            array (
                'permission_id' => '261',
                'role_id' => '5',
            ),
            184 => 
            array (
                'permission_id' => '262',
                'role_id' => '5',
            ),
            185 => 
            array (
                'permission_id' => '263',
                'role_id' => '5',
            ),
            186 => 
            array (
                'permission_id' => '264',
                'role_id' => '3',
            ),
            187 => 
            array (
                'permission_id' => '264',
                'role_id' => '5',
            ),
            188 => 
            array (
                'permission_id' => '265',
                'role_id' => '5',
            ),
            189 => 
            array (
                'permission_id' => '266',
                'role_id' => '5',
            ),
            190 => 
            array (
                'permission_id' => '267',
                'role_id' => '5',
            ),
            191 => 
            array (
                'permission_id' => '268',
                'role_id' => '1',
            ),
            192 => 
            array (
                'permission_id' => '268',
                'role_id' => '2',
            ),
            193 => 
            array (
                'permission_id' => '268',
                'role_id' => '5',
            ),
            194 => 
            array (
                'permission_id' => '268',
                'role_id' => '6',
            ),
            195 => 
            array (
                'permission_id' => '268',
                'role_id' => '7',
            ),
            196 => 
            array (
                'permission_id' => '268',
                'role_id' => '8',
            ),
            197 => 
            array (
                'permission_id' => '268',
                'role_id' => '10',
            ),
            198 => 
            array (
                'permission_id' => '269',
                'role_id' => '1',
            ),
            199 => 
            array (
                'permission_id' => '269',
                'role_id' => '2',
            ),
            200 => 
            array (
                'permission_id' => '269',
                'role_id' => '5',
            ),
            201 => 
            array (
                'permission_id' => '269',
                'role_id' => '6',
            ),
            202 => 
            array (
                'permission_id' => '269',
                'role_id' => '7',
            ),
            203 => 
            array (
                'permission_id' => '269',
                'role_id' => '8',
            ),
            204 => 
            array (
                'permission_id' => '269',
                'role_id' => '10',
            ),
            205 => 
            array (
                'permission_id' => '270',
                'role_id' => '1',
            ),
            206 => 
            array (
                'permission_id' => '270',
                'role_id' => '2',
            ),
            207 => 
            array (
                'permission_id' => '270',
                'role_id' => '5',
            ),
            208 => 
            array (
                'permission_id' => '270',
                'role_id' => '6',
            ),
            209 => 
            array (
                'permission_id' => '270',
                'role_id' => '7',
            ),
            210 => 
            array (
                'permission_id' => '270',
                'role_id' => '8',
            ),
            211 => 
            array (
                'permission_id' => '270',
                'role_id' => '10',
            ),
            212 => 
            array (
                'permission_id' => '271',
                'role_id' => '1',
            ),
            213 => 
            array (
                'permission_id' => '271',
                'role_id' => '2',
            ),
            214 => 
            array (
                'permission_id' => '271',
                'role_id' => '5',
            ),
            215 => 
            array (
                'permission_id' => '271',
                'role_id' => '6',
            ),
            216 => 
            array (
                'permission_id' => '271',
                'role_id' => '7',
            ),
            217 => 
            array (
                'permission_id' => '271',
                'role_id' => '8',
            ),
            218 => 
            array (
                'permission_id' => '271',
                'role_id' => '10',
            ),
            219 => 
            array (
                'permission_id' => '271',
                'role_id' => '11',
            ),
            220 => 
            array (
                'permission_id' => '272',
                'role_id' => '1',
            ),
            221 => 
            array (
                'permission_id' => '272',
                'role_id' => '2',
            ),
            222 => 
            array (
                'permission_id' => '272',
                'role_id' => '5',
            ),
            223 => 
            array (
                'permission_id' => '272',
                'role_id' => '6',
            ),
            224 => 
            array (
                'permission_id' => '272',
                'role_id' => '7',
            ),
            225 => 
            array (
                'permission_id' => '272',
                'role_id' => '8',
            ),
            226 => 
            array (
                'permission_id' => '272',
                'role_id' => '10',
            ),
            227 => 
            array (
                'permission_id' => '273',
                'role_id' => '1',
            ),
            228 => 
            array (
                'permission_id' => '273',
                'role_id' => '2',
            ),
            229 => 
            array (
                'permission_id' => '273',
                'role_id' => '5',
            ),
            230 => 
            array (
                'permission_id' => '273',
                'role_id' => '6',
            ),
            231 => 
            array (
                'permission_id' => '273',
                'role_id' => '7',
            ),
            232 => 
            array (
                'permission_id' => '273',
                'role_id' => '8',
            ),
            233 => 
            array (
                'permission_id' => '273',
                'role_id' => '10',
            ),
            234 => 
            array (
                'permission_id' => '273',
                'role_id' => '11',
            ),
            235 => 
            array (
                'permission_id' => '274',
                'role_id' => '1',
            ),
            236 => 
            array (
                'permission_id' => '274',
                'role_id' => '2',
            ),
            237 => 
            array (
                'permission_id' => '274',
                'role_id' => '5',
            ),
            238 => 
            array (
                'permission_id' => '274',
                'role_id' => '6',
            ),
            239 => 
            array (
                'permission_id' => '274',
                'role_id' => '7',
            ),
            240 => 
            array (
                'permission_id' => '274',
                'role_id' => '8',
            ),
            241 => 
            array (
                'permission_id' => '274',
                'role_id' => '10',
            ),
            242 => 
            array (
                'permission_id' => '275',
                'role_id' => '1',
            ),
            243 => 
            array (
                'permission_id' => '275',
                'role_id' => '2',
            ),
            244 => 
            array (
                'permission_id' => '275',
                'role_id' => '5',
            ),
            245 => 
            array (
                'permission_id' => '275',
                'role_id' => '6',
            ),
            246 => 
            array (
                'permission_id' => '275',
                'role_id' => '7',
            ),
            247 => 
            array (
                'permission_id' => '275',
                'role_id' => '8',
            ),
            248 => 
            array (
                'permission_id' => '275',
                'role_id' => '10',
            ),
            249 => 
            array (
                'permission_id' => '276',
                'role_id' => '1',
            ),
            250 => 
            array (
                'permission_id' => '276',
                'role_id' => '2',
            ),
            251 => 
            array (
                'permission_id' => '276',
                'role_id' => '5',
            ),
            252 => 
            array (
                'permission_id' => '276',
                'role_id' => '6',
            ),
            253 => 
            array (
                'permission_id' => '276',
                'role_id' => '7',
            ),
            254 => 
            array (
                'permission_id' => '276',
                'role_id' => '8',
            ),
            255 => 
            array (
                'permission_id' => '276',
                'role_id' => '10',
            ),
            256 => 
            array (
                'permission_id' => '277',
                'role_id' => '1',
            ),
            257 => 
            array (
                'permission_id' => '277',
                'role_id' => '2',
            ),
            258 => 
            array (
                'permission_id' => '277',
                'role_id' => '3',
            ),
            259 => 
            array (
                'permission_id' => '277',
                'role_id' => '5',
            ),
            260 => 
            array (
                'permission_id' => '277',
                'role_id' => '6',
            ),
            261 => 
            array (
                'permission_id' => '277',
                'role_id' => '7',
            ),
            262 => 
            array (
                'permission_id' => '277',
                'role_id' => '8',
            ),
            263 => 
            array (
                'permission_id' => '277',
                'role_id' => '10',
            ),
            264 => 
            array (
                'permission_id' => '278',
                'role_id' => '5',
            ),
            265 => 
            array (
                'permission_id' => '279',
                'role_id' => '5',
            ),
            266 => 
            array (
                'permission_id' => '280',
                'role_id' => '5',
            ),
            267 => 
            array (
                'permission_id' => '281',
                'role_id' => '5',
            ),
            268 => 
            array (
                'permission_id' => '281',
                'role_id' => '7',
            ),
            269 => 
            array (
                'permission_id' => '281',
                'role_id' => '8',
            ),
            270 => 
            array (
                'permission_id' => '282',
                'role_id' => '5',
            ),
            271 => 
            array (
                'permission_id' => '282',
                'role_id' => '7',
            ),
            272 => 
            array (
                'permission_id' => '282',
                'role_id' => '8',
            ),
            273 => 
            array (
                'permission_id' => '283',
                'role_id' => '5',
            ),
            274 => 
            array (
                'permission_id' => '284',
                'role_id' => '5',
            ),
            275 => 
            array (
                'permission_id' => '285',
                'role_id' => '5',
            ),
            276 => 
            array (
                'permission_id' => '285',
                'role_id' => '7',
            ),
            277 => 
            array (
                'permission_id' => '285',
                'role_id' => '8',
            ),
            278 => 
            array (
                'permission_id' => '286',
                'role_id' => '5',
            ),
        ));
        
        
    }
}