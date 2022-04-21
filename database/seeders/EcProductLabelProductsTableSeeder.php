<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductLabelProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_label_products')->delete();
        
        \DB::table('ec_product_label_products')->insert(array (
            0 => 
            array (
                'product_label_id' => 1,
                'product_id' => 3,
            ),
            1 => 
            array (
                'product_label_id' => 1,
                'product_id' => 15,
            ),
            2 => 
            array (
                'product_label_id' => 1,
                'product_id' => 18,
            ),
            3 => 
            array (
                'product_label_id' => 1,
                'product_id' => 21,
            ),
            4 => 
            array (
                'product_label_id' => 2,
                'product_id' => 9,
            ),
            5 => 
            array (
                'product_label_id' => 2,
                'product_id' => 27,
            ),
            6 => 
            array (
                'product_label_id' => 2,
                'product_id' => 30,
            ),
            7 => 
            array (
                'product_label_id' => 3,
                'product_id' => 6,
            ),
            8 => 
            array (
                'product_label_id' => 3,
                'product_id' => 12,
            ),
            9 => 
            array (
                'product_label_id' => 3,
                'product_id' => 24,
            ),
        ));
        
        
    }
}