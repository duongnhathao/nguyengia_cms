<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductCollectionProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_collection_products')->delete();
        
        \DB::table('ec_product_collection_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_collection_id' => 2,
                'product_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'product_collection_id' => 2,
                'product_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'product_collection_id' => 2,
                'product_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'product_collection_id' => 2,
                'product_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'product_collection_id' => 1,
                'product_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'product_collection_id' => 1,
                'product_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'product_collection_id' => 2,
                'product_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'product_collection_id' => 2,
                'product_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'product_collection_id' => 3,
                'product_id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'product_collection_id' => 1,
                'product_id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'product_collection_id' => 1,
                'product_id' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'product_collection_id' => 3,
                'product_id' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'product_collection_id' => 2,
                'product_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'product_collection_id' => 2,
                'product_id' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'product_collection_id' => 3,
                'product_id' => 15,
            ),
            15 => 
            array (
                'id' => 16,
                'product_collection_id' => 1,
                'product_id' => 16,
            ),
            16 => 
            array (
                'id' => 17,
                'product_collection_id' => 1,
                'product_id' => 17,
            ),
            17 => 
            array (
                'id' => 18,
                'product_collection_id' => 3,
                'product_id' => 18,
            ),
            18 => 
            array (
                'id' => 19,
                'product_collection_id' => 2,
                'product_id' => 19,
            ),
            19 => 
            array (
                'id' => 20,
                'product_collection_id' => 2,
                'product_id' => 20,
            ),
            20 => 
            array (
                'id' => 21,
                'product_collection_id' => 2,
                'product_id' => 21,
            ),
            21 => 
            array (
                'id' => 22,
                'product_collection_id' => 3,
                'product_id' => 22,
            ),
            22 => 
            array (
                'id' => 23,
                'product_collection_id' => 3,
                'product_id' => 23,
            ),
            23 => 
            array (
                'id' => 24,
                'product_collection_id' => 3,
                'product_id' => 24,
            ),
            24 => 
            array (
                'id' => 25,
                'product_collection_id' => 1,
                'product_id' => 25,
            ),
            25 => 
            array (
                'id' => 26,
                'product_collection_id' => 2,
                'product_id' => 26,
            ),
            26 => 
            array (
                'id' => 27,
                'product_collection_id' => 2,
                'product_id' => 27,
            ),
            27 => 
            array (
                'id' => 28,
                'product_collection_id' => 1,
                'product_id' => 28,
            ),
            28 => 
            array (
                'id' => 29,
                'product_collection_id' => 1,
                'product_id' => 29,
            ),
            29 => 
            array (
                'id' => 30,
                'product_collection_id' => 1,
                'product_id' => 30,
            ),
            30 => 
            array (
                'id' => 31,
                'product_collection_id' => 3,
                'product_id' => 31,
            ),
        ));
        
        
    }
}