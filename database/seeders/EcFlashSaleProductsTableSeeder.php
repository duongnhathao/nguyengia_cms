<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcFlashSaleProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_flash_sale_products')->delete();
        
        \DB::table('ec_flash_sale_products')->insert(array (
            0 => 
            array (
                'flash_sale_id' => 1,
                'product_id' => 22,
                'price' => 57.5,
                'quantity' => 17,
                'sold' => 4,
            ),
            1 => 
            array (
                'flash_sale_id' => 2,
                'product_id' => 1,
                'price' => 247.66,
                'quantity' => 15,
                'sold' => 4,
            ),
        ));
        
        
    }
}