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
                'permission_id' => 97,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 108,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 109,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 109,
                'role_id' => 2,
            ),
            10 => 
            array (
                'permission_id' => 109,
                'role_id' => 3,
            ),
            11 => 
            array (
                'permission_id' => 109,
                'role_id' => 4,
            ),
            12 => 
            array (
                'permission_id' => 109,
                'role_id' => 5,
            ),
            13 => 
            array (
                'permission_id' => 109,
                'role_id' => 6,
            ),
            14 => 
            array (
                'permission_id' => 109,
                'role_id' => 7,
            ),
            15 => 
            array (
                'permission_id' => 109,
                'role_id' => 8,
            ),
            16 => 
            array (
                'permission_id' => 109,
                'role_id' => 9,
            ),
            17 => 
            array (
                'permission_id' => 109,
                'role_id' => 10,
            ),
            18 => 
            array (
                'permission_id' => 137,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 139,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 140,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 141,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 143,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 168,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 168,
                'role_id' => 5,
            ),
            25 => 
            array (
                'permission_id' => 169,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 169,
                'role_id' => 5,
            ),
            27 => 
            array (
                'permission_id' => 170,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 170,
                'role_id' => 5,
            ),
            29 => 
            array (
                'permission_id' => 172,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 172,
                'role_id' => 5,
            ),
            31 => 
            array (
                'permission_id' => 173,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 173,
                'role_id' => 5,
            ),
            33 => 
            array (
                'permission_id' => 174,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 174,
                'role_id' => 5,
            ),
            35 => 
            array (
                'permission_id' => 175,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 175,
                'role_id' => 5,
            ),
            37 => 
            array (
                'permission_id' => 177,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 177,
                'role_id' => 5,
            ),
            39 => 
            array (
                'permission_id' => 178,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 178,
                'role_id' => 2,
            ),
            41 => 
            array (
                'permission_id' => 178,
                'role_id' => 3,
            ),
            42 => 
            array (
                'permission_id' => 178,
                'role_id' => 4,
            ),
            43 => 
            array (
                'permission_id' => 178,
                'role_id' => 5,
            ),
            44 => 
            array (
                'permission_id' => 178,
                'role_id' => 6,
            ),
            45 => 
            array (
                'permission_id' => 178,
                'role_id' => 7,
            ),
            46 => 
            array (
                'permission_id' => 178,
                'role_id' => 8,
            ),
            47 => 
            array (
                'permission_id' => 178,
                'role_id' => 9,
            ),
            48 => 
            array (
                'permission_id' => 178,
                'role_id' => 10,
            ),
            49 => 
            array (
                'permission_id' => 179,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 179,
                'role_id' => 5,
            ),
            51 => 
            array (
                'permission_id' => 180,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 180,
                'role_id' => 5,
            ),
            53 => 
            array (
                'permission_id' => 181,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 181,
                'role_id' => 5,
            ),
            55 => 
            array (
                'permission_id' => 182,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 182,
                'role_id' => 5,
            ),
            57 => 
            array (
                'permission_id' => 183,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 183,
                'role_id' => 2,
            ),
            59 => 
            array (
                'permission_id' => 183,
                'role_id' => 3,
            ),
            60 => 
            array (
                'permission_id' => 183,
                'role_id' => 5,
            ),
            61 => 
            array (
                'permission_id' => 183,
                'role_id' => 6,
            ),
            62 => 
            array (
                'permission_id' => 183,
                'role_id' => 7,
            ),
            63 => 
            array (
                'permission_id' => 183,
                'role_id' => 8,
            ),
            64 => 
            array (
                'permission_id' => 183,
                'role_id' => 9,
            ),
            65 => 
            array (
                'permission_id' => 183,
                'role_id' => 10,
            ),
            66 => 
            array (
                'permission_id' => 184,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 184,
                'role_id' => 5,
            ),
            68 => 
            array (
                'permission_id' => 185,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 185,
                'role_id' => 5,
            ),
            70 => 
            array (
                'permission_id' => 186,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 186,
                'role_id' => 5,
            ),
            72 => 
            array (
                'permission_id' => 187,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 187,
                'role_id' => 2,
            ),
            74 => 
            array (
                'permission_id' => 187,
                'role_id' => 3,
            ),
            75 => 
            array (
                'permission_id' => 187,
                'role_id' => 5,
            ),
            76 => 
            array (
                'permission_id' => 187,
                'role_id' => 6,
            ),
            77 => 
            array (
                'permission_id' => 187,
                'role_id' => 7,
            ),
            78 => 
            array (
                'permission_id' => 187,
                'role_id' => 8,
            ),
            79 => 
            array (
                'permission_id' => 187,
                'role_id' => 9,
            ),
            80 => 
            array (
                'permission_id' => 187,
                'role_id' => 10,
            ),
            81 => 
            array (
                'permission_id' => 188,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 188,
                'role_id' => 5,
            ),
            83 => 
            array (
                'permission_id' => 189,
                'role_id' => 1,
            ),
            84 => 
            array (
                'permission_id' => 189,
                'role_id' => 5,
            ),
            85 => 
            array (
                'permission_id' => 190,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 190,
                'role_id' => 5,
            ),
            87 => 
            array (
                'permission_id' => 191,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 191,
                'role_id' => 2,
            ),
            89 => 
            array (
                'permission_id' => 191,
                'role_id' => 3,
            ),
            90 => 
            array (
                'permission_id' => 191,
                'role_id' => 4,
            ),
            91 => 
            array (
                'permission_id' => 191,
                'role_id' => 5,
            ),
            92 => 
            array (
                'permission_id' => 191,
                'role_id' => 6,
            ),
            93 => 
            array (
                'permission_id' => 191,
                'role_id' => 7,
            ),
            94 => 
            array (
                'permission_id' => 191,
                'role_id' => 9,
            ),
            95 => 
            array (
                'permission_id' => 192,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 192,
                'role_id' => 4,
            ),
            97 => 
            array (
                'permission_id' => 192,
                'role_id' => 5,
            ),
            98 => 
            array (
                'permission_id' => 193,
                'role_id' => 1,
            ),
            99 => 
            array (
                'permission_id' => 193,
                'role_id' => 4,
            ),
            100 => 
            array (
                'permission_id' => 193,
                'role_id' => 5,
            ),
            101 => 
            array (
                'permission_id' => 194,
                'role_id' => 1,
            ),
            102 => 
            array (
                'permission_id' => 194,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 194,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 195,
                'role_id' => 1,
            ),
            105 => 
            array (
                'permission_id' => 195,
                'role_id' => 2,
            ),
            106 => 
            array (
                'permission_id' => 195,
                'role_id' => 3,
            ),
            107 => 
            array (
                'permission_id' => 195,
                'role_id' => 4,
            ),
            108 => 
            array (
                'permission_id' => 195,
                'role_id' => 5,
            ),
            109 => 
            array (
                'permission_id' => 195,
                'role_id' => 6,
            ),
            110 => 
            array (
                'permission_id' => 195,
                'role_id' => 7,
            ),
            111 => 
            array (
                'permission_id' => 195,
                'role_id' => 8,
            ),
            112 => 
            array (
                'permission_id' => 195,
                'role_id' => 9,
            ),
            113 => 
            array (
                'permission_id' => 195,
                'role_id' => 10,
            ),
            114 => 
            array (
                'permission_id' => 196,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 196,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 197,
                'role_id' => 1,
            ),
            117 => 
            array (
                'permission_id' => 197,
                'role_id' => 5,
            ),
            118 => 
            array (
                'permission_id' => 198,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 198,
                'role_id' => 5,
            ),
            120 => 
            array (
                'permission_id' => 199,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 199,
                'role_id' => 2,
            ),
            122 => 
            array (
                'permission_id' => 199,
                'role_id' => 5,
            ),
            123 => 
            array (
                'permission_id' => 199,
                'role_id' => 6,
            ),
            124 => 
            array (
                'permission_id' => 199,
                'role_id' => 7,
            ),
            125 => 
            array (
                'permission_id' => 199,
                'role_id' => 8,
            ),
            126 => 
            array (
                'permission_id' => 200,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 200,
                'role_id' => 5,
            ),
            128 => 
            array (
                'permission_id' => 201,
                'role_id' => 1,
            ),
            129 => 
            array (
                'permission_id' => 201,
                'role_id' => 5,
            ),
            130 => 
            array (
                'permission_id' => 202,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 202,
                'role_id' => 5,
            ),
            132 => 
            array (
                'permission_id' => 203,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 203,
                'role_id' => 2,
            ),
            134 => 
            array (
                'permission_id' => 203,
                'role_id' => 5,
            ),
            135 => 
            array (
                'permission_id' => 203,
                'role_id' => 6,
            ),
            136 => 
            array (
                'permission_id' => 203,
                'role_id' => 7,
            ),
            137 => 
            array (
                'permission_id' => 203,
                'role_id' => 8,
            ),
            138 => 
            array (
                'permission_id' => 204,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 204,
                'role_id' => 5,
            ),
            140 => 
            array (
                'permission_id' => 205,
                'role_id' => 1,
            ),
            141 => 
            array (
                'permission_id' => 205,
                'role_id' => 5,
            ),
            142 => 
            array (
                'permission_id' => 206,
                'role_id' => 1,
            ),
            143 => 
            array (
                'permission_id' => 206,
                'role_id' => 5,
            ),
            144 => 
            array (
                'permission_id' => 207,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 207,
                'role_id' => 2,
            ),
            146 => 
            array (
                'permission_id' => 207,
                'role_id' => 5,
            ),
            147 => 
            array (
                'permission_id' => 207,
                'role_id' => 6,
            ),
            148 => 
            array (
                'permission_id' => 207,
                'role_id' => 7,
            ),
            149 => 
            array (
                'permission_id' => 207,
                'role_id' => 8,
            ),
            150 => 
            array (
                'permission_id' => 208,
                'role_id' => 1,
            ),
            151 => 
            array (
                'permission_id' => 208,
                'role_id' => 5,
            ),
            152 => 
            array (
                'permission_id' => 209,
                'role_id' => 1,
            ),
            153 => 
            array (
                'permission_id' => 209,
                'role_id' => 5,
            ),
            154 => 
            array (
                'permission_id' => 210,
                'role_id' => 1,
            ),
            155 => 
            array (
                'permission_id' => 210,
                'role_id' => 5,
            ),
            156 => 
            array (
                'permission_id' => 211,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 211,
                'role_id' => 2,
            ),
            158 => 
            array (
                'permission_id' => 211,
                'role_id' => 5,
            ),
            159 => 
            array (
                'permission_id' => 211,
                'role_id' => 6,
            ),
            160 => 
            array (
                'permission_id' => 211,
                'role_id' => 7,
            ),
            161 => 
            array (
                'permission_id' => 211,
                'role_id' => 8,
            ),
            162 => 
            array (
                'permission_id' => 212,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 212,
                'role_id' => 5,
            ),
            164 => 
            array (
                'permission_id' => 213,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 213,
                'role_id' => 5,
            ),
            166 => 
            array (
                'permission_id' => 214,
                'role_id' => 1,
            ),
            167 => 
            array (
                'permission_id' => 214,
                'role_id' => 5,
            ),
            168 => 
            array (
                'permission_id' => 215,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 215,
                'role_id' => 5,
            ),
            170 => 
            array (
                'permission_id' => 216,
                'role_id' => 1,
            ),
            171 => 
            array (
                'permission_id' => 216,
                'role_id' => 5,
            ),
            172 => 
            array (
                'permission_id' => 217,
                'role_id' => 1,
            ),
            173 => 
            array (
                'permission_id' => 217,
                'role_id' => 5,
            ),
            174 => 
            array (
                'permission_id' => 218,
                'role_id' => 1,
            ),
            175 => 
            array (
                'permission_id' => 218,
                'role_id' => 5,
            ),
            176 => 
            array (
                'permission_id' => 218,
                'role_id' => 6,
            ),
            177 => 
            array (
                'permission_id' => 218,
                'role_id' => 7,
            ),
            178 => 
            array (
                'permission_id' => 218,
                'role_id' => 8,
            ),
            179 => 
            array (
                'permission_id' => 219,
                'role_id' => 1,
            ),
            180 => 
            array (
                'permission_id' => 219,
                'role_id' => 5,
            ),
            181 => 
            array (
                'permission_id' => 220,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 220,
                'role_id' => 5,
            ),
            183 => 
            array (
                'permission_id' => 221,
                'role_id' => 1,
            ),
            184 => 
            array (
                'permission_id' => 221,
                'role_id' => 5,
            ),
            185 => 
            array (
                'permission_id' => 222,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 222,
                'role_id' => 5,
            ),
            187 => 
            array (
                'permission_id' => 222,
                'role_id' => 6,
            ),
            188 => 
            array (
                'permission_id' => 222,
                'role_id' => 7,
            ),
            189 => 
            array (
                'permission_id' => 222,
                'role_id' => 8,
            ),
            190 => 
            array (
                'permission_id' => 223,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 223,
                'role_id' => 2,
            ),
            192 => 
            array (
                'permission_id' => 223,
                'role_id' => 5,
            ),
            193 => 
            array (
                'permission_id' => 223,
                'role_id' => 6,
            ),
            194 => 
            array (
                'permission_id' => 223,
                'role_id' => 7,
            ),
            195 => 
            array (
                'permission_id' => 223,
                'role_id' => 8,
            ),
            196 => 
            array (
                'permission_id' => 224,
                'role_id' => 1,
            ),
            197 => 
            array (
                'permission_id' => 224,
                'role_id' => 5,
            ),
            198 => 
            array (
                'permission_id' => 225,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 225,
                'role_id' => 5,
            ),
            200 => 
            array (
                'permission_id' => 226,
                'role_id' => 1,
            ),
            201 => 
            array (
                'permission_id' => 226,
                'role_id' => 5,
            ),
            202 => 
            array (
                'permission_id' => 227,
                'role_id' => 1,
            ),
            203 => 
            array (
                'permission_id' => 227,
                'role_id' => 2,
            ),
            204 => 
            array (
                'permission_id' => 227,
                'role_id' => 5,
            ),
            205 => 
            array (
                'permission_id' => 227,
                'role_id' => 6,
            ),
            206 => 
            array (
                'permission_id' => 227,
                'role_id' => 7,
            ),
            207 => 
            array (
                'permission_id' => 227,
                'role_id' => 8,
            ),
            208 => 
            array (
                'permission_id' => 228,
                'role_id' => 1,
            ),
            209 => 
            array (
                'permission_id' => 228,
                'role_id' => 5,
            ),
            210 => 
            array (
                'permission_id' => 229,
                'role_id' => 1,
            ),
            211 => 
            array (
                'permission_id' => 229,
                'role_id' => 5,
            ),
            212 => 
            array (
                'permission_id' => 230,
                'role_id' => 1,
            ),
            213 => 
            array (
                'permission_id' => 230,
                'role_id' => 5,
            ),
            214 => 
            array (
                'permission_id' => 231,
                'role_id' => 1,
            ),
            215 => 
            array (
                'permission_id' => 231,
                'role_id' => 2,
            ),
            216 => 
            array (
                'permission_id' => 231,
                'role_id' => 4,
            ),
            217 => 
            array (
                'permission_id' => 231,
                'role_id' => 5,
            ),
            218 => 
            array (
                'permission_id' => 231,
                'role_id' => 6,
            ),
            219 => 
            array (
                'permission_id' => 231,
                'role_id' => 7,
            ),
            220 => 
            array (
                'permission_id' => 231,
                'role_id' => 8,
            ),
            221 => 
            array (
                'permission_id' => 231,
                'role_id' => 9,
            ),
            222 => 
            array (
                'permission_id' => 231,
                'role_id' => 10,
            ),
            223 => 
            array (
                'permission_id' => 232,
                'role_id' => 1,
            ),
            224 => 
            array (
                'permission_id' => 232,
                'role_id' => 5,
            ),
            225 => 
            array (
                'permission_id' => 233,
                'role_id' => 1,
            ),
            226 => 
            array (
                'permission_id' => 233,
                'role_id' => 5,
            ),
            227 => 
            array (
                'permission_id' => 234,
                'role_id' => 1,
            ),
            228 => 
            array (
                'permission_id' => 234,
                'role_id' => 2,
            ),
            229 => 
            array (
                'permission_id' => 234,
                'role_id' => 4,
            ),
            230 => 
            array (
                'permission_id' => 234,
                'role_id' => 5,
            ),
            231 => 
            array (
                'permission_id' => 234,
                'role_id' => 6,
            ),
            232 => 
            array (
                'permission_id' => 234,
                'role_id' => 7,
            ),
            233 => 
            array (
                'permission_id' => 234,
                'role_id' => 8,
            ),
            234 => 
            array (
                'permission_id' => 234,
                'role_id' => 9,
            ),
            235 => 
            array (
                'permission_id' => 234,
                'role_id' => 10,
            ),
            236 => 
            array (
                'permission_id' => 235,
                'role_id' => 1,
            ),
            237 => 
            array (
                'permission_id' => 235,
                'role_id' => 2,
            ),
            238 => 
            array (
                'permission_id' => 235,
                'role_id' => 4,
            ),
            239 => 
            array (
                'permission_id' => 235,
                'role_id' => 5,
            ),
            240 => 
            array (
                'permission_id' => 235,
                'role_id' => 6,
            ),
            241 => 
            array (
                'permission_id' => 235,
                'role_id' => 7,
            ),
            242 => 
            array (
                'permission_id' => 235,
                'role_id' => 8,
            ),
            243 => 
            array (
                'permission_id' => 235,
                'role_id' => 9,
            ),
            244 => 
            array (
                'permission_id' => 235,
                'role_id' => 10,
            ),
            245 => 
            array (
                'permission_id' => 236,
                'role_id' => 1,
            ),
            246 => 
            array (
                'permission_id' => 236,
                'role_id' => 5,
            ),
            247 => 
            array (
                'permission_id' => 237,
                'role_id' => 1,
            ),
            248 => 
            array (
                'permission_id' => 237,
                'role_id' => 5,
            ),
            249 => 
            array (
                'permission_id' => 238,
                'role_id' => 1,
            ),
            250 => 
            array (
                'permission_id' => 238,
                'role_id' => 5,
            ),
            251 => 
            array (
                'permission_id' => 239,
                'role_id' => 1,
            ),
            252 => 
            array (
                'permission_id' => 239,
                'role_id' => 2,
            ),
            253 => 
            array (
                'permission_id' => 239,
                'role_id' => 3,
            ),
            254 => 
            array (
                'permission_id' => 239,
                'role_id' => 4,
            ),
            255 => 
            array (
                'permission_id' => 239,
                'role_id' => 5,
            ),
            256 => 
            array (
                'permission_id' => 239,
                'role_id' => 6,
            ),
            257 => 
            array (
                'permission_id' => 241,
                'role_id' => 1,
            ),
            258 => 
            array (
                'permission_id' => 241,
                'role_id' => 3,
            ),
            259 => 
            array (
                'permission_id' => 241,
                'role_id' => 5,
            ),
            260 => 
            array (
                'permission_id' => 242,
                'role_id' => 1,
            ),
            261 => 
            array (
                'permission_id' => 242,
                'role_id' => 3,
            ),
            262 => 
            array (
                'permission_id' => 242,
                'role_id' => 5,
            ),
            263 => 
            array (
                'permission_id' => 244,
                'role_id' => 1,
            ),
            264 => 
            array (
                'permission_id' => 244,
                'role_id' => 3,
            ),
            265 => 
            array (
                'permission_id' => 244,
                'role_id' => 5,
            ),
            266 => 
            array (
                'permission_id' => 245,
                'role_id' => 1,
            ),
            267 => 
            array (
                'permission_id' => 245,
                'role_id' => 5,
            ),
            268 => 
            array (
                'permission_id' => 246,
                'role_id' => 1,
            ),
            269 => 
            array (
                'permission_id' => 246,
                'role_id' => 5,
            ),
            270 => 
            array (
                'permission_id' => 248,
                'role_id' => 1,
            ),
            271 => 
            array (
                'permission_id' => 248,
                'role_id' => 5,
            ),
            272 => 
            array (
                'permission_id' => 249,
                'role_id' => 1,
            ),
            273 => 
            array (
                'permission_id' => 249,
                'role_id' => 3,
            ),
            274 => 
            array (
                'permission_id' => 249,
                'role_id' => 5,
            ),
            275 => 
            array (
                'permission_id' => 249,
                'role_id' => 6,
            ),
            276 => 
            array (
                'permission_id' => 249,
                'role_id' => 7,
            ),
            277 => 
            array (
                'permission_id' => 249,
                'role_id' => 8,
            ),
            278 => 
            array (
                'permission_id' => 250,
                'role_id' => 1,
            ),
            279 => 
            array (
                'permission_id' => 250,
                'role_id' => 7,
            ),
            280 => 
            array (
                'permission_id' => 250,
                'role_id' => 8,
            ),
            281 => 
            array (
                'permission_id' => 251,
                'role_id' => 1,
            ),
            282 => 
            array (
                'permission_id' => 251,
                'role_id' => 5,
            ),
            283 => 
            array (
                'permission_id' => 252,
                'role_id' => 1,
            ),
            284 => 
            array (
                'permission_id' => 252,
                'role_id' => 2,
            ),
            285 => 
            array (
                'permission_id' => 252,
                'role_id' => 3,
            ),
            286 => 
            array (
                'permission_id' => 252,
                'role_id' => 5,
            ),
            287 => 
            array (
                'permission_id' => 252,
                'role_id' => 6,
            ),
            288 => 
            array (
                'permission_id' => 252,
                'role_id' => 7,
            ),
            289 => 
            array (
                'permission_id' => 252,
                'role_id' => 8,
            ),
            290 => 
            array (
                'permission_id' => 253,
                'role_id' => 1,
            ),
            291 => 
            array (
                'permission_id' => 253,
                'role_id' => 5,
            ),
            292 => 
            array (
                'permission_id' => 254,
                'role_id' => 1,
            ),
            293 => 
            array (
                'permission_id' => 254,
                'role_id' => 7,
            ),
            294 => 
            array (
                'permission_id' => 254,
                'role_id' => 8,
            ),
            295 => 
            array (
                'permission_id' => 255,
                'role_id' => 1,
            ),
            296 => 
            array (
                'permission_id' => 255,
                'role_id' => 2,
            ),
            297 => 
            array (
                'permission_id' => 255,
                'role_id' => 5,
            ),
            298 => 
            array (
                'permission_id' => 255,
                'role_id' => 6,
            ),
            299 => 
            array (
                'permission_id' => 255,
                'role_id' => 7,
            ),
            300 => 
            array (
                'permission_id' => 255,
                'role_id' => 8,
            ),
            301 => 
            array (
                'permission_id' => 256,
                'role_id' => 1,
            ),
            302 => 
            array (
                'permission_id' => 256,
                'role_id' => 5,
            ),
            303 => 
            array (
                'permission_id' => 256,
                'role_id' => 7,
            ),
            304 => 
            array (
                'permission_id' => 256,
                'role_id' => 8,
            ),
            305 => 
            array (
                'permission_id' => 257,
                'role_id' => 1,
            ),
            306 => 
            array (
                'permission_id' => 257,
                'role_id' => 5,
            ),
            307 => 
            array (
                'permission_id' => 257,
                'role_id' => 7,
            ),
            308 => 
            array (
                'permission_id' => 257,
                'role_id' => 8,
            ),
            309 => 
            array (
                'permission_id' => 258,
                'role_id' => 1,
            ),
            310 => 
            array (
                'permission_id' => 258,
                'role_id' => 5,
            ),
            311 => 
            array (
                'permission_id' => 258,
                'role_id' => 7,
            ),
            312 => 
            array (
                'permission_id' => 258,
                'role_id' => 8,
            ),
            313 => 
            array (
                'permission_id' => 259,
                'role_id' => 1,
            ),
            314 => 
            array (
                'permission_id' => 259,
                'role_id' => 2,
            ),
            315 => 
            array (
                'permission_id' => 259,
                'role_id' => 3,
            ),
            316 => 
            array (
                'permission_id' => 259,
                'role_id' => 5,
            ),
            317 => 
            array (
                'permission_id' => 259,
                'role_id' => 6,
            ),
            318 => 
            array (
                'permission_id' => 259,
                'role_id' => 7,
            ),
            319 => 
            array (
                'permission_id' => 259,
                'role_id' => 8,
            ),
            320 => 
            array (
                'permission_id' => 260,
                'role_id' => 1,
            ),
            321 => 
            array (
                'permission_id' => 260,
                'role_id' => 5,
            ),
            322 => 
            array (
                'permission_id' => 260,
                'role_id' => 7,
            ),
            323 => 
            array (
                'permission_id' => 260,
                'role_id' => 8,
            ),
            324 => 
            array (
                'permission_id' => 261,
                'role_id' => 1,
            ),
            325 => 
            array (
                'permission_id' => 261,
                'role_id' => 2,
            ),
            326 => 
            array (
                'permission_id' => 261,
                'role_id' => 3,
            ),
            327 => 
            array (
                'permission_id' => 261,
                'role_id' => 5,
            ),
            328 => 
            array (
                'permission_id' => 261,
                'role_id' => 6,
            ),
            329 => 
            array (
                'permission_id' => 261,
                'role_id' => 7,
            ),
            330 => 
            array (
                'permission_id' => 261,
                'role_id' => 8,
            ),
            331 => 
            array (
                'permission_id' => 262,
                'role_id' => 1,
            ),
            332 => 
            array (
                'permission_id' => 262,
                'role_id' => 5,
            ),
            333 => 
            array (
                'permission_id' => 262,
                'role_id' => 7,
            ),
            334 => 
            array (
                'permission_id' => 262,
                'role_id' => 8,
            ),
            335 => 
            array (
                'permission_id' => 263,
                'role_id' => 1,
            ),
            336 => 
            array (
                'permission_id' => 263,
                'role_id' => 5,
            ),
            337 => 
            array (
                'permission_id' => 263,
                'role_id' => 7,
            ),
            338 => 
            array (
                'permission_id' => 263,
                'role_id' => 8,
            ),
            339 => 
            array (
                'permission_id' => 264,
                'role_id' => 1,
            ),
            340 => 
            array (
                'permission_id' => 264,
                'role_id' => 2,
            ),
            341 => 
            array (
                'permission_id' => 264,
                'role_id' => 3,
            ),
            342 => 
            array (
                'permission_id' => 264,
                'role_id' => 5,
            ),
            343 => 
            array (
                'permission_id' => 264,
                'role_id' => 6,
            ),
            344 => 
            array (
                'permission_id' => 264,
                'role_id' => 7,
            ),
            345 => 
            array (
                'permission_id' => 264,
                'role_id' => 8,
            ),
            346 => 
            array (
                'permission_id' => 265,
                'role_id' => 1,
            ),
            347 => 
            array (
                'permission_id' => 265,
                'role_id' => 5,
            ),
            348 => 
            array (
                'permission_id' => 265,
                'role_id' => 7,
            ),
            349 => 
            array (
                'permission_id' => 265,
                'role_id' => 8,
            ),
            350 => 
            array (
                'permission_id' => 266,
                'role_id' => 1,
            ),
            351 => 
            array (
                'permission_id' => 266,
                'role_id' => 5,
            ),
            352 => 
            array (
                'permission_id' => 266,
                'role_id' => 7,
            ),
            353 => 
            array (
                'permission_id' => 266,
                'role_id' => 8,
            ),
            354 => 
            array (
                'permission_id' => 267,
                'role_id' => 1,
            ),
            355 => 
            array (
                'permission_id' => 267,
                'role_id' => 5,
            ),
            356 => 
            array (
                'permission_id' => 268,
                'role_id' => 1,
            ),
            357 => 
            array (
                'permission_id' => 268,
                'role_id' => 2,
            ),
            358 => 
            array (
                'permission_id' => 268,
                'role_id' => 3,
            ),
            359 => 
            array (
                'permission_id' => 268,
                'role_id' => 4,
            ),
            360 => 
            array (
                'permission_id' => 268,
                'role_id' => 5,
            ),
            361 => 
            array (
                'permission_id' => 268,
                'role_id' => 6,
            ),
            362 => 
            array (
                'permission_id' => 268,
                'role_id' => 7,
            ),
            363 => 
            array (
                'permission_id' => 268,
                'role_id' => 8,
            ),
            364 => 
            array (
                'permission_id' => 268,
                'role_id' => 9,
            ),
            365 => 
            array (
                'permission_id' => 268,
                'role_id' => 10,
            ),
            366 => 
            array (
                'permission_id' => 269,
                'role_id' => 1,
            ),
            367 => 
            array (
                'permission_id' => 269,
                'role_id' => 2,
            ),
            368 => 
            array (
                'permission_id' => 269,
                'role_id' => 3,
            ),
            369 => 
            array (
                'permission_id' => 269,
                'role_id' => 4,
            ),
            370 => 
            array (
                'permission_id' => 269,
                'role_id' => 5,
            ),
            371 => 
            array (
                'permission_id' => 269,
                'role_id' => 6,
            ),
            372 => 
            array (
                'permission_id' => 269,
                'role_id' => 7,
            ),
            373 => 
            array (
                'permission_id' => 269,
                'role_id' => 8,
            ),
            374 => 
            array (
                'permission_id' => 269,
                'role_id' => 9,
            ),
            375 => 
            array (
                'permission_id' => 269,
                'role_id' => 10,
            ),
            376 => 
            array (
                'permission_id' => 270,
                'role_id' => 1,
            ),
            377 => 
            array (
                'permission_id' => 270,
                'role_id' => 2,
            ),
            378 => 
            array (
                'permission_id' => 270,
                'role_id' => 3,
            ),
            379 => 
            array (
                'permission_id' => 270,
                'role_id' => 5,
            ),
            380 => 
            array (
                'permission_id' => 270,
                'role_id' => 6,
            ),
            381 => 
            array (
                'permission_id' => 270,
                'role_id' => 7,
            ),
            382 => 
            array (
                'permission_id' => 270,
                'role_id' => 8,
            ),
            383 => 
            array (
                'permission_id' => 270,
                'role_id' => 9,
            ),
            384 => 
            array (
                'permission_id' => 270,
                'role_id' => 10,
            ),
            385 => 
            array (
                'permission_id' => 271,
                'role_id' => 1,
            ),
            386 => 
            array (
                'permission_id' => 271,
                'role_id' => 2,
            ),
            387 => 
            array (
                'permission_id' => 271,
                'role_id' => 3,
            ),
            388 => 
            array (
                'permission_id' => 271,
                'role_id' => 5,
            ),
            389 => 
            array (
                'permission_id' => 271,
                'role_id' => 6,
            ),
            390 => 
            array (
                'permission_id' => 271,
                'role_id' => 7,
            ),
            391 => 
            array (
                'permission_id' => 271,
                'role_id' => 8,
            ),
            392 => 
            array (
                'permission_id' => 271,
                'role_id' => 9,
            ),
            393 => 
            array (
                'permission_id' => 271,
                'role_id' => 10,
            ),
            394 => 
            array (
                'permission_id' => 272,
                'role_id' => 1,
            ),
            395 => 
            array (
                'permission_id' => 272,
                'role_id' => 2,
            ),
            396 => 
            array (
                'permission_id' => 272,
                'role_id' => 3,
            ),
            397 => 
            array (
                'permission_id' => 272,
                'role_id' => 4,
            ),
            398 => 
            array (
                'permission_id' => 272,
                'role_id' => 5,
            ),
            399 => 
            array (
                'permission_id' => 272,
                'role_id' => 6,
            ),
            400 => 
            array (
                'permission_id' => 272,
                'role_id' => 7,
            ),
            401 => 
            array (
                'permission_id' => 272,
                'role_id' => 8,
            ),
            402 => 
            array (
                'permission_id' => 272,
                'role_id' => 9,
            ),
            403 => 
            array (
                'permission_id' => 272,
                'role_id' => 10,
            ),
            404 => 
            array (
                'permission_id' => 273,
                'role_id' => 1,
            ),
            405 => 
            array (
                'permission_id' => 273,
                'role_id' => 2,
            ),
            406 => 
            array (
                'permission_id' => 273,
                'role_id' => 3,
            ),
            407 => 
            array (
                'permission_id' => 273,
                'role_id' => 4,
            ),
            408 => 
            array (
                'permission_id' => 273,
                'role_id' => 5,
            ),
            409 => 
            array (
                'permission_id' => 273,
                'role_id' => 6,
            ),
            410 => 
            array (
                'permission_id' => 273,
                'role_id' => 7,
            ),
            411 => 
            array (
                'permission_id' => 273,
                'role_id' => 8,
            ),
            412 => 
            array (
                'permission_id' => 273,
                'role_id' => 9,
            ),
            413 => 
            array (
                'permission_id' => 273,
                'role_id' => 10,
            ),
            414 => 
            array (
                'permission_id' => 274,
                'role_id' => 1,
            ),
            415 => 
            array (
                'permission_id' => 274,
                'role_id' => 2,
            ),
            416 => 
            array (
                'permission_id' => 274,
                'role_id' => 3,
            ),
            417 => 
            array (
                'permission_id' => 274,
                'role_id' => 4,
            ),
            418 => 
            array (
                'permission_id' => 274,
                'role_id' => 5,
            ),
            419 => 
            array (
                'permission_id' => 274,
                'role_id' => 6,
            ),
            420 => 
            array (
                'permission_id' => 274,
                'role_id' => 7,
            ),
            421 => 
            array (
                'permission_id' => 274,
                'role_id' => 8,
            ),
            422 => 
            array (
                'permission_id' => 274,
                'role_id' => 9,
            ),
            423 => 
            array (
                'permission_id' => 274,
                'role_id' => 10,
            ),
            424 => 
            array (
                'permission_id' => 275,
                'role_id' => 1,
            ),
            425 => 
            array (
                'permission_id' => 275,
                'role_id' => 2,
            ),
            426 => 
            array (
                'permission_id' => 275,
                'role_id' => 3,
            ),
            427 => 
            array (
                'permission_id' => 275,
                'role_id' => 4,
            ),
            428 => 
            array (
                'permission_id' => 275,
                'role_id' => 5,
            ),
            429 => 
            array (
                'permission_id' => 275,
                'role_id' => 6,
            ),
            430 => 
            array (
                'permission_id' => 275,
                'role_id' => 7,
            ),
            431 => 
            array (
                'permission_id' => 275,
                'role_id' => 8,
            ),
            432 => 
            array (
                'permission_id' => 275,
                'role_id' => 9,
            ),
            433 => 
            array (
                'permission_id' => 275,
                'role_id' => 10,
            ),
            434 => 
            array (
                'permission_id' => 276,
                'role_id' => 1,
            ),
            435 => 
            array (
                'permission_id' => 276,
                'role_id' => 2,
            ),
            436 => 
            array (
                'permission_id' => 276,
                'role_id' => 3,
            ),
            437 => 
            array (
                'permission_id' => 276,
                'role_id' => 4,
            ),
            438 => 
            array (
                'permission_id' => 276,
                'role_id' => 5,
            ),
            439 => 
            array (
                'permission_id' => 276,
                'role_id' => 6,
            ),
            440 => 
            array (
                'permission_id' => 276,
                'role_id' => 7,
            ),
            441 => 
            array (
                'permission_id' => 276,
                'role_id' => 8,
            ),
            442 => 
            array (
                'permission_id' => 276,
                'role_id' => 9,
            ),
            443 => 
            array (
                'permission_id' => 276,
                'role_id' => 10,
            ),
            444 => 
            array (
                'permission_id' => 277,
                'role_id' => 1,
            ),
            445 => 
            array (
                'permission_id' => 277,
                'role_id' => 2,
            ),
            446 => 
            array (
                'permission_id' => 277,
                'role_id' => 3,
            ),
            447 => 
            array (
                'permission_id' => 277,
                'role_id' => 4,
            ),
            448 => 
            array (
                'permission_id' => 277,
                'role_id' => 5,
            ),
            449 => 
            array (
                'permission_id' => 277,
                'role_id' => 6,
            ),
            450 => 
            array (
                'permission_id' => 277,
                'role_id' => 7,
            ),
            451 => 
            array (
                'permission_id' => 277,
                'role_id' => 8,
            ),
            452 => 
            array (
                'permission_id' => 277,
                'role_id' => 9,
            ),
            453 => 
            array (
                'permission_id' => 277,
                'role_id' => 10,
            ),
        ));
        
        
    }
}