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
                'permission_id' => 191,
                'role_id' => 6,
            ),
            69 => 
            array (
                'permission_id' => 192,
                'role_id' => 5,
            ),
            70 => 
            array (
                'permission_id' => 193,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 194,
                'role_id' => 5,
            ),
            72 => 
            array (
                'permission_id' => 195,
                'role_id' => 5,
            ),
            73 => 
            array (
                'permission_id' => 196,
                'role_id' => 5,
            ),
            74 => 
            array (
                'permission_id' => 197,
                'role_id' => 5,
            ),
            75 => 
            array (
                'permission_id' => 198,
                'role_id' => 5,
            ),
            76 => 
            array (
                'permission_id' => 199,
                'role_id' => 5,
            ),
            77 => 
            array (
                'permission_id' => 199,
                'role_id' => 7,
            ),
            78 => 
            array (
                'permission_id' => 199,
                'role_id' => 9,
            ),
            79 => 
            array (
                'permission_id' => 200,
                'role_id' => 5,
            ),
            80 => 
            array (
                'permission_id' => 200,
                'role_id' => 7,
            ),
            81 => 
            array (
                'permission_id' => 200,
                'role_id' => 9,
            ),
            82 => 
            array (
                'permission_id' => 201,
                'role_id' => 5,
            ),
            83 => 
            array (
                'permission_id' => 201,
                'role_id' => 7,
            ),
            84 => 
            array (
                'permission_id' => 201,
                'role_id' => 9,
            ),
            85 => 
            array (
                'permission_id' => 202,
                'role_id' => 5,
            ),
            86 => 
            array (
                'permission_id' => 202,
                'role_id' => 7,
            ),
            87 => 
            array (
                'permission_id' => 202,
                'role_id' => 9,
            ),
            88 => 
            array (
                'permission_id' => 203,
                'role_id' => 5,
            ),
            89 => 
            array (
                'permission_id' => 203,
                'role_id' => 7,
            ),
            90 => 
            array (
                'permission_id' => 203,
                'role_id' => 9,
            ),
            91 => 
            array (
                'permission_id' => 204,
                'role_id' => 5,
            ),
            92 => 
            array (
                'permission_id' => 204,
                'role_id' => 7,
            ),
            93 => 
            array (
                'permission_id' => 204,
                'role_id' => 9,
            ),
            94 => 
            array (
                'permission_id' => 205,
                'role_id' => 5,
            ),
            95 => 
            array (
                'permission_id' => 205,
                'role_id' => 7,
            ),
            96 => 
            array (
                'permission_id' => 205,
                'role_id' => 9,
            ),
            97 => 
            array (
                'permission_id' => 206,
                'role_id' => 5,
            ),
            98 => 
            array (
                'permission_id' => 206,
                'role_id' => 7,
            ),
            99 => 
            array (
                'permission_id' => 206,
                'role_id' => 9,
            ),
            100 => 
            array (
                'permission_id' => 207,
                'role_id' => 5,
            ),
            101 => 
            array (
                'permission_id' => 207,
                'role_id' => 7,
            ),
            102 => 
            array (
                'permission_id' => 207,
                'role_id' => 9,
            ),
            103 => 
            array (
                'permission_id' => 208,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 208,
                'role_id' => 7,
            ),
            105 => 
            array (
                'permission_id' => 208,
                'role_id' => 9,
            ),
            106 => 
            array (
                'permission_id' => 209,
                'role_id' => 5,
            ),
            107 => 
            array (
                'permission_id' => 209,
                'role_id' => 7,
            ),
            108 => 
            array (
                'permission_id' => 209,
                'role_id' => 9,
            ),
            109 => 
            array (
                'permission_id' => 210,
                'role_id' => 5,
            ),
            110 => 
            array (
                'permission_id' => 210,
                'role_id' => 7,
            ),
            111 => 
            array (
                'permission_id' => 210,
                'role_id' => 9,
            ),
            112 => 
            array (
                'permission_id' => 211,
                'role_id' => 5,
            ),
            113 => 
            array (
                'permission_id' => 211,
                'role_id' => 7,
            ),
            114 => 
            array (
                'permission_id' => 211,
                'role_id' => 9,
            ),
            115 => 
            array (
                'permission_id' => 212,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 212,
                'role_id' => 7,
            ),
            117 => 
            array (
                'permission_id' => 212,
                'role_id' => 9,
            ),
            118 => 
            array (
                'permission_id' => 213,
                'role_id' => 5,
            ),
            119 => 
            array (
                'permission_id' => 213,
                'role_id' => 7,
            ),
            120 => 
            array (
                'permission_id' => 213,
                'role_id' => 9,
            ),
            121 => 
            array (
                'permission_id' => 214,
                'role_id' => 5,
            ),
            122 => 
            array (
                'permission_id' => 214,
                'role_id' => 7,
            ),
            123 => 
            array (
                'permission_id' => 214,
                'role_id' => 9,
            ),
            124 => 
            array (
                'permission_id' => 215,
                'role_id' => 5,
            ),
            125 => 
            array (
                'permission_id' => 215,
                'role_id' => 7,
            ),
            126 => 
            array (
                'permission_id' => 215,
                'role_id' => 9,
            ),
            127 => 
            array (
                'permission_id' => 216,
                'role_id' => 5,
            ),
            128 => 
            array (
                'permission_id' => 216,
                'role_id' => 7,
            ),
            129 => 
            array (
                'permission_id' => 216,
                'role_id' => 9,
            ),
            130 => 
            array (
                'permission_id' => 217,
                'role_id' => 5,
            ),
            131 => 
            array (
                'permission_id' => 217,
                'role_id' => 7,
            ),
            132 => 
            array (
                'permission_id' => 217,
                'role_id' => 9,
            ),
            133 => 
            array (
                'permission_id' => 218,
                'role_id' => 5,
            ),
            134 => 
            array (
                'permission_id' => 218,
                'role_id' => 7,
            ),
            135 => 
            array (
                'permission_id' => 218,
                'role_id' => 9,
            ),
            136 => 
            array (
                'permission_id' => 219,
                'role_id' => 5,
            ),
            137 => 
            array (
                'permission_id' => 219,
                'role_id' => 7,
            ),
            138 => 
            array (
                'permission_id' => 219,
                'role_id' => 9,
            ),
            139 => 
            array (
                'permission_id' => 220,
                'role_id' => 5,
            ),
            140 => 
            array (
                'permission_id' => 220,
                'role_id' => 7,
            ),
            141 => 
            array (
                'permission_id' => 220,
                'role_id' => 9,
            ),
            142 => 
            array (
                'permission_id' => 221,
                'role_id' => 5,
            ),
            143 => 
            array (
                'permission_id' => 221,
                'role_id' => 7,
            ),
            144 => 
            array (
                'permission_id' => 221,
                'role_id' => 9,
            ),
            145 => 
            array (
                'permission_id' => 222,
                'role_id' => 5,
            ),
            146 => 
            array (
                'permission_id' => 222,
                'role_id' => 7,
            ),
            147 => 
            array (
                'permission_id' => 222,
                'role_id' => 9,
            ),
            148 => 
            array (
                'permission_id' => 223,
                'role_id' => 5,
            ),
            149 => 
            array (
                'permission_id' => 223,
                'role_id' => 7,
            ),
            150 => 
            array (
                'permission_id' => 223,
                'role_id' => 9,
            ),
            151 => 
            array (
                'permission_id' => 224,
                'role_id' => 5,
            ),
            152 => 
            array (
                'permission_id' => 224,
                'role_id' => 7,
            ),
            153 => 
            array (
                'permission_id' => 224,
                'role_id' => 9,
            ),
            154 => 
            array (
                'permission_id' => 225,
                'role_id' => 5,
            ),
            155 => 
            array (
                'permission_id' => 225,
                'role_id' => 7,
            ),
            156 => 
            array (
                'permission_id' => 225,
                'role_id' => 9,
            ),
            157 => 
            array (
                'permission_id' => 226,
                'role_id' => 5,
            ),
            158 => 
            array (
                'permission_id' => 226,
                'role_id' => 7,
            ),
            159 => 
            array (
                'permission_id' => 226,
                'role_id' => 9,
            ),
            160 => 
            array (
                'permission_id' => 227,
                'role_id' => 5,
            ),
            161 => 
            array (
                'permission_id' => 227,
                'role_id' => 7,
            ),
            162 => 
            array (
                'permission_id' => 227,
                'role_id' => 9,
            ),
            163 => 
            array (
                'permission_id' => 228,
                'role_id' => 5,
            ),
            164 => 
            array (
                'permission_id' => 228,
                'role_id' => 7,
            ),
            165 => 
            array (
                'permission_id' => 228,
                'role_id' => 9,
            ),
            166 => 
            array (
                'permission_id' => 229,
                'role_id' => 5,
            ),
            167 => 
            array (
                'permission_id' => 229,
                'role_id' => 7,
            ),
            168 => 
            array (
                'permission_id' => 229,
                'role_id' => 9,
            ),
            169 => 
            array (
                'permission_id' => 230,
                'role_id' => 5,
            ),
            170 => 
            array (
                'permission_id' => 230,
                'role_id' => 7,
            ),
            171 => 
            array (
                'permission_id' => 230,
                'role_id' => 9,
            ),
            172 => 
            array (
                'permission_id' => 231,
                'role_id' => 5,
            ),
            173 => 
            array (
                'permission_id' => 231,
                'role_id' => 6,
            ),
            174 => 
            array (
                'permission_id' => 231,
                'role_id' => 7,
            ),
            175 => 
            array (
                'permission_id' => 233,
                'role_id' => 5,
            ),
            176 => 
            array (
                'permission_id' => 234,
                'role_id' => 5,
            ),
            177 => 
            array (
                'permission_id' => 235,
                'role_id' => 5,
            ),
            178 => 
            array (
                'permission_id' => 236,
                'role_id' => 5,
            ),
            179 => 
            array (
                'permission_id' => 237,
                'role_id' => 5,
            ),
            180 => 
            array (
                'permission_id' => 238,
                'role_id' => 5,
            ),
            181 => 
            array (
                'permission_id' => 239,
                'role_id' => 5,
            ),
            182 => 
            array (
                'permission_id' => 241,
                'role_id' => 5,
            ),
            183 => 
            array (
                'permission_id' => 242,
                'role_id' => 5,
            ),
            184 => 
            array (
                'permission_id' => 244,
                'role_id' => 5,
            ),
            185 => 
            array (
                'permission_id' => 245,
                'role_id' => 5,
            ),
            186 => 
            array (
                'permission_id' => 246,
                'role_id' => 5,
            ),
            187 => 
            array (
                'permission_id' => 249,
                'role_id' => 5,
            ),
            188 => 
            array (
                'permission_id' => 249,
                'role_id' => 7,
            ),
            189 => 
            array (
                'permission_id' => 249,
                'role_id' => 8,
            ),
            190 => 
            array (
                'permission_id' => 249,
                'role_id' => 9,
            ),
            191 => 
            array (
                'permission_id' => 250,
                'role_id' => 7,
            ),
            192 => 
            array (
                'permission_id' => 250,
                'role_id' => 8,
            ),
            193 => 
            array (
                'permission_id' => 250,
                'role_id' => 9,
            ),
            194 => 
            array (
                'permission_id' => 251,
                'role_id' => 5,
            ),
            195 => 
            array (
                'permission_id' => 251,
                'role_id' => 9,
            ),
            196 => 
            array (
                'permission_id' => 252,
                'role_id' => 5,
            ),
            197 => 
            array (
                'permission_id' => 252,
                'role_id' => 7,
            ),
            198 => 
            array (
                'permission_id' => 252,
                'role_id' => 9,
            ),
            199 => 
            array (
                'permission_id' => 253,
                'role_id' => 5,
            ),
            200 => 
            array (
                'permission_id' => 253,
                'role_id' => 9,
            ),
            201 => 
            array (
                'permission_id' => 254,
                'role_id' => 7,
            ),
            202 => 
            array (
                'permission_id' => 254,
                'role_id' => 9,
            ),
            203 => 
            array (
                'permission_id' => 255,
                'role_id' => 5,
            ),
            204 => 
            array (
                'permission_id' => 255,
                'role_id' => 7,
            ),
            205 => 
            array (
                'permission_id' => 255,
                'role_id' => 9,
            ),
            206 => 
            array (
                'permission_id' => 256,
                'role_id' => 5,
            ),
            207 => 
            array (
                'permission_id' => 256,
                'role_id' => 7,
            ),
            208 => 
            array (
                'permission_id' => 256,
                'role_id' => 9,
            ),
            209 => 
            array (
                'permission_id' => 257,
                'role_id' => 5,
            ),
            210 => 
            array (
                'permission_id' => 257,
                'role_id' => 7,
            ),
            211 => 
            array (
                'permission_id' => 257,
                'role_id' => 9,
            ),
            212 => 
            array (
                'permission_id' => 258,
                'role_id' => 5,
            ),
            213 => 
            array (
                'permission_id' => 258,
                'role_id' => 7,
            ),
            214 => 
            array (
                'permission_id' => 258,
                'role_id' => 9,
            ),
            215 => 
            array (
                'permission_id' => 259,
                'role_id' => 5,
            ),
            216 => 
            array (
                'permission_id' => 259,
                'role_id' => 6,
            ),
            217 => 
            array (
                'permission_id' => 260,
                'role_id' => 5,
            ),
            218 => 
            array (
                'permission_id' => 261,
                'role_id' => 5,
            ),
            219 => 
            array (
                'permission_id' => 262,
                'role_id' => 5,
            ),
            220 => 
            array (
                'permission_id' => 263,
                'role_id' => 5,
            ),
            221 => 
            array (
                'permission_id' => 264,
                'role_id' => 5,
            ),
            222 => 
            array (
                'permission_id' => 265,
                'role_id' => 5,
            ),
            223 => 
            array (
                'permission_id' => 266,
                'role_id' => 5,
            ),
            224 => 
            array (
                'permission_id' => 267,
                'role_id' => 5,
            ),
            225 => 
            array (
                'permission_id' => 268,
                'role_id' => 1,
            ),
            226 => 
            array (
                'permission_id' => 268,
                'role_id' => 2,
            ),
            227 => 
            array (
                'permission_id' => 268,
                'role_id' => 4,
            ),
            228 => 
            array (
                'permission_id' => 268,
                'role_id' => 5,
            ),
            229 => 
            array (
                'permission_id' => 268,
                'role_id' => 6,
            ),
            230 => 
            array (
                'permission_id' => 268,
                'role_id' => 7,
            ),
            231 => 
            array (
                'permission_id' => 268,
                'role_id' => 8,
            ),
            232 => 
            array (
                'permission_id' => 268,
                'role_id' => 9,
            ),
            233 => 
            array (
                'permission_id' => 268,
                'role_id' => 10,
            ),
            234 => 
            array (
                'permission_id' => 269,
                'role_id' => 1,
            ),
            235 => 
            array (
                'permission_id' => 269,
                'role_id' => 2,
            ),
            236 => 
            array (
                'permission_id' => 269,
                'role_id' => 4,
            ),
            237 => 
            array (
                'permission_id' => 269,
                'role_id' => 5,
            ),
            238 => 
            array (
                'permission_id' => 269,
                'role_id' => 6,
            ),
            239 => 
            array (
                'permission_id' => 269,
                'role_id' => 7,
            ),
            240 => 
            array (
                'permission_id' => 269,
                'role_id' => 8,
            ),
            241 => 
            array (
                'permission_id' => 269,
                'role_id' => 9,
            ),
            242 => 
            array (
                'permission_id' => 269,
                'role_id' => 10,
            ),
            243 => 
            array (
                'permission_id' => 270,
                'role_id' => 1,
            ),
            244 => 
            array (
                'permission_id' => 270,
                'role_id' => 2,
            ),
            245 => 
            array (
                'permission_id' => 270,
                'role_id' => 4,
            ),
            246 => 
            array (
                'permission_id' => 270,
                'role_id' => 5,
            ),
            247 => 
            array (
                'permission_id' => 270,
                'role_id' => 6,
            ),
            248 => 
            array (
                'permission_id' => 270,
                'role_id' => 7,
            ),
            249 => 
            array (
                'permission_id' => 270,
                'role_id' => 8,
            ),
            250 => 
            array (
                'permission_id' => 270,
                'role_id' => 9,
            ),
            251 => 
            array (
                'permission_id' => 270,
                'role_id' => 10,
            ),
            252 => 
            array (
                'permission_id' => 271,
                'role_id' => 1,
            ),
            253 => 
            array (
                'permission_id' => 271,
                'role_id' => 2,
            ),
            254 => 
            array (
                'permission_id' => 271,
                'role_id' => 4,
            ),
            255 => 
            array (
                'permission_id' => 271,
                'role_id' => 5,
            ),
            256 => 
            array (
                'permission_id' => 271,
                'role_id' => 6,
            ),
            257 => 
            array (
                'permission_id' => 271,
                'role_id' => 7,
            ),
            258 => 
            array (
                'permission_id' => 271,
                'role_id' => 8,
            ),
            259 => 
            array (
                'permission_id' => 271,
                'role_id' => 9,
            ),
            260 => 
            array (
                'permission_id' => 271,
                'role_id' => 10,
            ),
            261 => 
            array (
                'permission_id' => 272,
                'role_id' => 1,
            ),
            262 => 
            array (
                'permission_id' => 272,
                'role_id' => 2,
            ),
            263 => 
            array (
                'permission_id' => 272,
                'role_id' => 4,
            ),
            264 => 
            array (
                'permission_id' => 272,
                'role_id' => 5,
            ),
            265 => 
            array (
                'permission_id' => 272,
                'role_id' => 6,
            ),
            266 => 
            array (
                'permission_id' => 272,
                'role_id' => 7,
            ),
            267 => 
            array (
                'permission_id' => 272,
                'role_id' => 8,
            ),
            268 => 
            array (
                'permission_id' => 272,
                'role_id' => 9,
            ),
            269 => 
            array (
                'permission_id' => 272,
                'role_id' => 10,
            ),
            270 => 
            array (
                'permission_id' => 273,
                'role_id' => 1,
            ),
            271 => 
            array (
                'permission_id' => 273,
                'role_id' => 2,
            ),
            272 => 
            array (
                'permission_id' => 273,
                'role_id' => 4,
            ),
            273 => 
            array (
                'permission_id' => 273,
                'role_id' => 5,
            ),
            274 => 
            array (
                'permission_id' => 273,
                'role_id' => 6,
            ),
            275 => 
            array (
                'permission_id' => 273,
                'role_id' => 7,
            ),
            276 => 
            array (
                'permission_id' => 273,
                'role_id' => 8,
            ),
            277 => 
            array (
                'permission_id' => 273,
                'role_id' => 9,
            ),
            278 => 
            array (
                'permission_id' => 273,
                'role_id' => 10,
            ),
            279 => 
            array (
                'permission_id' => 274,
                'role_id' => 1,
            ),
            280 => 
            array (
                'permission_id' => 274,
                'role_id' => 2,
            ),
            281 => 
            array (
                'permission_id' => 274,
                'role_id' => 4,
            ),
            282 => 
            array (
                'permission_id' => 274,
                'role_id' => 5,
            ),
            283 => 
            array (
                'permission_id' => 274,
                'role_id' => 6,
            ),
            284 => 
            array (
                'permission_id' => 274,
                'role_id' => 7,
            ),
            285 => 
            array (
                'permission_id' => 274,
                'role_id' => 8,
            ),
            286 => 
            array (
                'permission_id' => 274,
                'role_id' => 9,
            ),
            287 => 
            array (
                'permission_id' => 274,
                'role_id' => 10,
            ),
            288 => 
            array (
                'permission_id' => 275,
                'role_id' => 1,
            ),
            289 => 
            array (
                'permission_id' => 275,
                'role_id' => 2,
            ),
            290 => 
            array (
                'permission_id' => 275,
                'role_id' => 4,
            ),
            291 => 
            array (
                'permission_id' => 275,
                'role_id' => 5,
            ),
            292 => 
            array (
                'permission_id' => 275,
                'role_id' => 6,
            ),
            293 => 
            array (
                'permission_id' => 275,
                'role_id' => 7,
            ),
            294 => 
            array (
                'permission_id' => 275,
                'role_id' => 8,
            ),
            295 => 
            array (
                'permission_id' => 275,
                'role_id' => 9,
            ),
            296 => 
            array (
                'permission_id' => 275,
                'role_id' => 10,
            ),
            297 => 
            array (
                'permission_id' => 276,
                'role_id' => 1,
            ),
            298 => 
            array (
                'permission_id' => 276,
                'role_id' => 2,
            ),
            299 => 
            array (
                'permission_id' => 276,
                'role_id' => 4,
            ),
            300 => 
            array (
                'permission_id' => 276,
                'role_id' => 5,
            ),
            301 => 
            array (
                'permission_id' => 276,
                'role_id' => 6,
            ),
            302 => 
            array (
                'permission_id' => 276,
                'role_id' => 7,
            ),
            303 => 
            array (
                'permission_id' => 276,
                'role_id' => 8,
            ),
            304 => 
            array (
                'permission_id' => 276,
                'role_id' => 9,
            ),
            305 => 
            array (
                'permission_id' => 276,
                'role_id' => 10,
            ),
            306 => 
            array (
                'permission_id' => 277,
                'role_id' => 1,
            ),
            307 => 
            array (
                'permission_id' => 277,
                'role_id' => 2,
            ),
            308 => 
            array (
                'permission_id' => 277,
                'role_id' => 4,
            ),
            309 => 
            array (
                'permission_id' => 277,
                'role_id' => 5,
            ),
            310 => 
            array (
                'permission_id' => 277,
                'role_id' => 6,
            ),
            311 => 
            array (
                'permission_id' => 277,
                'role_id' => 7,
            ),
            312 => 
            array (
                'permission_id' => 277,
                'role_id' => 8,
            ),
            313 => 
            array (
                'permission_id' => 277,
                'role_id' => 9,
            ),
            314 => 
            array (
                'permission_id' => 277,
                'role_id' => 10,
            ),
            315 => 
            array (
                'permission_id' => 278,
                'role_id' => 5,
            ),
            316 => 
            array (
                'permission_id' => 279,
                'role_id' => 5,
            ),
            317 => 
            array (
                'permission_id' => 280,
                'role_id' => 5,
            ),
            318 => 
            array (
                'permission_id' => 281,
                'role_id' => 5,
            ),
            319 => 
            array (
                'permission_id' => 282,
                'role_id' => 5,
            ),
            320 => 
            array (
                'permission_id' => 283,
                'role_id' => 5,
            ),
            321 => 
            array (
                'permission_id' => 284,
                'role_id' => 5,
            ),
            322 => 
            array (
                'permission_id' => 285,
                'role_id' => 5,
            ),
            323 => 
            array (
                'permission_id' => 286,
                'role_id' => 5,
            ),
        ));
        
        
    }
}