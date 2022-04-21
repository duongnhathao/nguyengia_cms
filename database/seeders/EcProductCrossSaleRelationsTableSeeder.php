<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductCrossSaleRelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_cross_sale_relations')->delete();
        
        \DB::table('ec_product_cross_sale_relations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'from_product_id' => 1,
                'to_product_id' => 26,
            ),
            1 => 
            array (
                'id' => 2,
                'from_product_id' => 1,
                'to_product_id' => 23,
            ),
            2 => 
            array (
                'id' => 3,
                'from_product_id' => 1,
                'to_product_id' => 13,
            ),
            3 => 
            array (
                'id' => 4,
                'from_product_id' => 1,
                'to_product_id' => 17,
            ),
            4 => 
            array (
                'id' => 5,
                'from_product_id' => 2,
                'to_product_id' => 27,
            ),
            5 => 
            array (
                'id' => 6,
                'from_product_id' => 2,
                'to_product_id' => 18,
            ),
            6 => 
            array (
                'id' => 7,
                'from_product_id' => 2,
                'to_product_id' => 24,
            ),
            7 => 
            array (
                'id' => 8,
                'from_product_id' => 2,
                'to_product_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'from_product_id' => 3,
                'to_product_id' => 29,
            ),
            9 => 
            array (
                'id' => 10,
                'from_product_id' => 3,
                'to_product_id' => 15,
            ),
            10 => 
            array (
                'id' => 11,
                'from_product_id' => 3,
                'to_product_id' => 13,
            ),
            11 => 
            array (
                'id' => 12,
                'from_product_id' => 3,
                'to_product_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'from_product_id' => 4,
                'to_product_id' => 23,
            ),
            13 => 
            array (
                'id' => 14,
                'from_product_id' => 4,
                'to_product_id' => 16,
            ),
            14 => 
            array (
                'id' => 15,
                'from_product_id' => 4,
                'to_product_id' => 10,
            ),
            15 => 
            array (
                'id' => 16,
                'from_product_id' => 4,
                'to_product_id' => 5,
            ),
            16 => 
            array (
                'id' => 17,
                'from_product_id' => 5,
                'to_product_id' => 8,
            ),
            17 => 
            array (
                'id' => 18,
                'from_product_id' => 5,
                'to_product_id' => 27,
            ),
            18 => 
            array (
                'id' => 19,
                'from_product_id' => 5,
                'to_product_id' => 29,
            ),
            19 => 
            array (
                'id' => 20,
                'from_product_id' => 5,
                'to_product_id' => 3,
            ),
            20 => 
            array (
                'id' => 21,
                'from_product_id' => 6,
                'to_product_id' => 12,
            ),
            21 => 
            array (
                'id' => 22,
                'from_product_id' => 6,
                'to_product_id' => 25,
            ),
            22 => 
            array (
                'id' => 23,
                'from_product_id' => 6,
                'to_product_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'from_product_id' => 6,
                'to_product_id' => 28,
            ),
            24 => 
            array (
                'id' => 25,
                'from_product_id' => 7,
                'to_product_id' => 23,
            ),
            25 => 
            array (
                'id' => 26,
                'from_product_id' => 7,
                'to_product_id' => 22,
            ),
            26 => 
            array (
                'id' => 27,
                'from_product_id' => 7,
                'to_product_id' => 20,
            ),
            27 => 
            array (
                'id' => 28,
                'from_product_id' => 8,
                'to_product_id' => 28,
            ),
            28 => 
            array (
                'id' => 29,
                'from_product_id' => 8,
                'to_product_id' => 15,
            ),
            29 => 
            array (
                'id' => 30,
                'from_product_id' => 8,
                'to_product_id' => 23,
            ),
            30 => 
            array (
                'id' => 31,
                'from_product_id' => 8,
                'to_product_id' => 9,
            ),
            31 => 
            array (
                'id' => 32,
                'from_product_id' => 9,
                'to_product_id' => 11,
            ),
            32 => 
            array (
                'id' => 33,
                'from_product_id' => 9,
                'to_product_id' => 25,
            ),
            33 => 
            array (
                'id' => 34,
                'from_product_id' => 9,
                'to_product_id' => 30,
            ),
            34 => 
            array (
                'id' => 35,
                'from_product_id' => 9,
                'to_product_id' => 27,
            ),
            35 => 
            array (
                'id' => 36,
                'from_product_id' => 10,
                'to_product_id' => 29,
            ),
            36 => 
            array (
                'id' => 37,
                'from_product_id' => 10,
                'to_product_id' => 14,
            ),
            37 => 
            array (
                'id' => 38,
                'from_product_id' => 10,
                'to_product_id' => 30,
            ),
            38 => 
            array (
                'id' => 39,
                'from_product_id' => 10,
                'to_product_id' => 11,
            ),
            39 => 
            array (
                'id' => 40,
                'from_product_id' => 11,
                'to_product_id' => 7,
            ),
            40 => 
            array (
                'id' => 41,
                'from_product_id' => 11,
                'to_product_id' => 4,
            ),
            41 => 
            array (
                'id' => 42,
                'from_product_id' => 11,
                'to_product_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'from_product_id' => 11,
                'to_product_id' => 2,
            ),
            43 => 
            array (
                'id' => 44,
                'from_product_id' => 12,
                'to_product_id' => 22,
            ),
            44 => 
            array (
                'id' => 45,
                'from_product_id' => 12,
                'to_product_id' => 27,
            ),
            45 => 
            array (
                'id' => 46,
                'from_product_id' => 12,
                'to_product_id' => 13,
            ),
            46 => 
            array (
                'id' => 47,
                'from_product_id' => 13,
                'to_product_id' => 4,
            ),
            47 => 
            array (
                'id' => 48,
                'from_product_id' => 13,
                'to_product_id' => 9,
            ),
            48 => 
            array (
                'id' => 49,
                'from_product_id' => 13,
                'to_product_id' => 6,
            ),
            49 => 
            array (
                'id' => 50,
                'from_product_id' => 13,
                'to_product_id' => 22,
            ),
            50 => 
            array (
                'id' => 51,
                'from_product_id' => 14,
                'to_product_id' => 27,
            ),
            51 => 
            array (
                'id' => 52,
                'from_product_id' => 14,
                'to_product_id' => 16,
            ),
            52 => 
            array (
                'id' => 53,
                'from_product_id' => 14,
                'to_product_id' => 23,
            ),
            53 => 
            array (
                'id' => 54,
                'from_product_id' => 15,
                'to_product_id' => 18,
            ),
            54 => 
            array (
                'id' => 55,
                'from_product_id' => 15,
                'to_product_id' => 6,
            ),
            55 => 
            array (
                'id' => 56,
                'from_product_id' => 15,
                'to_product_id' => 19,
            ),
            56 => 
            array (
                'id' => 57,
                'from_product_id' => 15,
                'to_product_id' => 20,
            ),
            57 => 
            array (
                'id' => 58,
                'from_product_id' => 16,
                'to_product_id' => 15,
            ),
            58 => 
            array (
                'id' => 59,
                'from_product_id' => 16,
                'to_product_id' => 11,
            ),
            59 => 
            array (
                'id' => 60,
                'from_product_id' => 16,
                'to_product_id' => 30,
            ),
            60 => 
            array (
                'id' => 61,
                'from_product_id' => 17,
                'to_product_id' => 2,
            ),
            61 => 
            array (
                'id' => 62,
                'from_product_id' => 17,
                'to_product_id' => 29,
            ),
            62 => 
            array (
                'id' => 63,
                'from_product_id' => 17,
                'to_product_id' => 20,
            ),
            63 => 
            array (
                'id' => 64,
                'from_product_id' => 17,
                'to_product_id' => 3,
            ),
            64 => 
            array (
                'id' => 65,
                'from_product_id' => 18,
                'to_product_id' => 15,
            ),
            65 => 
            array (
                'id' => 66,
                'from_product_id' => 18,
                'to_product_id' => 9,
            ),
            66 => 
            array (
                'id' => 67,
                'from_product_id' => 18,
                'to_product_id' => 23,
            ),
            67 => 
            array (
                'id' => 68,
                'from_product_id' => 18,
                'to_product_id' => 5,
            ),
            68 => 
            array (
                'id' => 69,
                'from_product_id' => 19,
                'to_product_id' => 26,
            ),
            69 => 
            array (
                'id' => 70,
                'from_product_id' => 19,
                'to_product_id' => 6,
            ),
            70 => 
            array (
                'id' => 71,
                'from_product_id' => 19,
                'to_product_id' => 15,
            ),
            71 => 
            array (
                'id' => 72,
                'from_product_id' => 20,
                'to_product_id' => 24,
            ),
            72 => 
            array (
                'id' => 73,
                'from_product_id' => 20,
                'to_product_id' => 17,
            ),
            73 => 
            array (
                'id' => 74,
                'from_product_id' => 20,
                'to_product_id' => 19,
            ),
            74 => 
            array (
                'id' => 75,
                'from_product_id' => 20,
                'to_product_id' => 29,
            ),
            75 => 
            array (
                'id' => 76,
                'from_product_id' => 21,
                'to_product_id' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'from_product_id' => 21,
                'to_product_id' => 15,
            ),
            77 => 
            array (
                'id' => 78,
                'from_product_id' => 21,
                'to_product_id' => 31,
            ),
            78 => 
            array (
                'id' => 79,
                'from_product_id' => 21,
                'to_product_id' => 24,
            ),
            79 => 
            array (
                'id' => 80,
                'from_product_id' => 22,
                'to_product_id' => 5,
            ),
            80 => 
            array (
                'id' => 81,
                'from_product_id' => 22,
                'to_product_id' => 27,
            ),
            81 => 
            array (
                'id' => 82,
                'from_product_id' => 22,
                'to_product_id' => 2,
            ),
            82 => 
            array (
                'id' => 83,
                'from_product_id' => 23,
                'to_product_id' => 31,
            ),
            83 => 
            array (
                'id' => 84,
                'from_product_id' => 23,
                'to_product_id' => 5,
            ),
            84 => 
            array (
                'id' => 85,
                'from_product_id' => 23,
                'to_product_id' => 4,
            ),
            85 => 
            array (
                'id' => 86,
                'from_product_id' => 23,
                'to_product_id' => 20,
            ),
            86 => 
            array (
                'id' => 87,
                'from_product_id' => 24,
                'to_product_id' => 21,
            ),
            87 => 
            array (
                'id' => 88,
                'from_product_id' => 24,
                'to_product_id' => 18,
            ),
            88 => 
            array (
                'id' => 89,
                'from_product_id' => 24,
                'to_product_id' => 5,
            ),
            89 => 
            array (
                'id' => 90,
                'from_product_id' => 24,
                'to_product_id' => 15,
            ),
            90 => 
            array (
                'id' => 91,
                'from_product_id' => 25,
                'to_product_id' => 13,
            ),
            91 => 
            array (
                'id' => 92,
                'from_product_id' => 25,
                'to_product_id' => 9,
            ),
            92 => 
            array (
                'id' => 93,
                'from_product_id' => 25,
                'to_product_id' => 4,
            ),
            93 => 
            array (
                'id' => 94,
                'from_product_id' => 25,
                'to_product_id' => 22,
            ),
            94 => 
            array (
                'id' => 95,
                'from_product_id' => 26,
                'to_product_id' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'from_product_id' => 26,
                'to_product_id' => 2,
            ),
            96 => 
            array (
                'id' => 97,
                'from_product_id' => 26,
                'to_product_id' => 9,
            ),
            97 => 
            array (
                'id' => 98,
                'from_product_id' => 26,
                'to_product_id' => 24,
            ),
            98 => 
            array (
                'id' => 99,
                'from_product_id' => 27,
                'to_product_id' => 17,
            ),
            99 => 
            array (
                'id' => 100,
                'from_product_id' => 27,
                'to_product_id' => 9,
            ),
            100 => 
            array (
                'id' => 101,
                'from_product_id' => 27,
                'to_product_id' => 13,
            ),
            101 => 
            array (
                'id' => 102,
                'from_product_id' => 27,
                'to_product_id' => 7,
            ),
            102 => 
            array (
                'id' => 103,
                'from_product_id' => 28,
                'to_product_id' => 20,
            ),
            103 => 
            array (
                'id' => 104,
                'from_product_id' => 28,
                'to_product_id' => 5,
            ),
            104 => 
            array (
                'id' => 105,
                'from_product_id' => 28,
                'to_product_id' => 11,
            ),
            105 => 
            array (
                'id' => 106,
                'from_product_id' => 28,
                'to_product_id' => 6,
            ),
            106 => 
            array (
                'id' => 107,
                'from_product_id' => 29,
                'to_product_id' => 11,
            ),
            107 => 
            array (
                'id' => 108,
                'from_product_id' => 29,
                'to_product_id' => 7,
            ),
            108 => 
            array (
                'id' => 109,
                'from_product_id' => 29,
                'to_product_id' => 22,
            ),
            109 => 
            array (
                'id' => 110,
                'from_product_id' => 29,
                'to_product_id' => 19,
            ),
            110 => 
            array (
                'id' => 111,
                'from_product_id' => 30,
                'to_product_id' => 27,
            ),
            111 => 
            array (
                'id' => 112,
                'from_product_id' => 30,
                'to_product_id' => 10,
            ),
            112 => 
            array (
                'id' => 113,
                'from_product_id' => 30,
                'to_product_id' => 22,
            ),
            113 => 
            array (
                'id' => 114,
                'from_product_id' => 30,
                'to_product_id' => 20,
            ),
            114 => 
            array (
                'id' => 115,
                'from_product_id' => 31,
                'to_product_id' => 15,
            ),
            115 => 
            array (
                'id' => 116,
                'from_product_id' => 31,
                'to_product_id' => 21,
            ),
            116 => 
            array (
                'id' => 117,
                'from_product_id' => 31,
                'to_product_id' => 17,
            ),
            117 => 
            array (
                'id' => 118,
                'from_product_id' => 31,
                'to_product_id' => 3,
            ),
        ));
        
        
    }
}