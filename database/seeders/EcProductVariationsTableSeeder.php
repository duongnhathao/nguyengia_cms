<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductVariationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_variations')->delete();
        
        \DB::table('ec_product_variations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 32,
                'configurable_product_id' => 1,
                'is_default' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 33,
                'configurable_product_id' => 1,
                'is_default' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 34,
                'configurable_product_id' => 2,
                'is_default' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 35,
                'configurable_product_id' => 2,
                'is_default' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 36,
                'configurable_product_id' => 2,
                'is_default' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 37,
                'configurable_product_id' => 3,
                'is_default' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 38,
                'configurable_product_id' => 3,
                'is_default' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 39,
                'configurable_product_id' => 4,
                'is_default' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 40,
                'configurable_product_id' => 4,
                'is_default' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 41,
                'configurable_product_id' => 5,
                'is_default' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 42,
                'configurable_product_id' => 6,
                'is_default' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 43,
                'configurable_product_id' => 6,
                'is_default' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 44,
                'configurable_product_id' => 6,
                'is_default' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 45,
                'configurable_product_id' => 7,
                'is_default' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 46,
                'configurable_product_id' => 7,
                'is_default' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 47,
                'configurable_product_id' => 8,
                'is_default' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 48,
                'configurable_product_id' => 8,
                'is_default' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 49,
                'configurable_product_id' => 9,
                'is_default' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 50,
                'configurable_product_id' => 10,
                'is_default' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 51,
                'configurable_product_id' => 10,
                'is_default' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 52,
                'configurable_product_id' => 10,
                'is_default' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 53,
                'configurable_product_id' => 11,
                'is_default' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 54,
                'configurable_product_id' => 11,
                'is_default' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 55,
                'configurable_product_id' => 11,
                'is_default' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 56,
                'configurable_product_id' => 12,
                'is_default' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 57,
                'configurable_product_id' => 13,
                'is_default' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 58,
                'configurable_product_id' => 13,
                'is_default' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 59,
                'configurable_product_id' => 13,
                'is_default' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 60,
                'configurable_product_id' => 14,
                'is_default' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 61,
                'configurable_product_id' => 14,
                'is_default' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 62,
                'configurable_product_id' => 14,
                'is_default' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 63,
                'configurable_product_id' => 14,
                'is_default' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 64,
                'configurable_product_id' => 15,
                'is_default' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 65,
                'configurable_product_id' => 16,
                'is_default' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 66,
                'configurable_product_id' => 16,
                'is_default' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 67,
                'configurable_product_id' => 16,
                'is_default' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 68,
                'configurable_product_id' => 17,
                'is_default' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 69,
                'configurable_product_id' => 17,
                'is_default' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 70,
                'configurable_product_id' => 17,
                'is_default' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 71,
                'configurable_product_id' => 18,
                'is_default' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 72,
                'configurable_product_id' => 18,
                'is_default' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 73,
                'configurable_product_id' => 19,
                'is_default' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 74,
                'configurable_product_id' => 19,
                'is_default' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 75,
                'configurable_product_id' => 19,
                'is_default' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 76,
                'configurable_product_id' => 19,
                'is_default' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 77,
                'configurable_product_id' => 20,
                'is_default' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 78,
                'configurable_product_id' => 20,
                'is_default' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 79,
                'configurable_product_id' => 20,
                'is_default' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 80,
                'configurable_product_id' => 21,
                'is_default' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 81,
                'configurable_product_id' => 22,
                'is_default' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 82,
                'configurable_product_id' => 22,
                'is_default' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 83,
                'configurable_product_id' => 22,
                'is_default' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 84,
                'configurable_product_id' => 22,
                'is_default' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 85,
                'configurable_product_id' => 22,
                'is_default' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 86,
                'configurable_product_id' => 23,
                'is_default' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 87,
                'configurable_product_id' => 23,
                'is_default' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 88,
                'configurable_product_id' => 24,
                'is_default' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 89,
                'configurable_product_id' => 24,
                'is_default' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 90,
                'configurable_product_id' => 24,
                'is_default' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 91,
                'configurable_product_id' => 24,
                'is_default' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 92,
                'configurable_product_id' => 25,
                'is_default' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 93,
                'configurable_product_id' => 26,
                'is_default' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 94,
                'configurable_product_id' => 26,
                'is_default' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 95,
                'configurable_product_id' => 26,
                'is_default' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 96,
                'configurable_product_id' => 26,
                'is_default' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 97,
                'configurable_product_id' => 27,
                'is_default' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 98,
                'configurable_product_id' => 27,
                'is_default' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'product_id' => 99,
                'configurable_product_id' => 27,
                'is_default' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'product_id' => 100,
                'configurable_product_id' => 27,
                'is_default' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'product_id' => 101,
                'configurable_product_id' => 28,
                'is_default' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'product_id' => 102,
                'configurable_product_id' => 28,
                'is_default' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'product_id' => 103,
                'configurable_product_id' => 28,
                'is_default' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'product_id' => 104,
                'configurable_product_id' => 28,
                'is_default' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'product_id' => 105,
                'configurable_product_id' => 28,
                'is_default' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'product_id' => 106,
                'configurable_product_id' => 29,
                'is_default' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'product_id' => 107,
                'configurable_product_id' => 30,
                'is_default' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'product_id' => 108,
                'configurable_product_id' => 30,
                'is_default' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'product_id' => 109,
                'configurable_product_id' => 31,
                'is_default' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'product_id' => 110,
                'configurable_product_id' => 31,
                'is_default' => 0,
            ),
        ));
        
        
    }
}