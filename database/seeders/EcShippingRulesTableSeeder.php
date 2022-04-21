<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcShippingRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_shipping_rules')->delete();
        
        \DB::table('ec_shipping_rules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Free shipping',
                'shipping_id' => 1,
                'type' => 'base_on_price',
                'from' => '0.00',
                'to' => NULL,
                'price' => '0.00',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Local Pickup',
                'shipping_id' => 1,
                'type' => 'base_on_price',
                'from' => '0.00',
                'to' => NULL,
                'price' => '20.00',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Flat Rate',
                'shipping_id' => 1,
                'type' => 'base_on_price',
                'from' => '0.00',
                'to' => NULL,
                'price' => '25.00',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
        ));
        
        
    }
}