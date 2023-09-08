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
                'permission_id' => 36,
                'role_id' => 9,
            ),
            1 => 
            array (
                'permission_id' => 109,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 109,
                'role_id' => 2,
            ),
            3 => 
            array (
                'permission_id' => 109,
                'role_id' => 3,
            ),
            4 => 
            array (
                'permission_id' => 109,
                'role_id' => 4,
            ),
            5 => 
            array (
                'permission_id' => 109,
                'role_id' => 5,
            ),
            6 => 
            array (
                'permission_id' => 109,
                'role_id' => 6,
            ),
            7 => 
            array (
                'permission_id' => 109,
                'role_id' => 7,
            ),
            8 => 
            array (
                'permission_id' => 109,
                'role_id' => 8,
            ),
            9 => 
            array (
                'permission_id' => 109,
                'role_id' => 9,
            ),
            10 => 
            array (
                'permission_id' => 109,
                'role_id' => 10,
            ),
            11 => 
            array (
                'permission_id' => 168,
                'role_id' => 5,
            ),
            12 => 
            array (
                'permission_id' => 169,
                'role_id' => 5,
            ),
            13 => 
            array (
                'permission_id' => 170,
                'role_id' => 5,
            ),
            14 => 
            array (
                'permission_id' => 172,
                'role_id' => 5,
            ),
            15 => 
            array (
                'permission_id' => 173,
                'role_id' => 5,
            ),
            16 => 
            array (
                'permission_id' => 174,
                'role_id' => 5,
            ),
            17 => 
            array (
                'permission_id' => 175,
                'role_id' => 5,
            ),
            18 => 
            array (
                'permission_id' => 177,
                'role_id' => 5,
            ),
            19 => 
            array (
                'permission_id' => 178,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 178,
                'role_id' => 2,
            ),
            21 => 
            array (
                'permission_id' => 178,
                'role_id' => 3,
            ),
            22 => 
            array (
                'permission_id' => 178,
                'role_id' => 4,
            ),
            23 => 
            array (
                'permission_id' => 178,
                'role_id' => 5,
            ),
            24 => 
            array (
                'permission_id' => 178,
                'role_id' => 6,
            ),
            25 => 
            array (
                'permission_id' => 178,
                'role_id' => 7,
            ),
            26 => 
            array (
                'permission_id' => 178,
                'role_id' => 8,
            ),
            27 => 
            array (
                'permission_id' => 178,
                'role_id' => 9,
            ),
            28 => 
            array (
                'permission_id' => 178,
                'role_id' => 10,
            ),
            29 => 
            array (
                'permission_id' => 179,
                'role_id' => 5,
            ),
            30 => 
            array (
                'permission_id' => 181,
                'role_id' => 5,
            ),
            31 => 
            array (
                'permission_id' => 183,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 183,
                'role_id' => 2,
            ),
            33 => 
            array (
                'permission_id' => 183,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 183,
                'role_id' => 5,
            ),
            35 => 
            array (
                'permission_id' => 183,
                'role_id' => 6,
            ),
            36 => 
            array (
                'permission_id' => 183,
                'role_id' => 7,
            ),
            37 => 
            array (
                'permission_id' => 183,
                'role_id' => 8,
            ),
            38 => 
            array (
                'permission_id' => 183,
                'role_id' => 9,
            ),
            39 => 
            array (
                'permission_id' => 183,
                'role_id' => 10,
            ),
            40 => 
            array (
                'permission_id' => 184,
                'role_id' => 5,
            ),
            41 => 
            array (
                'permission_id' => 184,
                'role_id' => 7,
            ),
            42 => 
            array (
                'permission_id' => 184,
                'role_id' => 8,
            ),
            43 => 
            array (
                'permission_id' => 184,
                'role_id' => 9,
            ),
            44 => 
            array (
                'permission_id' => 185,
                'role_id' => 5,
            ),
            45 => 
            array (
                'permission_id' => 185,
                'role_id' => 7,
            ),
            46 => 
            array (
                'permission_id' => 185,
                'role_id' => 8,
            ),
            47 => 
            array (
                'permission_id' => 185,
                'role_id' => 9,
            ),
            48 => 
            array (
                'permission_id' => 186,
                'role_id' => 5,
            ),
            49 => 
            array (
                'permission_id' => 186,
                'role_id' => 7,
            ),
            50 => 
            array (
                'permission_id' => 186,
                'role_id' => 8,
            ),
            51 => 
            array (
                'permission_id' => 186,
                'role_id' => 9,
            ),
            52 => 
            array (
                'permission_id' => 187,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 187,
                'role_id' => 2,
            ),
            54 => 
            array (
                'permission_id' => 187,
                'role_id' => 3,
            ),
            55 => 
            array (
                'permission_id' => 187,
                'role_id' => 5,
            ),
            56 => 
            array (
                'permission_id' => 187,
                'role_id' => 6,
            ),
            57 => 
            array (
                'permission_id' => 187,
                'role_id' => 7,
            ),
            58 => 
            array (
                'permission_id' => 187,
                'role_id' => 8,
            ),
            59 => 
            array (
                'permission_id' => 187,
                'role_id' => 9,
            ),
            60 => 
            array (
                'permission_id' => 187,
                'role_id' => 10,
            ),
            61 => 
            array (
                'permission_id' => 188,
                'role_id' => 5,
            ),
            62 => 
            array (
                'permission_id' => 188,
                'role_id' => 7,
            ),
            63 => 
            array (
                'permission_id' => 188,
                'role_id' => 8,
            ),
            64 => 
            array (
                'permission_id' => 188,
                'role_id' => 9,
            ),
            65 => 
            array (
                'permission_id' => 189,
                'role_id' => 5,
            ),
            66 => 
            array (
                'permission_id' => 189,
                'role_id' => 7,
            ),
            67 => 
            array (
                'permission_id' => 189,
                'role_id' => 8,
            ),
            68 => 
            array (
                'permission_id' => 189,
                'role_id' => 9,
            ),
            69 => 
            array (
                'permission_id' => 190,
                'role_id' => 5,
            ),
            70 => 
            array (
                'permission_id' => 190,
                'role_id' => 7,
            ),
            71 => 
            array (
                'permission_id' => 190,
                'role_id' => 8,
            ),
            72 => 
            array (
                'permission_id' => 190,
                'role_id' => 9,
            ),
            73 => 
            array (
                'permission_id' => 191,
                'role_id' => 5,
            ),
            74 => 
            array (
                'permission_id' => 191,
                'role_id' => 6,
            ),
            75 => 
            array (
                'permission_id' => 192,
                'role_id' => 5,
            ),
            76 => 
            array (
                'permission_id' => 193,
                'role_id' => 5,
            ),
            77 => 
            array (
                'permission_id' => 194,
                'role_id' => 5,
            ),
            78 => 
            array (
                'permission_id' => 195,
                'role_id' => 5,
            ),
            79 => 
            array (
                'permission_id' => 196,
                'role_id' => 5,
            ),
            80 => 
            array (
                'permission_id' => 197,
                'role_id' => 5,
            ),
            81 => 
            array (
                'permission_id' => 198,
                'role_id' => 5,
            ),
            82 => 
            array (
                'permission_id' => 199,
                'role_id' => 5,
            ),
            83 => 
            array (
                'permission_id' => 199,
                'role_id' => 7,
            ),
            84 => 
            array (
                'permission_id' => 199,
                'role_id' => 8,
            ),
            85 => 
            array (
                'permission_id' => 199,
                'role_id' => 9,
            ),
            86 => 
            array (
                'permission_id' => 200,
                'role_id' => 5,
            ),
            87 => 
            array (
                'permission_id' => 200,
                'role_id' => 7,
            ),
            88 => 
            array (
                'permission_id' => 200,
                'role_id' => 9,
            ),
            89 => 
            array (
                'permission_id' => 201,
                'role_id' => 5,
            ),
            90 => 
            array (
                'permission_id' => 201,
                'role_id' => 7,
            ),
            91 => 
            array (
                'permission_id' => 201,
                'role_id' => 9,
            ),
            92 => 
            array (
                'permission_id' => 202,
                'role_id' => 5,
            ),
            93 => 
            array (
                'permission_id' => 202,
                'role_id' => 7,
            ),
            94 => 
            array (
                'permission_id' => 202,
                'role_id' => 9,
            ),
            95 => 
            array (
                'permission_id' => 203,
                'role_id' => 5,
            ),
            96 => 
            array (
                'permission_id' => 203,
                'role_id' => 7,
            ),
            97 => 
            array (
                'permission_id' => 203,
                'role_id' => 8,
            ),
            98 => 
            array (
                'permission_id' => 203,
                'role_id' => 9,
            ),
            99 => 
            array (
                'permission_id' => 204,
                'role_id' => 5,
            ),
            100 => 
            array (
                'permission_id' => 204,
                'role_id' => 7,
            ),
            101 => 
            array (
                'permission_id' => 204,
                'role_id' => 9,
            ),
            102 => 
            array (
                'permission_id' => 205,
                'role_id' => 5,
            ),
            103 => 
            array (
                'permission_id' => 205,
                'role_id' => 7,
            ),
            104 => 
            array (
                'permission_id' => 205,
                'role_id' => 9,
            ),
            105 => 
            array (
                'permission_id' => 206,
                'role_id' => 5,
            ),
            106 => 
            array (
                'permission_id' => 206,
                'role_id' => 7,
            ),
            107 => 
            array (
                'permission_id' => 206,
                'role_id' => 9,
            ),
            108 => 
            array (
                'permission_id' => 207,
                'role_id' => 5,
            ),
            109 => 
            array (
                'permission_id' => 207,
                'role_id' => 7,
            ),
            110 => 
            array (
                'permission_id' => 207,
                'role_id' => 8,
            ),
            111 => 
            array (
                'permission_id' => 207,
                'role_id' => 9,
            ),
            112 => 
            array (
                'permission_id' => 208,
                'role_id' => 5,
            ),
            113 => 
            array (
                'permission_id' => 208,
                'role_id' => 7,
            ),
            114 => 
            array (
                'permission_id' => 208,
                'role_id' => 9,
            ),
            115 => 
            array (
                'permission_id' => 209,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 209,
                'role_id' => 7,
            ),
            117 => 
            array (
                'permission_id' => 209,
                'role_id' => 9,
            ),
            118 => 
            array (
                'permission_id' => 210,
                'role_id' => 5,
            ),
            119 => 
            array (
                'permission_id' => 210,
                'role_id' => 7,
            ),
            120 => 
            array (
                'permission_id' => 210,
                'role_id' => 9,
            ),
            121 => 
            array (
                'permission_id' => 211,
                'role_id' => 5,
            ),
            122 => 
            array (
                'permission_id' => 211,
                'role_id' => 7,
            ),
            123 => 
            array (
                'permission_id' => 211,
                'role_id' => 8,
            ),
            124 => 
            array (
                'permission_id' => 211,
                'role_id' => 9,
            ),
            125 => 
            array (
                'permission_id' => 212,
                'role_id' => 5,
            ),
            126 => 
            array (
                'permission_id' => 212,
                'role_id' => 7,
            ),
            127 => 
            array (
                'permission_id' => 212,
                'role_id' => 9,
            ),
            128 => 
            array (
                'permission_id' => 213,
                'role_id' => 5,
            ),
            129 => 
            array (
                'permission_id' => 213,
                'role_id' => 7,
            ),
            130 => 
            array (
                'permission_id' => 213,
                'role_id' => 9,
            ),
            131 => 
            array (
                'permission_id' => 214,
                'role_id' => 5,
            ),
            132 => 
            array (
                'permission_id' => 214,
                'role_id' => 7,
            ),
            133 => 
            array (
                'permission_id' => 214,
                'role_id' => 9,
            ),
            134 => 
            array (
                'permission_id' => 215,
                'role_id' => 5,
            ),
            135 => 
            array (
                'permission_id' => 215,
                'role_id' => 7,
            ),
            136 => 
            array (
                'permission_id' => 215,
                'role_id' => 9,
            ),
            137 => 
            array (
                'permission_id' => 216,
                'role_id' => 5,
            ),
            138 => 
            array (
                'permission_id' => 216,
                'role_id' => 7,
            ),
            139 => 
            array (
                'permission_id' => 216,
                'role_id' => 9,
            ),
            140 => 
            array (
                'permission_id' => 217,
                'role_id' => 5,
            ),
            141 => 
            array (
                'permission_id' => 217,
                'role_id' => 7,
            ),
            142 => 
            array (
                'permission_id' => 217,
                'role_id' => 9,
            ),
            143 => 
            array (
                'permission_id' => 218,
                'role_id' => 5,
            ),
            144 => 
            array (
                'permission_id' => 218,
                'role_id' => 7,
            ),
            145 => 
            array (
                'permission_id' => 218,
                'role_id' => 8,
            ),
            146 => 
            array (
                'permission_id' => 218,
                'role_id' => 9,
            ),
            147 => 
            array (
                'permission_id' => 219,
                'role_id' => 5,
            ),
            148 => 
            array (
                'permission_id' => 219,
                'role_id' => 7,
            ),
            149 => 
            array (
                'permission_id' => 219,
                'role_id' => 9,
            ),
            150 => 
            array (
                'permission_id' => 220,
                'role_id' => 5,
            ),
            151 => 
            array (
                'permission_id' => 220,
                'role_id' => 7,
            ),
            152 => 
            array (
                'permission_id' => 220,
                'role_id' => 9,
            ),
            153 => 
            array (
                'permission_id' => 221,
                'role_id' => 5,
            ),
            154 => 
            array (
                'permission_id' => 221,
                'role_id' => 7,
            ),
            155 => 
            array (
                'permission_id' => 221,
                'role_id' => 9,
            ),
            156 => 
            array (
                'permission_id' => 222,
                'role_id' => 5,
            ),
            157 => 
            array (
                'permission_id' => 222,
                'role_id' => 7,
            ),
            158 => 
            array (
                'permission_id' => 222,
                'role_id' => 8,
            ),
            159 => 
            array (
                'permission_id' => 222,
                'role_id' => 9,
            ),
            160 => 
            array (
                'permission_id' => 223,
                'role_id' => 5,
            ),
            161 => 
            array (
                'permission_id' => 223,
                'role_id' => 7,
            ),
            162 => 
            array (
                'permission_id' => 223,
                'role_id' => 8,
            ),
            163 => 
            array (
                'permission_id' => 223,
                'role_id' => 9,
            ),
            164 => 
            array (
                'permission_id' => 224,
                'role_id' => 5,
            ),
            165 => 
            array (
                'permission_id' => 224,
                'role_id' => 7,
            ),
            166 => 
            array (
                'permission_id' => 224,
                'role_id' => 9,
            ),
            167 => 
            array (
                'permission_id' => 225,
                'role_id' => 5,
            ),
            168 => 
            array (
                'permission_id' => 225,
                'role_id' => 7,
            ),
            169 => 
            array (
                'permission_id' => 225,
                'role_id' => 9,
            ),
            170 => 
            array (
                'permission_id' => 226,
                'role_id' => 5,
            ),
            171 => 
            array (
                'permission_id' => 226,
                'role_id' => 7,
            ),
            172 => 
            array (
                'permission_id' => 226,
                'role_id' => 9,
            ),
            173 => 
            array (
                'permission_id' => 227,
                'role_id' => 5,
            ),
            174 => 
            array (
                'permission_id' => 227,
                'role_id' => 7,
            ),
            175 => 
            array (
                'permission_id' => 227,
                'role_id' => 8,
            ),
            176 => 
            array (
                'permission_id' => 227,
                'role_id' => 9,
            ),
            177 => 
            array (
                'permission_id' => 228,
                'role_id' => 5,
            ),
            178 => 
            array (
                'permission_id' => 228,
                'role_id' => 7,
            ),
            179 => 
            array (
                'permission_id' => 228,
                'role_id' => 9,
            ),
            180 => 
            array (
                'permission_id' => 229,
                'role_id' => 5,
            ),
            181 => 
            array (
                'permission_id' => 229,
                'role_id' => 7,
            ),
            182 => 
            array (
                'permission_id' => 229,
                'role_id' => 9,
            ),
            183 => 
            array (
                'permission_id' => 230,
                'role_id' => 5,
            ),
            184 => 
            array (
                'permission_id' => 230,
                'role_id' => 7,
            ),
            185 => 
            array (
                'permission_id' => 230,
                'role_id' => 9,
            ),
            186 => 
            array (
                'permission_id' => 231,
                'role_id' => 5,
            ),
            187 => 
            array (
                'permission_id' => 231,
                'role_id' => 6,
            ),
            188 => 
            array (
                'permission_id' => 231,
                'role_id' => 7,
            ),
            189 => 
            array (
                'permission_id' => 231,
                'role_id' => 8,
            ),
            190 => 
            array (
                'permission_id' => 233,
                'role_id' => 5,
            ),
            191 => 
            array (
                'permission_id' => 234,
                'role_id' => 5,
            ),
            192 => 
            array (
                'permission_id' => 235,
                'role_id' => 5,
            ),
            193 => 
            array (
                'permission_id' => 236,
                'role_id' => 5,
            ),
            194 => 
            array (
                'permission_id' => 237,
                'role_id' => 5,
            ),
            195 => 
            array (
                'permission_id' => 238,
                'role_id' => 5,
            ),
            196 => 
            array (
                'permission_id' => 239,
                'role_id' => 5,
            ),
            197 => 
            array (
                'permission_id' => 241,
                'role_id' => 5,
            ),
            198 => 
            array (
                'permission_id' => 242,
                'role_id' => 5,
            ),
            199 => 
            array (
                'permission_id' => 244,
                'role_id' => 5,
            ),
            200 => 
            array (
                'permission_id' => 245,
                'role_id' => 5,
            ),
            201 => 
            array (
                'permission_id' => 246,
                'role_id' => 5,
            ),
            202 => 
            array (
                'permission_id' => 249,
                'role_id' => 5,
            ),
            203 => 
            array (
                'permission_id' => 249,
                'role_id' => 7,
            ),
            204 => 
            array (
                'permission_id' => 249,
                'role_id' => 8,
            ),
            205 => 
            array (
                'permission_id' => 249,
                'role_id' => 9,
            ),
            206 => 
            array (
                'permission_id' => 250,
                'role_id' => 7,
            ),
            207 => 
            array (
                'permission_id' => 250,
                'role_id' => 8,
            ),
            208 => 
            array (
                'permission_id' => 250,
                'role_id' => 9,
            ),
            209 => 
            array (
                'permission_id' => 251,
                'role_id' => 5,
            ),
            210 => 
            array (
                'permission_id' => 251,
                'role_id' => 9,
            ),
            211 => 
            array (
                'permission_id' => 252,
                'role_id' => 5,
            ),
            212 => 
            array (
                'permission_id' => 252,
                'role_id' => 7,
            ),
            213 => 
            array (
                'permission_id' => 252,
                'role_id' => 8,
            ),
            214 => 
            array (
                'permission_id' => 252,
                'role_id' => 9,
            ),
            215 => 
            array (
                'permission_id' => 253,
                'role_id' => 5,
            ),
            216 => 
            array (
                'permission_id' => 253,
                'role_id' => 9,
            ),
            217 => 
            array (
                'permission_id' => 254,
                'role_id' => 7,
            ),
            218 => 
            array (
                'permission_id' => 254,
                'role_id' => 8,
            ),
            219 => 
            array (
                'permission_id' => 254,
                'role_id' => 9,
            ),
            220 => 
            array (
                'permission_id' => 255,
                'role_id' => 5,
            ),
            221 => 
            array (
                'permission_id' => 255,
                'role_id' => 7,
            ),
            222 => 
            array (
                'permission_id' => 255,
                'role_id' => 8,
            ),
            223 => 
            array (
                'permission_id' => 255,
                'role_id' => 9,
            ),
            224 => 
            array (
                'permission_id' => 256,
                'role_id' => 5,
            ),
            225 => 
            array (
                'permission_id' => 256,
                'role_id' => 7,
            ),
            226 => 
            array (
                'permission_id' => 256,
                'role_id' => 8,
            ),
            227 => 
            array (
                'permission_id' => 256,
                'role_id' => 9,
            ),
            228 => 
            array (
                'permission_id' => 257,
                'role_id' => 5,
            ),
            229 => 
            array (
                'permission_id' => 257,
                'role_id' => 7,
            ),
            230 => 
            array (
                'permission_id' => 257,
                'role_id' => 8,
            ),
            231 => 
            array (
                'permission_id' => 257,
                'role_id' => 9,
            ),
            232 => 
            array (
                'permission_id' => 258,
                'role_id' => 5,
            ),
            233 => 
            array (
                'permission_id' => 258,
                'role_id' => 7,
            ),
            234 => 
            array (
                'permission_id' => 258,
                'role_id' => 8,
            ),
            235 => 
            array (
                'permission_id' => 258,
                'role_id' => 9,
            ),
            236 => 
            array (
                'permission_id' => 259,
                'role_id' => 5,
            ),
            237 => 
            array (
                'permission_id' => 259,
                'role_id' => 6,
            ),
            238 => 
            array (
                'permission_id' => 260,
                'role_id' => 5,
            ),
            239 => 
            array (
                'permission_id' => 261,
                'role_id' => 5,
            ),
            240 => 
            array (
                'permission_id' => 262,
                'role_id' => 5,
            ),
            241 => 
            array (
                'permission_id' => 263,
                'role_id' => 5,
            ),
            242 => 
            array (
                'permission_id' => 264,
                'role_id' => 5,
            ),
            243 => 
            array (
                'permission_id' => 265,
                'role_id' => 5,
            ),
            244 => 
            array (
                'permission_id' => 266,
                'role_id' => 5,
            ),
            245 => 
            array (
                'permission_id' => 267,
                'role_id' => 5,
            ),
            246 => 
            array (
                'permission_id' => 268,
                'role_id' => 1,
            ),
            247 => 
            array (
                'permission_id' => 268,
                'role_id' => 2,
            ),
            248 => 
            array (
                'permission_id' => 268,
                'role_id' => 4,
            ),
            249 => 
            array (
                'permission_id' => 268,
                'role_id' => 5,
            ),
            250 => 
            array (
                'permission_id' => 268,
                'role_id' => 6,
            ),
            251 => 
            array (
                'permission_id' => 268,
                'role_id' => 7,
            ),
            252 => 
            array (
                'permission_id' => 268,
                'role_id' => 8,
            ),
            253 => 
            array (
                'permission_id' => 268,
                'role_id' => 9,
            ),
            254 => 
            array (
                'permission_id' => 268,
                'role_id' => 10,
            ),
            255 => 
            array (
                'permission_id' => 269,
                'role_id' => 1,
            ),
            256 => 
            array (
                'permission_id' => 269,
                'role_id' => 2,
            ),
            257 => 
            array (
                'permission_id' => 269,
                'role_id' => 4,
            ),
            258 => 
            array (
                'permission_id' => 269,
                'role_id' => 5,
            ),
            259 => 
            array (
                'permission_id' => 269,
                'role_id' => 6,
            ),
            260 => 
            array (
                'permission_id' => 269,
                'role_id' => 7,
            ),
            261 => 
            array (
                'permission_id' => 269,
                'role_id' => 8,
            ),
            262 => 
            array (
                'permission_id' => 269,
                'role_id' => 9,
            ),
            263 => 
            array (
                'permission_id' => 269,
                'role_id' => 10,
            ),
            264 => 
            array (
                'permission_id' => 270,
                'role_id' => 1,
            ),
            265 => 
            array (
                'permission_id' => 270,
                'role_id' => 2,
            ),
            266 => 
            array (
                'permission_id' => 270,
                'role_id' => 4,
            ),
            267 => 
            array (
                'permission_id' => 270,
                'role_id' => 5,
            ),
            268 => 
            array (
                'permission_id' => 270,
                'role_id' => 6,
            ),
            269 => 
            array (
                'permission_id' => 270,
                'role_id' => 7,
            ),
            270 => 
            array (
                'permission_id' => 270,
                'role_id' => 8,
            ),
            271 => 
            array (
                'permission_id' => 270,
                'role_id' => 9,
            ),
            272 => 
            array (
                'permission_id' => 270,
                'role_id' => 10,
            ),
            273 => 
            array (
                'permission_id' => 271,
                'role_id' => 1,
            ),
            274 => 
            array (
                'permission_id' => 271,
                'role_id' => 2,
            ),
            275 => 
            array (
                'permission_id' => 271,
                'role_id' => 4,
            ),
            276 => 
            array (
                'permission_id' => 271,
                'role_id' => 5,
            ),
            277 => 
            array (
                'permission_id' => 271,
                'role_id' => 6,
            ),
            278 => 
            array (
                'permission_id' => 271,
                'role_id' => 7,
            ),
            279 => 
            array (
                'permission_id' => 271,
                'role_id' => 8,
            ),
            280 => 
            array (
                'permission_id' => 271,
                'role_id' => 9,
            ),
            281 => 
            array (
                'permission_id' => 271,
                'role_id' => 10,
            ),
            282 => 
            array (
                'permission_id' => 272,
                'role_id' => 1,
            ),
            283 => 
            array (
                'permission_id' => 272,
                'role_id' => 2,
            ),
            284 => 
            array (
                'permission_id' => 272,
                'role_id' => 4,
            ),
            285 => 
            array (
                'permission_id' => 272,
                'role_id' => 5,
            ),
            286 => 
            array (
                'permission_id' => 272,
                'role_id' => 6,
            ),
            287 => 
            array (
                'permission_id' => 272,
                'role_id' => 7,
            ),
            288 => 
            array (
                'permission_id' => 272,
                'role_id' => 8,
            ),
            289 => 
            array (
                'permission_id' => 272,
                'role_id' => 9,
            ),
            290 => 
            array (
                'permission_id' => 272,
                'role_id' => 10,
            ),
            291 => 
            array (
                'permission_id' => 273,
                'role_id' => 1,
            ),
            292 => 
            array (
                'permission_id' => 273,
                'role_id' => 2,
            ),
            293 => 
            array (
                'permission_id' => 273,
                'role_id' => 4,
            ),
            294 => 
            array (
                'permission_id' => 273,
                'role_id' => 5,
            ),
            295 => 
            array (
                'permission_id' => 273,
                'role_id' => 6,
            ),
            296 => 
            array (
                'permission_id' => 273,
                'role_id' => 7,
            ),
            297 => 
            array (
                'permission_id' => 273,
                'role_id' => 8,
            ),
            298 => 
            array (
                'permission_id' => 273,
                'role_id' => 9,
            ),
            299 => 
            array (
                'permission_id' => 273,
                'role_id' => 10,
            ),
            300 => 
            array (
                'permission_id' => 274,
                'role_id' => 1,
            ),
            301 => 
            array (
                'permission_id' => 274,
                'role_id' => 2,
            ),
            302 => 
            array (
                'permission_id' => 274,
                'role_id' => 4,
            ),
            303 => 
            array (
                'permission_id' => 274,
                'role_id' => 5,
            ),
            304 => 
            array (
                'permission_id' => 274,
                'role_id' => 6,
            ),
            305 => 
            array (
                'permission_id' => 274,
                'role_id' => 7,
            ),
            306 => 
            array (
                'permission_id' => 274,
                'role_id' => 8,
            ),
            307 => 
            array (
                'permission_id' => 274,
                'role_id' => 9,
            ),
            308 => 
            array (
                'permission_id' => 274,
                'role_id' => 10,
            ),
            309 => 
            array (
                'permission_id' => 275,
                'role_id' => 1,
            ),
            310 => 
            array (
                'permission_id' => 275,
                'role_id' => 2,
            ),
            311 => 
            array (
                'permission_id' => 275,
                'role_id' => 4,
            ),
            312 => 
            array (
                'permission_id' => 275,
                'role_id' => 5,
            ),
            313 => 
            array (
                'permission_id' => 275,
                'role_id' => 6,
            ),
            314 => 
            array (
                'permission_id' => 275,
                'role_id' => 7,
            ),
            315 => 
            array (
                'permission_id' => 275,
                'role_id' => 8,
            ),
            316 => 
            array (
                'permission_id' => 275,
                'role_id' => 9,
            ),
            317 => 
            array (
                'permission_id' => 275,
                'role_id' => 10,
            ),
            318 => 
            array (
                'permission_id' => 276,
                'role_id' => 1,
            ),
            319 => 
            array (
                'permission_id' => 276,
                'role_id' => 2,
            ),
            320 => 
            array (
                'permission_id' => 276,
                'role_id' => 4,
            ),
            321 => 
            array (
                'permission_id' => 276,
                'role_id' => 5,
            ),
            322 => 
            array (
                'permission_id' => 276,
                'role_id' => 6,
            ),
            323 => 
            array (
                'permission_id' => 276,
                'role_id' => 7,
            ),
            324 => 
            array (
                'permission_id' => 276,
                'role_id' => 8,
            ),
            325 => 
            array (
                'permission_id' => 276,
                'role_id' => 9,
            ),
            326 => 
            array (
                'permission_id' => 276,
                'role_id' => 10,
            ),
            327 => 
            array (
                'permission_id' => 277,
                'role_id' => 1,
            ),
            328 => 
            array (
                'permission_id' => 277,
                'role_id' => 2,
            ),
            329 => 
            array (
                'permission_id' => 277,
                'role_id' => 4,
            ),
            330 => 
            array (
                'permission_id' => 277,
                'role_id' => 5,
            ),
            331 => 
            array (
                'permission_id' => 277,
                'role_id' => 6,
            ),
            332 => 
            array (
                'permission_id' => 277,
                'role_id' => 7,
            ),
            333 => 
            array (
                'permission_id' => 277,
                'role_id' => 8,
            ),
            334 => 
            array (
                'permission_id' => 277,
                'role_id' => 9,
            ),
            335 => 
            array (
                'permission_id' => 277,
                'role_id' => 10,
            ),
            336 => 
            array (
                'permission_id' => 278,
                'role_id' => 5,
            ),
            337 => 
            array (
                'permission_id' => 279,
                'role_id' => 5,
            ),
            338 => 
            array (
                'permission_id' => 280,
                'role_id' => 5,
            ),
            339 => 
            array (
                'permission_id' => 281,
                'role_id' => 5,
            ),
            340 => 
            array (
                'permission_id' => 281,
                'role_id' => 7,
            ),
            341 => 
            array (
                'permission_id' => 281,
                'role_id' => 8,
            ),
            342 => 
            array (
                'permission_id' => 282,
                'role_id' => 5,
            ),
            343 => 
            array (
                'permission_id' => 282,
                'role_id' => 7,
            ),
            344 => 
            array (
                'permission_id' => 282,
                'role_id' => 8,
            ),
            345 => 
            array (
                'permission_id' => 283,
                'role_id' => 5,
            ),
            346 => 
            array (
                'permission_id' => 284,
                'role_id' => 5,
            ),
            347 => 
            array (
                'permission_id' => 285,
                'role_id' => 5,
            ),
            348 => 
            array (
                'permission_id' => 285,
                'role_id' => 7,
            ),
            349 => 
            array (
                'permission_id' => 285,
                'role_id' => 8,
            ),
            350 => 
            array (
                'permission_id' => 286,
                'role_id' => 5,
            ),
        ));
        
        
    }
}