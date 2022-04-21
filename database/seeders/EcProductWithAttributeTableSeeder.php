<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductWithAttributeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_with_attribute')->delete();
        
        \DB::table('ec_product_with_attribute')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attribute_id' => 5,
                'product_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'attribute_id' => 8,
                'product_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'attribute_id' => 5,
                'product_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'attribute_id' => 6,
                'product_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'attribute_id' => 1,
                'product_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'attribute_id' => 7,
                'product_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'attribute_id' => 1,
                'product_id' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'attribute_id' => 6,
                'product_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'attribute_id' => 4,
                'product_id' => 5,
            ),
            9 => 
            array (
                'id' => 10,
                'attribute_id' => 10,
                'product_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'attribute_id' => 5,
                'product_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'attribute_id' => 7,
                'product_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'attribute_id' => 2,
                'product_id' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'attribute_id' => 8,
                'product_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'attribute_id' => 1,
                'product_id' => 8,
            ),
            15 => 
            array (
                'id' => 16,
                'attribute_id' => 6,
                'product_id' => 8,
            ),
            16 => 
            array (
                'id' => 17,
                'attribute_id' => 3,
                'product_id' => 9,
            ),
            17 => 
            array (
                'id' => 18,
                'attribute_id' => 6,
                'product_id' => 9,
            ),
            18 => 
            array (
                'id' => 19,
                'attribute_id' => 2,
                'product_id' => 10,
            ),
            19 => 
            array (
                'id' => 20,
                'attribute_id' => 9,
                'product_id' => 10,
            ),
            20 => 
            array (
                'id' => 21,
                'attribute_id' => 4,
                'product_id' => 11,
            ),
            21 => 
            array (
                'id' => 22,
                'attribute_id' => 7,
                'product_id' => 11,
            ),
            22 => 
            array (
                'id' => 23,
                'attribute_id' => 5,
                'product_id' => 12,
            ),
            23 => 
            array (
                'id' => 24,
                'attribute_id' => 10,
                'product_id' => 12,
            ),
            24 => 
            array (
                'id' => 25,
                'attribute_id' => 1,
                'product_id' => 13,
            ),
            25 => 
            array (
                'id' => 26,
                'attribute_id' => 10,
                'product_id' => 13,
            ),
            26 => 
            array (
                'id' => 27,
                'attribute_id' => 3,
                'product_id' => 14,
            ),
            27 => 
            array (
                'id' => 28,
                'attribute_id' => 6,
                'product_id' => 14,
            ),
            28 => 
            array (
                'id' => 29,
                'attribute_id' => 1,
                'product_id' => 15,
            ),
            29 => 
            array (
                'id' => 30,
                'attribute_id' => 9,
                'product_id' => 15,
            ),
            30 => 
            array (
                'id' => 31,
                'attribute_id' => 3,
                'product_id' => 16,
            ),
            31 => 
            array (
                'id' => 32,
                'attribute_id' => 7,
                'product_id' => 16,
            ),
            32 => 
            array (
                'id' => 33,
                'attribute_id' => 1,
                'product_id' => 17,
            ),
            33 => 
            array (
                'id' => 34,
                'attribute_id' => 7,
                'product_id' => 17,
            ),
            34 => 
            array (
                'id' => 35,
                'attribute_id' => 5,
                'product_id' => 18,
            ),
            35 => 
            array (
                'id' => 36,
                'attribute_id' => 6,
                'product_id' => 18,
            ),
            36 => 
            array (
                'id' => 37,
                'attribute_id' => 2,
                'product_id' => 19,
            ),
            37 => 
            array (
                'id' => 38,
                'attribute_id' => 7,
                'product_id' => 19,
            ),
            38 => 
            array (
                'id' => 39,
                'attribute_id' => 3,
                'product_id' => 20,
            ),
            39 => 
            array (
                'id' => 40,
                'attribute_id' => 7,
                'product_id' => 20,
            ),
            40 => 
            array (
                'id' => 41,
                'attribute_id' => 1,
                'product_id' => 21,
            ),
            41 => 
            array (
                'id' => 42,
                'attribute_id' => 6,
                'product_id' => 21,
            ),
            42 => 
            array (
                'id' => 43,
                'attribute_id' => 1,
                'product_id' => 22,
            ),
            43 => 
            array (
                'id' => 44,
                'attribute_id' => 7,
                'product_id' => 22,
            ),
            44 => 
            array (
                'id' => 45,
                'attribute_id' => 2,
                'product_id' => 23,
            ),
            45 => 
            array (
                'id' => 46,
                'attribute_id' => 6,
                'product_id' => 23,
            ),
            46 => 
            array (
                'id' => 47,
                'attribute_id' => 3,
                'product_id' => 24,
            ),
            47 => 
            array (
                'id' => 48,
                'attribute_id' => 10,
                'product_id' => 24,
            ),
            48 => 
            array (
                'id' => 49,
                'attribute_id' => 4,
                'product_id' => 25,
            ),
            49 => 
            array (
                'id' => 50,
                'attribute_id' => 6,
                'product_id' => 25,
            ),
            50 => 
            array (
                'id' => 51,
                'attribute_id' => 2,
                'product_id' => 26,
            ),
            51 => 
            array (
                'id' => 52,
                'attribute_id' => 6,
                'product_id' => 26,
            ),
            52 => 
            array (
                'id' => 53,
                'attribute_id' => 1,
                'product_id' => 27,
            ),
            53 => 
            array (
                'id' => 54,
                'attribute_id' => 9,
                'product_id' => 27,
            ),
            54 => 
            array (
                'id' => 55,
                'attribute_id' => 2,
                'product_id' => 28,
            ),
            55 => 
            array (
                'id' => 56,
                'attribute_id' => 6,
                'product_id' => 28,
            ),
            56 => 
            array (
                'id' => 57,
                'attribute_id' => 5,
                'product_id' => 29,
            ),
            57 => 
            array (
                'id' => 58,
                'attribute_id' => 6,
                'product_id' => 29,
            ),
            58 => 
            array (
                'id' => 59,
                'attribute_id' => 2,
                'product_id' => 30,
            ),
            59 => 
            array (
                'id' => 60,
                'attribute_id' => 9,
                'product_id' => 30,
            ),
            60 => 
            array (
                'id' => 61,
                'attribute_id' => 5,
                'product_id' => 31,
            ),
            61 => 
            array (
                'id' => 62,
                'attribute_id' => 6,
                'product_id' => 31,
            ),
        ));
        
        
    }
}