<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductCategoryProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_category_product')->delete();
        
        \DB::table('ec_product_category_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 4,
                'product_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 10,
                'product_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 6,
                'product_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'product_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'product_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 8,
                'product_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'product_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 3,
                'product_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 6,
                'product_id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 8,
                'product_id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 7,
                'product_id' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 11,
                'product_id' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 8,
                'product_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 10,
                'product_id' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 6,
                'product_id' => 15,
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 8,
                'product_id' => 16,
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 7,
                'product_id' => 17,
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 14,
                'product_id' => 18,
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 6,
                'product_id' => 19,
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 14,
                'product_id' => 20,
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 8,
                'product_id' => 21,
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 11,
                'product_id' => 22,
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 12,
                'product_id' => 23,
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 11,
                'product_id' => 24,
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 2,
                'product_id' => 25,
            ),
            25 => 
            array (
                'id' => 26,
                'category_id' => 2,
                'product_id' => 26,
            ),
            26 => 
            array (
                'id' => 27,
                'category_id' => 14,
                'product_id' => 27,
            ),
            27 => 
            array (
                'id' => 28,
                'category_id' => 6,
                'product_id' => 28,
            ),
            28 => 
            array (
                'id' => 29,
                'category_id' => 3,
                'product_id' => 29,
            ),
            29 => 
            array (
                'id' => 30,
                'category_id' => 13,
                'product_id' => 30,
            ),
            30 => 
            array (
                'id' => 31,
                'category_id' => 14,
                'product_id' => 31,
            ),
        ));
        
        
    }
}