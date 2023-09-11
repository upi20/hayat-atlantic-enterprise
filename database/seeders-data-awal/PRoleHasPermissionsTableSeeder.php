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
                'permission_id' => 109,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 109,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 109,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 109,
                'role_id' => 5,
            ),
            4 => 
            array (
                'permission_id' => 109,
                'role_id' => 6,
            ),
            5 => 
            array (
                'permission_id' => 109,
                'role_id' => 7,
            ),
            6 => 
            array (
                'permission_id' => 109,
                'role_id' => 8,
            ),
            7 => 
            array (
                'permission_id' => 109,
                'role_id' => 10,
            ),
            8 => 
            array (
                'permission_id' => 168,
                'role_id' => 5,
            ),
            9 => 
            array (
                'permission_id' => 169,
                'role_id' => 5,
            ),
            10 => 
            array (
                'permission_id' => 170,
                'role_id' => 5,
            ),
            11 => 
            array (
                'permission_id' => 172,
                'role_id' => 5,
            ),
            12 => 
            array (
                'permission_id' => 173,
                'role_id' => 5,
            ),
            13 => 
            array (
                'permission_id' => 174,
                'role_id' => 5,
            ),
            14 => 
            array (
                'permission_id' => 175,
                'role_id' => 5,
            ),
            15 => 
            array (
                'permission_id' => 177,
                'role_id' => 5,
            ),
            16 => 
            array (
                'permission_id' => 178,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 178,
                'role_id' => 2,
            ),
            18 => 
            array (
                'permission_id' => 178,
                'role_id' => 3,
            ),
            19 => 
            array (
                'permission_id' => 178,
                'role_id' => 5,
            ),
            20 => 
            array (
                'permission_id' => 178,
                'role_id' => 6,
            ),
            21 => 
            array (
                'permission_id' => 178,
                'role_id' => 7,
            ),
            22 => 
            array (
                'permission_id' => 178,
                'role_id' => 8,
            ),
            23 => 
            array (
                'permission_id' => 178,
                'role_id' => 10,
            ),
            24 => 
            array (
                'permission_id' => 179,
                'role_id' => 5,
            ),
            25 => 
            array (
                'permission_id' => 181,
                'role_id' => 5,
            ),
            26 => 
            array (
                'permission_id' => 183,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 183,
                'role_id' => 2,
            ),
            28 => 
            array (
                'permission_id' => 183,
                'role_id' => 3,
            ),
            29 => 
            array (
                'permission_id' => 183,
                'role_id' => 5,
            ),
            30 => 
            array (
                'permission_id' => 183,
                'role_id' => 6,
            ),
            31 => 
            array (
                'permission_id' => 183,
                'role_id' => 7,
            ),
            32 => 
            array (
                'permission_id' => 183,
                'role_id' => 8,
            ),
            33 => 
            array (
                'permission_id' => 183,
                'role_id' => 10,
            ),
            34 => 
            array (
                'permission_id' => 184,
                'role_id' => 5,
            ),
            35 => 
            array (
                'permission_id' => 184,
                'role_id' => 7,
            ),
            36 => 
            array (
                'permission_id' => 184,
                'role_id' => 8,
            ),
            37 => 
            array (
                'permission_id' => 185,
                'role_id' => 5,
            ),
            38 => 
            array (
                'permission_id' => 185,
                'role_id' => 7,
            ),
            39 => 
            array (
                'permission_id' => 185,
                'role_id' => 8,
            ),
            40 => 
            array (
                'permission_id' => 186,
                'role_id' => 5,
            ),
            41 => 
            array (
                'permission_id' => 186,
                'role_id' => 7,
            ),
            42 => 
            array (
                'permission_id' => 186,
                'role_id' => 8,
            ),
            43 => 
            array (
                'permission_id' => 187,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 187,
                'role_id' => 2,
            ),
            45 => 
            array (
                'permission_id' => 187,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 187,
                'role_id' => 5,
            ),
            47 => 
            array (
                'permission_id' => 187,
                'role_id' => 6,
            ),
            48 => 
            array (
                'permission_id' => 187,
                'role_id' => 7,
            ),
            49 => 
            array (
                'permission_id' => 187,
                'role_id' => 8,
            ),
            50 => 
            array (
                'permission_id' => 187,
                'role_id' => 10,
            ),
            51 => 
            array (
                'permission_id' => 188,
                'role_id' => 5,
            ),
            52 => 
            array (
                'permission_id' => 188,
                'role_id' => 7,
            ),
            53 => 
            array (
                'permission_id' => 188,
                'role_id' => 8,
            ),
            54 => 
            array (
                'permission_id' => 189,
                'role_id' => 5,
            ),
            55 => 
            array (
                'permission_id' => 189,
                'role_id' => 7,
            ),
            56 => 
            array (
                'permission_id' => 189,
                'role_id' => 8,
            ),
            57 => 
            array (
                'permission_id' => 190,
                'role_id' => 5,
            ),
            58 => 
            array (
                'permission_id' => 190,
                'role_id' => 7,
            ),
            59 => 
            array (
                'permission_id' => 190,
                'role_id' => 8,
            ),
            60 => 
            array (
                'permission_id' => 191,
                'role_id' => 5,
            ),
            61 => 
            array (
                'permission_id' => 191,
                'role_id' => 6,
            ),
            62 => 
            array (
                'permission_id' => 192,
                'role_id' => 5,
            ),
            63 => 
            array (
                'permission_id' => 193,
                'role_id' => 5,
            ),
            64 => 
            array (
                'permission_id' => 194,
                'role_id' => 5,
            ),
            65 => 
            array (
                'permission_id' => 195,
                'role_id' => 5,
            ),
            66 => 
            array (
                'permission_id' => 195,
                'role_id' => 6,
            ),
            67 => 
            array (
                'permission_id' => 196,
                'role_id' => 5,
            ),
            68 => 
            array (
                'permission_id' => 197,
                'role_id' => 5,
            ),
            69 => 
            array (
                'permission_id' => 198,
                'role_id' => 5,
            ),
            70 => 
            array (
                'permission_id' => 199,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 199,
                'role_id' => 7,
            ),
            72 => 
            array (
                'permission_id' => 199,
                'role_id' => 8,
            ),
            73 => 
            array (
                'permission_id' => 200,
                'role_id' => 5,
            ),
            74 => 
            array (
                'permission_id' => 200,
                'role_id' => 7,
            ),
            75 => 
            array (
                'permission_id' => 201,
                'role_id' => 5,
            ),
            76 => 
            array (
                'permission_id' => 201,
                'role_id' => 7,
            ),
            77 => 
            array (
                'permission_id' => 202,
                'role_id' => 5,
            ),
            78 => 
            array (
                'permission_id' => 202,
                'role_id' => 7,
            ),
            79 => 
            array (
                'permission_id' => 203,
                'role_id' => 5,
            ),
            80 => 
            array (
                'permission_id' => 203,
                'role_id' => 7,
            ),
            81 => 
            array (
                'permission_id' => 203,
                'role_id' => 8,
            ),
            82 => 
            array (
                'permission_id' => 204,
                'role_id' => 5,
            ),
            83 => 
            array (
                'permission_id' => 204,
                'role_id' => 7,
            ),
            84 => 
            array (
                'permission_id' => 205,
                'role_id' => 5,
            ),
            85 => 
            array (
                'permission_id' => 205,
                'role_id' => 7,
            ),
            86 => 
            array (
                'permission_id' => 206,
                'role_id' => 5,
            ),
            87 => 
            array (
                'permission_id' => 206,
                'role_id' => 7,
            ),
            88 => 
            array (
                'permission_id' => 207,
                'role_id' => 5,
            ),
            89 => 
            array (
                'permission_id' => 207,
                'role_id' => 7,
            ),
            90 => 
            array (
                'permission_id' => 207,
                'role_id' => 8,
            ),
            91 => 
            array (
                'permission_id' => 208,
                'role_id' => 5,
            ),
            92 => 
            array (
                'permission_id' => 208,
                'role_id' => 7,
            ),
            93 => 
            array (
                'permission_id' => 209,
                'role_id' => 5,
            ),
            94 => 
            array (
                'permission_id' => 209,
                'role_id' => 7,
            ),
            95 => 
            array (
                'permission_id' => 210,
                'role_id' => 5,
            ),
            96 => 
            array (
                'permission_id' => 210,
                'role_id' => 7,
            ),
            97 => 
            array (
                'permission_id' => 211,
                'role_id' => 5,
            ),
            98 => 
            array (
                'permission_id' => 211,
                'role_id' => 7,
            ),
            99 => 
            array (
                'permission_id' => 211,
                'role_id' => 8,
            ),
            100 => 
            array (
                'permission_id' => 212,
                'role_id' => 5,
            ),
            101 => 
            array (
                'permission_id' => 212,
                'role_id' => 7,
            ),
            102 => 
            array (
                'permission_id' => 213,
                'role_id' => 5,
            ),
            103 => 
            array (
                'permission_id' => 213,
                'role_id' => 7,
            ),
            104 => 
            array (
                'permission_id' => 214,
                'role_id' => 5,
            ),
            105 => 
            array (
                'permission_id' => 214,
                'role_id' => 7,
            ),
            106 => 
            array (
                'permission_id' => 215,
                'role_id' => 5,
            ),
            107 => 
            array (
                'permission_id' => 215,
                'role_id' => 7,
            ),
            108 => 
            array (
                'permission_id' => 216,
                'role_id' => 5,
            ),
            109 => 
            array (
                'permission_id' => 216,
                'role_id' => 7,
            ),
            110 => 
            array (
                'permission_id' => 217,
                'role_id' => 5,
            ),
            111 => 
            array (
                'permission_id' => 217,
                'role_id' => 7,
            ),
            112 => 
            array (
                'permission_id' => 218,
                'role_id' => 5,
            ),
            113 => 
            array (
                'permission_id' => 218,
                'role_id' => 7,
            ),
            114 => 
            array (
                'permission_id' => 218,
                'role_id' => 8,
            ),
            115 => 
            array (
                'permission_id' => 219,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 219,
                'role_id' => 7,
            ),
            117 => 
            array (
                'permission_id' => 220,
                'role_id' => 5,
            ),
            118 => 
            array (
                'permission_id' => 220,
                'role_id' => 7,
            ),
            119 => 
            array (
                'permission_id' => 221,
                'role_id' => 5,
            ),
            120 => 
            array (
                'permission_id' => 221,
                'role_id' => 7,
            ),
            121 => 
            array (
                'permission_id' => 222,
                'role_id' => 5,
            ),
            122 => 
            array (
                'permission_id' => 222,
                'role_id' => 7,
            ),
            123 => 
            array (
                'permission_id' => 222,
                'role_id' => 8,
            ),
            124 => 
            array (
                'permission_id' => 223,
                'role_id' => 5,
            ),
            125 => 
            array (
                'permission_id' => 223,
                'role_id' => 7,
            ),
            126 => 
            array (
                'permission_id' => 223,
                'role_id' => 8,
            ),
            127 => 
            array (
                'permission_id' => 224,
                'role_id' => 5,
            ),
            128 => 
            array (
                'permission_id' => 224,
                'role_id' => 7,
            ),
            129 => 
            array (
                'permission_id' => 225,
                'role_id' => 5,
            ),
            130 => 
            array (
                'permission_id' => 225,
                'role_id' => 7,
            ),
            131 => 
            array (
                'permission_id' => 226,
                'role_id' => 5,
            ),
            132 => 
            array (
                'permission_id' => 226,
                'role_id' => 7,
            ),
            133 => 
            array (
                'permission_id' => 227,
                'role_id' => 5,
            ),
            134 => 
            array (
                'permission_id' => 227,
                'role_id' => 7,
            ),
            135 => 
            array (
                'permission_id' => 227,
                'role_id' => 8,
            ),
            136 => 
            array (
                'permission_id' => 228,
                'role_id' => 5,
            ),
            137 => 
            array (
                'permission_id' => 228,
                'role_id' => 7,
            ),
            138 => 
            array (
                'permission_id' => 229,
                'role_id' => 5,
            ),
            139 => 
            array (
                'permission_id' => 229,
                'role_id' => 7,
            ),
            140 => 
            array (
                'permission_id' => 230,
                'role_id' => 5,
            ),
            141 => 
            array (
                'permission_id' => 230,
                'role_id' => 7,
            ),
            142 => 
            array (
                'permission_id' => 231,
                'role_id' => 5,
            ),
            143 => 
            array (
                'permission_id' => 231,
                'role_id' => 6,
            ),
            144 => 
            array (
                'permission_id' => 231,
                'role_id' => 7,
            ),
            145 => 
            array (
                'permission_id' => 231,
                'role_id' => 8,
            ),
            146 => 
            array (
                'permission_id' => 233,
                'role_id' => 5,
            ),
            147 => 
            array (
                'permission_id' => 234,
                'role_id' => 5,
            ),
            148 => 
            array (
                'permission_id' => 235,
                'role_id' => 5,
            ),
            149 => 
            array (
                'permission_id' => 236,
                'role_id' => 5,
            ),
            150 => 
            array (
                'permission_id' => 237,
                'role_id' => 5,
            ),
            151 => 
            array (
                'permission_id' => 238,
                'role_id' => 5,
            ),
            152 => 
            array (
                'permission_id' => 239,
                'role_id' => 5,
            ),
            153 => 
            array (
                'permission_id' => 241,
                'role_id' => 5,
            ),
            154 => 
            array (
                'permission_id' => 242,
                'role_id' => 5,
            ),
            155 => 
            array (
                'permission_id' => 244,
                'role_id' => 5,
            ),
            156 => 
            array (
                'permission_id' => 245,
                'role_id' => 5,
            ),
            157 => 
            array (
                'permission_id' => 246,
                'role_id' => 5,
            ),
            158 => 
            array (
                'permission_id' => 249,
                'role_id' => 5,
            ),
            159 => 
            array (
                'permission_id' => 249,
                'role_id' => 7,
            ),
            160 => 
            array (
                'permission_id' => 249,
                'role_id' => 8,
            ),
            161 => 
            array (
                'permission_id' => 250,
                'role_id' => 7,
            ),
            162 => 
            array (
                'permission_id' => 250,
                'role_id' => 8,
            ),
            163 => 
            array (
                'permission_id' => 251,
                'role_id' => 5,
            ),
            164 => 
            array (
                'permission_id' => 252,
                'role_id' => 5,
            ),
            165 => 
            array (
                'permission_id' => 252,
                'role_id' => 7,
            ),
            166 => 
            array (
                'permission_id' => 252,
                'role_id' => 8,
            ),
            167 => 
            array (
                'permission_id' => 253,
                'role_id' => 5,
            ),
            168 => 
            array (
                'permission_id' => 254,
                'role_id' => 7,
            ),
            169 => 
            array (
                'permission_id' => 254,
                'role_id' => 8,
            ),
            170 => 
            array (
                'permission_id' => 255,
                'role_id' => 5,
            ),
            171 => 
            array (
                'permission_id' => 255,
                'role_id' => 7,
            ),
            172 => 
            array (
                'permission_id' => 255,
                'role_id' => 8,
            ),
            173 => 
            array (
                'permission_id' => 256,
                'role_id' => 5,
            ),
            174 => 
            array (
                'permission_id' => 256,
                'role_id' => 7,
            ),
            175 => 
            array (
                'permission_id' => 256,
                'role_id' => 8,
            ),
            176 => 
            array (
                'permission_id' => 257,
                'role_id' => 5,
            ),
            177 => 
            array (
                'permission_id' => 257,
                'role_id' => 7,
            ),
            178 => 
            array (
                'permission_id' => 257,
                'role_id' => 8,
            ),
            179 => 
            array (
                'permission_id' => 258,
                'role_id' => 5,
            ),
            180 => 
            array (
                'permission_id' => 258,
                'role_id' => 7,
            ),
            181 => 
            array (
                'permission_id' => 258,
                'role_id' => 8,
            ),
            182 => 
            array (
                'permission_id' => 259,
                'role_id' => 5,
            ),
            183 => 
            array (
                'permission_id' => 259,
                'role_id' => 6,
            ),
            184 => 
            array (
                'permission_id' => 260,
                'role_id' => 5,
            ),
            185 => 
            array (
                'permission_id' => 261,
                'role_id' => 5,
            ),
            186 => 
            array (
                'permission_id' => 262,
                'role_id' => 5,
            ),
            187 => 
            array (
                'permission_id' => 263,
                'role_id' => 5,
            ),
            188 => 
            array (
                'permission_id' => 264,
                'role_id' => 5,
            ),
            189 => 
            array (
                'permission_id' => 265,
                'role_id' => 5,
            ),
            190 => 
            array (
                'permission_id' => 266,
                'role_id' => 5,
            ),
            191 => 
            array (
                'permission_id' => 267,
                'role_id' => 5,
            ),
            192 => 
            array (
                'permission_id' => 268,
                'role_id' => 1,
            ),
            193 => 
            array (
                'permission_id' => 268,
                'role_id' => 2,
            ),
            194 => 
            array (
                'permission_id' => 268,
                'role_id' => 5,
            ),
            195 => 
            array (
                'permission_id' => 268,
                'role_id' => 6,
            ),
            196 => 
            array (
                'permission_id' => 268,
                'role_id' => 7,
            ),
            197 => 
            array (
                'permission_id' => 268,
                'role_id' => 8,
            ),
            198 => 
            array (
                'permission_id' => 268,
                'role_id' => 10,
            ),
            199 => 
            array (
                'permission_id' => 269,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 269,
                'role_id' => 2,
            ),
            201 => 
            array (
                'permission_id' => 269,
                'role_id' => 5,
            ),
            202 => 
            array (
                'permission_id' => 269,
                'role_id' => 6,
            ),
            203 => 
            array (
                'permission_id' => 269,
                'role_id' => 7,
            ),
            204 => 
            array (
                'permission_id' => 269,
                'role_id' => 8,
            ),
            205 => 
            array (
                'permission_id' => 269,
                'role_id' => 10,
            ),
            206 => 
            array (
                'permission_id' => 270,
                'role_id' => 1,
            ),
            207 => 
            array (
                'permission_id' => 270,
                'role_id' => 2,
            ),
            208 => 
            array (
                'permission_id' => 270,
                'role_id' => 5,
            ),
            209 => 
            array (
                'permission_id' => 270,
                'role_id' => 6,
            ),
            210 => 
            array (
                'permission_id' => 270,
                'role_id' => 7,
            ),
            211 => 
            array (
                'permission_id' => 270,
                'role_id' => 8,
            ),
            212 => 
            array (
                'permission_id' => 270,
                'role_id' => 10,
            ),
            213 => 
            array (
                'permission_id' => 271,
                'role_id' => 1,
            ),
            214 => 
            array (
                'permission_id' => 271,
                'role_id' => 2,
            ),
            215 => 
            array (
                'permission_id' => 271,
                'role_id' => 5,
            ),
            216 => 
            array (
                'permission_id' => 271,
                'role_id' => 6,
            ),
            217 => 
            array (
                'permission_id' => 271,
                'role_id' => 7,
            ),
            218 => 
            array (
                'permission_id' => 271,
                'role_id' => 8,
            ),
            219 => 
            array (
                'permission_id' => 271,
                'role_id' => 10,
            ),
            220 => 
            array (
                'permission_id' => 271,
                'role_id' => 11,
            ),
            221 => 
            array (
                'permission_id' => 272,
                'role_id' => 1,
            ),
            222 => 
            array (
                'permission_id' => 272,
                'role_id' => 2,
            ),
            223 => 
            array (
                'permission_id' => 272,
                'role_id' => 5,
            ),
            224 => 
            array (
                'permission_id' => 272,
                'role_id' => 6,
            ),
            225 => 
            array (
                'permission_id' => 272,
                'role_id' => 7,
            ),
            226 => 
            array (
                'permission_id' => 272,
                'role_id' => 8,
            ),
            227 => 
            array (
                'permission_id' => 272,
                'role_id' => 10,
            ),
            228 => 
            array (
                'permission_id' => 273,
                'role_id' => 1,
            ),
            229 => 
            array (
                'permission_id' => 273,
                'role_id' => 2,
            ),
            230 => 
            array (
                'permission_id' => 273,
                'role_id' => 5,
            ),
            231 => 
            array (
                'permission_id' => 273,
                'role_id' => 6,
            ),
            232 => 
            array (
                'permission_id' => 273,
                'role_id' => 7,
            ),
            233 => 
            array (
                'permission_id' => 273,
                'role_id' => 8,
            ),
            234 => 
            array (
                'permission_id' => 273,
                'role_id' => 10,
            ),
            235 => 
            array (
                'permission_id' => 273,
                'role_id' => 11,
            ),
            236 => 
            array (
                'permission_id' => 274,
                'role_id' => 1,
            ),
            237 => 
            array (
                'permission_id' => 274,
                'role_id' => 2,
            ),
            238 => 
            array (
                'permission_id' => 274,
                'role_id' => 5,
            ),
            239 => 
            array (
                'permission_id' => 274,
                'role_id' => 6,
            ),
            240 => 
            array (
                'permission_id' => 274,
                'role_id' => 7,
            ),
            241 => 
            array (
                'permission_id' => 274,
                'role_id' => 8,
            ),
            242 => 
            array (
                'permission_id' => 274,
                'role_id' => 10,
            ),
            243 => 
            array (
                'permission_id' => 275,
                'role_id' => 1,
            ),
            244 => 
            array (
                'permission_id' => 275,
                'role_id' => 2,
            ),
            245 => 
            array (
                'permission_id' => 275,
                'role_id' => 5,
            ),
            246 => 
            array (
                'permission_id' => 275,
                'role_id' => 6,
            ),
            247 => 
            array (
                'permission_id' => 275,
                'role_id' => 7,
            ),
            248 => 
            array (
                'permission_id' => 275,
                'role_id' => 8,
            ),
            249 => 
            array (
                'permission_id' => 275,
                'role_id' => 10,
            ),
            250 => 
            array (
                'permission_id' => 276,
                'role_id' => 1,
            ),
            251 => 
            array (
                'permission_id' => 276,
                'role_id' => 2,
            ),
            252 => 
            array (
                'permission_id' => 276,
                'role_id' => 5,
            ),
            253 => 
            array (
                'permission_id' => 276,
                'role_id' => 6,
            ),
            254 => 
            array (
                'permission_id' => 276,
                'role_id' => 7,
            ),
            255 => 
            array (
                'permission_id' => 276,
                'role_id' => 8,
            ),
            256 => 
            array (
                'permission_id' => 276,
                'role_id' => 10,
            ),
            257 => 
            array (
                'permission_id' => 277,
                'role_id' => 1,
            ),
            258 => 
            array (
                'permission_id' => 277,
                'role_id' => 2,
            ),
            259 => 
            array (
                'permission_id' => 277,
                'role_id' => 5,
            ),
            260 => 
            array (
                'permission_id' => 277,
                'role_id' => 6,
            ),
            261 => 
            array (
                'permission_id' => 277,
                'role_id' => 7,
            ),
            262 => 
            array (
                'permission_id' => 277,
                'role_id' => 8,
            ),
            263 => 
            array (
                'permission_id' => 277,
                'role_id' => 10,
            ),
            264 => 
            array (
                'permission_id' => 278,
                'role_id' => 5,
            ),
            265 => 
            array (
                'permission_id' => 279,
                'role_id' => 5,
            ),
            266 => 
            array (
                'permission_id' => 280,
                'role_id' => 5,
            ),
            267 => 
            array (
                'permission_id' => 281,
                'role_id' => 5,
            ),
            268 => 
            array (
                'permission_id' => 281,
                'role_id' => 7,
            ),
            269 => 
            array (
                'permission_id' => 281,
                'role_id' => 8,
            ),
            270 => 
            array (
                'permission_id' => 282,
                'role_id' => 5,
            ),
            271 => 
            array (
                'permission_id' => 282,
                'role_id' => 7,
            ),
            272 => 
            array (
                'permission_id' => 282,
                'role_id' => 8,
            ),
            273 => 
            array (
                'permission_id' => 283,
                'role_id' => 5,
            ),
            274 => 
            array (
                'permission_id' => 284,
                'role_id' => 5,
            ),
            275 => 
            array (
                'permission_id' => 285,
                'role_id' => 5,
            ),
            276 => 
            array (
                'permission_id' => 285,
                'role_id' => 7,
            ),
            277 => 
            array (
                'permission_id' => 285,
                'role_id' => 8,
            ),
            278 => 
            array (
                'permission_id' => 286,
                'role_id' => 5,
            ),
        ));
        
        
    }
}