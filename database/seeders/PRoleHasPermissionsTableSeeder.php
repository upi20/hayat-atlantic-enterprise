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
                'role_id' => 9,
            ),
            43 => 
            array (
                'permission_id' => 185,
                'role_id' => 5,
            ),
            44 => 
            array (
                'permission_id' => 185,
                'role_id' => 7,
            ),
            45 => 
            array (
                'permission_id' => 185,
                'role_id' => 9,
            ),
            46 => 
            array (
                'permission_id' => 186,
                'role_id' => 5,
            ),
            47 => 
            array (
                'permission_id' => 186,
                'role_id' => 7,
            ),
            48 => 
            array (
                'permission_id' => 186,
                'role_id' => 9,
            ),
            49 => 
            array (
                'permission_id' => 187,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 187,
                'role_id' => 2,
            ),
            51 => 
            array (
                'permission_id' => 187,
                'role_id' => 3,
            ),
            52 => 
            array (
                'permission_id' => 187,
                'role_id' => 5,
            ),
            53 => 
            array (
                'permission_id' => 187,
                'role_id' => 6,
            ),
            54 => 
            array (
                'permission_id' => 187,
                'role_id' => 7,
            ),
            55 => 
            array (
                'permission_id' => 187,
                'role_id' => 8,
            ),
            56 => 
            array (
                'permission_id' => 187,
                'role_id' => 9,
            ),
            57 => 
            array (
                'permission_id' => 187,
                'role_id' => 10,
            ),
            58 => 
            array (
                'permission_id' => 188,
                'role_id' => 5,
            ),
            59 => 
            array (
                'permission_id' => 188,
                'role_id' => 7,
            ),
            60 => 
            array (
                'permission_id' => 188,
                'role_id' => 9,
            ),
            61 => 
            array (
                'permission_id' => 189,
                'role_id' => 5,
            ),
            62 => 
            array (
                'permission_id' => 189,
                'role_id' => 7,
            ),
            63 => 
            array (
                'permission_id' => 189,
                'role_id' => 9,
            ),
            64 => 
            array (
                'permission_id' => 190,
                'role_id' => 5,
            ),
            65 => 
            array (
                'permission_id' => 190,
                'role_id' => 7,
            ),
            66 => 
            array (
                'permission_id' => 190,
                'role_id' => 9,
            ),
            67 => 
            array (
                'permission_id' => 191,
                'role_id' => 5,
            ),
            68 => 
            array (
                'permission_id' => 192,
                'role_id' => 5,
            ),
            69 => 
            array (
                'permission_id' => 193,
                'role_id' => 5,
            ),
            70 => 
            array (
                'permission_id' => 194,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 195,
                'role_id' => 5,
            ),
            72 => 
            array (
                'permission_id' => 196,
                'role_id' => 5,
            ),
            73 => 
            array (
                'permission_id' => 197,
                'role_id' => 5,
            ),
            74 => 
            array (
                'permission_id' => 198,
                'role_id' => 5,
            ),
            75 => 
            array (
                'permission_id' => 199,
                'role_id' => 5,
            ),
            76 => 
            array (
                'permission_id' => 199,
                'role_id' => 7,
            ),
            77 => 
            array (
                'permission_id' => 199,
                'role_id' => 9,
            ),
            78 => 
            array (
                'permission_id' => 200,
                'role_id' => 5,
            ),
            79 => 
            array (
                'permission_id' => 200,
                'role_id' => 7,
            ),
            80 => 
            array (
                'permission_id' => 200,
                'role_id' => 9,
            ),
            81 => 
            array (
                'permission_id' => 201,
                'role_id' => 5,
            ),
            82 => 
            array (
                'permission_id' => 201,
                'role_id' => 7,
            ),
            83 => 
            array (
                'permission_id' => 201,
                'role_id' => 9,
            ),
            84 => 
            array (
                'permission_id' => 202,
                'role_id' => 5,
            ),
            85 => 
            array (
                'permission_id' => 202,
                'role_id' => 7,
            ),
            86 => 
            array (
                'permission_id' => 202,
                'role_id' => 9,
            ),
            87 => 
            array (
                'permission_id' => 203,
                'role_id' => 5,
            ),
            88 => 
            array (
                'permission_id' => 203,
                'role_id' => 7,
            ),
            89 => 
            array (
                'permission_id' => 203,
                'role_id' => 9,
            ),
            90 => 
            array (
                'permission_id' => 204,
                'role_id' => 5,
            ),
            91 => 
            array (
                'permission_id' => 204,
                'role_id' => 7,
            ),
            92 => 
            array (
                'permission_id' => 204,
                'role_id' => 9,
            ),
            93 => 
            array (
                'permission_id' => 205,
                'role_id' => 5,
            ),
            94 => 
            array (
                'permission_id' => 205,
                'role_id' => 7,
            ),
            95 => 
            array (
                'permission_id' => 205,
                'role_id' => 9,
            ),
            96 => 
            array (
                'permission_id' => 206,
                'role_id' => 5,
            ),
            97 => 
            array (
                'permission_id' => 206,
                'role_id' => 7,
            ),
            98 => 
            array (
                'permission_id' => 206,
                'role_id' => 9,
            ),
            99 => 
            array (
                'permission_id' => 207,
                'role_id' => 5,
            ),
            100 => 
            array (
                'permission_id' => 207,
                'role_id' => 7,
            ),
            101 => 
            array (
                'permission_id' => 207,
                'role_id' => 9,
            ),
            102 => 
            array (
                'permission_id' => 208,
                'role_id' => 5,
            ),
            103 => 
            array (
                'permission_id' => 208,
                'role_id' => 7,
            ),
            104 => 
            array (
                'permission_id' => 208,
                'role_id' => 9,
            ),
            105 => 
            array (
                'permission_id' => 209,
                'role_id' => 5,
            ),
            106 => 
            array (
                'permission_id' => 209,
                'role_id' => 7,
            ),
            107 => 
            array (
                'permission_id' => 209,
                'role_id' => 9,
            ),
            108 => 
            array (
                'permission_id' => 210,
                'role_id' => 5,
            ),
            109 => 
            array (
                'permission_id' => 210,
                'role_id' => 7,
            ),
            110 => 
            array (
                'permission_id' => 210,
                'role_id' => 9,
            ),
            111 => 
            array (
                'permission_id' => 211,
                'role_id' => 5,
            ),
            112 => 
            array (
                'permission_id' => 211,
                'role_id' => 7,
            ),
            113 => 
            array (
                'permission_id' => 211,
                'role_id' => 9,
            ),
            114 => 
            array (
                'permission_id' => 212,
                'role_id' => 5,
            ),
            115 => 
            array (
                'permission_id' => 212,
                'role_id' => 7,
            ),
            116 => 
            array (
                'permission_id' => 212,
                'role_id' => 9,
            ),
            117 => 
            array (
                'permission_id' => 213,
                'role_id' => 5,
            ),
            118 => 
            array (
                'permission_id' => 213,
                'role_id' => 7,
            ),
            119 => 
            array (
                'permission_id' => 213,
                'role_id' => 9,
            ),
            120 => 
            array (
                'permission_id' => 214,
                'role_id' => 5,
            ),
            121 => 
            array (
                'permission_id' => 214,
                'role_id' => 7,
            ),
            122 => 
            array (
                'permission_id' => 214,
                'role_id' => 9,
            ),
            123 => 
            array (
                'permission_id' => 215,
                'role_id' => 5,
            ),
            124 => 
            array (
                'permission_id' => 215,
                'role_id' => 7,
            ),
            125 => 
            array (
                'permission_id' => 215,
                'role_id' => 9,
            ),
            126 => 
            array (
                'permission_id' => 216,
                'role_id' => 5,
            ),
            127 => 
            array (
                'permission_id' => 216,
                'role_id' => 7,
            ),
            128 => 
            array (
                'permission_id' => 216,
                'role_id' => 9,
            ),
            129 => 
            array (
                'permission_id' => 217,
                'role_id' => 5,
            ),
            130 => 
            array (
                'permission_id' => 217,
                'role_id' => 7,
            ),
            131 => 
            array (
                'permission_id' => 217,
                'role_id' => 9,
            ),
            132 => 
            array (
                'permission_id' => 218,
                'role_id' => 5,
            ),
            133 => 
            array (
                'permission_id' => 218,
                'role_id' => 7,
            ),
            134 => 
            array (
                'permission_id' => 218,
                'role_id' => 9,
            ),
            135 => 
            array (
                'permission_id' => 219,
                'role_id' => 5,
            ),
            136 => 
            array (
                'permission_id' => 219,
                'role_id' => 7,
            ),
            137 => 
            array (
                'permission_id' => 219,
                'role_id' => 9,
            ),
            138 => 
            array (
                'permission_id' => 220,
                'role_id' => 5,
            ),
            139 => 
            array (
                'permission_id' => 220,
                'role_id' => 7,
            ),
            140 => 
            array (
                'permission_id' => 220,
                'role_id' => 9,
            ),
            141 => 
            array (
                'permission_id' => 221,
                'role_id' => 5,
            ),
            142 => 
            array (
                'permission_id' => 221,
                'role_id' => 7,
            ),
            143 => 
            array (
                'permission_id' => 221,
                'role_id' => 9,
            ),
            144 => 
            array (
                'permission_id' => 222,
                'role_id' => 5,
            ),
            145 => 
            array (
                'permission_id' => 222,
                'role_id' => 7,
            ),
            146 => 
            array (
                'permission_id' => 222,
                'role_id' => 9,
            ),
            147 => 
            array (
                'permission_id' => 223,
                'role_id' => 5,
            ),
            148 => 
            array (
                'permission_id' => 223,
                'role_id' => 7,
            ),
            149 => 
            array (
                'permission_id' => 223,
                'role_id' => 9,
            ),
            150 => 
            array (
                'permission_id' => 224,
                'role_id' => 5,
            ),
            151 => 
            array (
                'permission_id' => 224,
                'role_id' => 7,
            ),
            152 => 
            array (
                'permission_id' => 224,
                'role_id' => 9,
            ),
            153 => 
            array (
                'permission_id' => 225,
                'role_id' => 5,
            ),
            154 => 
            array (
                'permission_id' => 225,
                'role_id' => 7,
            ),
            155 => 
            array (
                'permission_id' => 225,
                'role_id' => 9,
            ),
            156 => 
            array (
                'permission_id' => 226,
                'role_id' => 5,
            ),
            157 => 
            array (
                'permission_id' => 226,
                'role_id' => 7,
            ),
            158 => 
            array (
                'permission_id' => 226,
                'role_id' => 9,
            ),
            159 => 
            array (
                'permission_id' => 227,
                'role_id' => 5,
            ),
            160 => 
            array (
                'permission_id' => 227,
                'role_id' => 7,
            ),
            161 => 
            array (
                'permission_id' => 227,
                'role_id' => 9,
            ),
            162 => 
            array (
                'permission_id' => 228,
                'role_id' => 5,
            ),
            163 => 
            array (
                'permission_id' => 228,
                'role_id' => 7,
            ),
            164 => 
            array (
                'permission_id' => 228,
                'role_id' => 9,
            ),
            165 => 
            array (
                'permission_id' => 229,
                'role_id' => 5,
            ),
            166 => 
            array (
                'permission_id' => 229,
                'role_id' => 7,
            ),
            167 => 
            array (
                'permission_id' => 229,
                'role_id' => 9,
            ),
            168 => 
            array (
                'permission_id' => 230,
                'role_id' => 5,
            ),
            169 => 
            array (
                'permission_id' => 230,
                'role_id' => 7,
            ),
            170 => 
            array (
                'permission_id' => 230,
                'role_id' => 9,
            ),
            171 => 
            array (
                'permission_id' => 231,
                'role_id' => 5,
            ),
            172 => 
            array (
                'permission_id' => 231,
                'role_id' => 7,
            ),
            173 => 
            array (
                'permission_id' => 233,
                'role_id' => 5,
            ),
            174 => 
            array (
                'permission_id' => 234,
                'role_id' => 5,
            ),
            175 => 
            array (
                'permission_id' => 235,
                'role_id' => 5,
            ),
            176 => 
            array (
                'permission_id' => 236,
                'role_id' => 5,
            ),
            177 => 
            array (
                'permission_id' => 237,
                'role_id' => 5,
            ),
            178 => 
            array (
                'permission_id' => 238,
                'role_id' => 5,
            ),
            179 => 
            array (
                'permission_id' => 239,
                'role_id' => 5,
            ),
            180 => 
            array (
                'permission_id' => 241,
                'role_id' => 5,
            ),
            181 => 
            array (
                'permission_id' => 242,
                'role_id' => 5,
            ),
            182 => 
            array (
                'permission_id' => 244,
                'role_id' => 5,
            ),
            183 => 
            array (
                'permission_id' => 245,
                'role_id' => 5,
            ),
            184 => 
            array (
                'permission_id' => 246,
                'role_id' => 5,
            ),
            185 => 
            array (
                'permission_id' => 249,
                'role_id' => 5,
            ),
            186 => 
            array (
                'permission_id' => 249,
                'role_id' => 7,
            ),
            187 => 
            array (
                'permission_id' => 249,
                'role_id' => 8,
            ),
            188 => 
            array (
                'permission_id' => 249,
                'role_id' => 9,
            ),
            189 => 
            array (
                'permission_id' => 250,
                'role_id' => 7,
            ),
            190 => 
            array (
                'permission_id' => 250,
                'role_id' => 8,
            ),
            191 => 
            array (
                'permission_id' => 250,
                'role_id' => 9,
            ),
            192 => 
            array (
                'permission_id' => 251,
                'role_id' => 5,
            ),
            193 => 
            array (
                'permission_id' => 251,
                'role_id' => 9,
            ),
            194 => 
            array (
                'permission_id' => 252,
                'role_id' => 5,
            ),
            195 => 
            array (
                'permission_id' => 252,
                'role_id' => 7,
            ),
            196 => 
            array (
                'permission_id' => 252,
                'role_id' => 9,
            ),
            197 => 
            array (
                'permission_id' => 253,
                'role_id' => 5,
            ),
            198 => 
            array (
                'permission_id' => 253,
                'role_id' => 9,
            ),
            199 => 
            array (
                'permission_id' => 254,
                'role_id' => 7,
            ),
            200 => 
            array (
                'permission_id' => 254,
                'role_id' => 9,
            ),
            201 => 
            array (
                'permission_id' => 255,
                'role_id' => 5,
            ),
            202 => 
            array (
                'permission_id' => 255,
                'role_id' => 7,
            ),
            203 => 
            array (
                'permission_id' => 255,
                'role_id' => 9,
            ),
            204 => 
            array (
                'permission_id' => 256,
                'role_id' => 5,
            ),
            205 => 
            array (
                'permission_id' => 256,
                'role_id' => 7,
            ),
            206 => 
            array (
                'permission_id' => 256,
                'role_id' => 9,
            ),
            207 => 
            array (
                'permission_id' => 257,
                'role_id' => 5,
            ),
            208 => 
            array (
                'permission_id' => 257,
                'role_id' => 7,
            ),
            209 => 
            array (
                'permission_id' => 257,
                'role_id' => 9,
            ),
            210 => 
            array (
                'permission_id' => 258,
                'role_id' => 5,
            ),
            211 => 
            array (
                'permission_id' => 258,
                'role_id' => 7,
            ),
            212 => 
            array (
                'permission_id' => 258,
                'role_id' => 9,
            ),
            213 => 
            array (
                'permission_id' => 259,
                'role_id' => 5,
            ),
            214 => 
            array (
                'permission_id' => 260,
                'role_id' => 5,
            ),
            215 => 
            array (
                'permission_id' => 261,
                'role_id' => 5,
            ),
            216 => 
            array (
                'permission_id' => 262,
                'role_id' => 5,
            ),
            217 => 
            array (
                'permission_id' => 263,
                'role_id' => 5,
            ),
            218 => 
            array (
                'permission_id' => 264,
                'role_id' => 5,
            ),
            219 => 
            array (
                'permission_id' => 265,
                'role_id' => 5,
            ),
            220 => 
            array (
                'permission_id' => 266,
                'role_id' => 5,
            ),
            221 => 
            array (
                'permission_id' => 267,
                'role_id' => 5,
            ),
            222 => 
            array (
                'permission_id' => 268,
                'role_id' => 1,
            ),
            223 => 
            array (
                'permission_id' => 268,
                'role_id' => 2,
            ),
            224 => 
            array (
                'permission_id' => 268,
                'role_id' => 4,
            ),
            225 => 
            array (
                'permission_id' => 268,
                'role_id' => 5,
            ),
            226 => 
            array (
                'permission_id' => 268,
                'role_id' => 6,
            ),
            227 => 
            array (
                'permission_id' => 268,
                'role_id' => 7,
            ),
            228 => 
            array (
                'permission_id' => 268,
                'role_id' => 8,
            ),
            229 => 
            array (
                'permission_id' => 268,
                'role_id' => 9,
            ),
            230 => 
            array (
                'permission_id' => 268,
                'role_id' => 10,
            ),
            231 => 
            array (
                'permission_id' => 269,
                'role_id' => 1,
            ),
            232 => 
            array (
                'permission_id' => 269,
                'role_id' => 2,
            ),
            233 => 
            array (
                'permission_id' => 269,
                'role_id' => 4,
            ),
            234 => 
            array (
                'permission_id' => 269,
                'role_id' => 5,
            ),
            235 => 
            array (
                'permission_id' => 269,
                'role_id' => 6,
            ),
            236 => 
            array (
                'permission_id' => 269,
                'role_id' => 7,
            ),
            237 => 
            array (
                'permission_id' => 269,
                'role_id' => 8,
            ),
            238 => 
            array (
                'permission_id' => 269,
                'role_id' => 9,
            ),
            239 => 
            array (
                'permission_id' => 269,
                'role_id' => 10,
            ),
            240 => 
            array (
                'permission_id' => 270,
                'role_id' => 1,
            ),
            241 => 
            array (
                'permission_id' => 270,
                'role_id' => 2,
            ),
            242 => 
            array (
                'permission_id' => 270,
                'role_id' => 4,
            ),
            243 => 
            array (
                'permission_id' => 270,
                'role_id' => 5,
            ),
            244 => 
            array (
                'permission_id' => 270,
                'role_id' => 6,
            ),
            245 => 
            array (
                'permission_id' => 270,
                'role_id' => 7,
            ),
            246 => 
            array (
                'permission_id' => 270,
                'role_id' => 8,
            ),
            247 => 
            array (
                'permission_id' => 270,
                'role_id' => 9,
            ),
            248 => 
            array (
                'permission_id' => 270,
                'role_id' => 10,
            ),
            249 => 
            array (
                'permission_id' => 271,
                'role_id' => 1,
            ),
            250 => 
            array (
                'permission_id' => 271,
                'role_id' => 2,
            ),
            251 => 
            array (
                'permission_id' => 271,
                'role_id' => 4,
            ),
            252 => 
            array (
                'permission_id' => 271,
                'role_id' => 5,
            ),
            253 => 
            array (
                'permission_id' => 271,
                'role_id' => 6,
            ),
            254 => 
            array (
                'permission_id' => 271,
                'role_id' => 7,
            ),
            255 => 
            array (
                'permission_id' => 271,
                'role_id' => 8,
            ),
            256 => 
            array (
                'permission_id' => 271,
                'role_id' => 9,
            ),
            257 => 
            array (
                'permission_id' => 271,
                'role_id' => 10,
            ),
            258 => 
            array (
                'permission_id' => 272,
                'role_id' => 1,
            ),
            259 => 
            array (
                'permission_id' => 272,
                'role_id' => 2,
            ),
            260 => 
            array (
                'permission_id' => 272,
                'role_id' => 4,
            ),
            261 => 
            array (
                'permission_id' => 272,
                'role_id' => 5,
            ),
            262 => 
            array (
                'permission_id' => 272,
                'role_id' => 6,
            ),
            263 => 
            array (
                'permission_id' => 272,
                'role_id' => 7,
            ),
            264 => 
            array (
                'permission_id' => 272,
                'role_id' => 8,
            ),
            265 => 
            array (
                'permission_id' => 272,
                'role_id' => 9,
            ),
            266 => 
            array (
                'permission_id' => 272,
                'role_id' => 10,
            ),
            267 => 
            array (
                'permission_id' => 273,
                'role_id' => 1,
            ),
            268 => 
            array (
                'permission_id' => 273,
                'role_id' => 2,
            ),
            269 => 
            array (
                'permission_id' => 273,
                'role_id' => 4,
            ),
            270 => 
            array (
                'permission_id' => 273,
                'role_id' => 5,
            ),
            271 => 
            array (
                'permission_id' => 273,
                'role_id' => 6,
            ),
            272 => 
            array (
                'permission_id' => 273,
                'role_id' => 7,
            ),
            273 => 
            array (
                'permission_id' => 273,
                'role_id' => 8,
            ),
            274 => 
            array (
                'permission_id' => 273,
                'role_id' => 9,
            ),
            275 => 
            array (
                'permission_id' => 273,
                'role_id' => 10,
            ),
            276 => 
            array (
                'permission_id' => 274,
                'role_id' => 1,
            ),
            277 => 
            array (
                'permission_id' => 274,
                'role_id' => 2,
            ),
            278 => 
            array (
                'permission_id' => 274,
                'role_id' => 4,
            ),
            279 => 
            array (
                'permission_id' => 274,
                'role_id' => 5,
            ),
            280 => 
            array (
                'permission_id' => 274,
                'role_id' => 6,
            ),
            281 => 
            array (
                'permission_id' => 274,
                'role_id' => 7,
            ),
            282 => 
            array (
                'permission_id' => 274,
                'role_id' => 8,
            ),
            283 => 
            array (
                'permission_id' => 274,
                'role_id' => 9,
            ),
            284 => 
            array (
                'permission_id' => 274,
                'role_id' => 10,
            ),
            285 => 
            array (
                'permission_id' => 275,
                'role_id' => 1,
            ),
            286 => 
            array (
                'permission_id' => 275,
                'role_id' => 2,
            ),
            287 => 
            array (
                'permission_id' => 275,
                'role_id' => 4,
            ),
            288 => 
            array (
                'permission_id' => 275,
                'role_id' => 5,
            ),
            289 => 
            array (
                'permission_id' => 275,
                'role_id' => 6,
            ),
            290 => 
            array (
                'permission_id' => 275,
                'role_id' => 7,
            ),
            291 => 
            array (
                'permission_id' => 275,
                'role_id' => 8,
            ),
            292 => 
            array (
                'permission_id' => 275,
                'role_id' => 9,
            ),
            293 => 
            array (
                'permission_id' => 275,
                'role_id' => 10,
            ),
            294 => 
            array (
                'permission_id' => 276,
                'role_id' => 1,
            ),
            295 => 
            array (
                'permission_id' => 276,
                'role_id' => 2,
            ),
            296 => 
            array (
                'permission_id' => 276,
                'role_id' => 4,
            ),
            297 => 
            array (
                'permission_id' => 276,
                'role_id' => 5,
            ),
            298 => 
            array (
                'permission_id' => 276,
                'role_id' => 6,
            ),
            299 => 
            array (
                'permission_id' => 276,
                'role_id' => 7,
            ),
            300 => 
            array (
                'permission_id' => 276,
                'role_id' => 8,
            ),
            301 => 
            array (
                'permission_id' => 276,
                'role_id' => 9,
            ),
            302 => 
            array (
                'permission_id' => 276,
                'role_id' => 10,
            ),
            303 => 
            array (
                'permission_id' => 277,
                'role_id' => 1,
            ),
            304 => 
            array (
                'permission_id' => 277,
                'role_id' => 2,
            ),
            305 => 
            array (
                'permission_id' => 277,
                'role_id' => 4,
            ),
            306 => 
            array (
                'permission_id' => 277,
                'role_id' => 5,
            ),
            307 => 
            array (
                'permission_id' => 277,
                'role_id' => 6,
            ),
            308 => 
            array (
                'permission_id' => 277,
                'role_id' => 7,
            ),
            309 => 
            array (
                'permission_id' => 277,
                'role_id' => 8,
            ),
            310 => 
            array (
                'permission_id' => 277,
                'role_id' => 9,
            ),
            311 => 
            array (
                'permission_id' => 277,
                'role_id' => 10,
            ),
        ));
        
        
    }
}