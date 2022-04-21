<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcStoreLocatorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_store_locators')->delete();
        
        \DB::table('ec_store_locators')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Shopwise',
                'email' => 'sales@botble.com',
                'phone' => '123-456-7890',
                'address' => '123 Street, Old Trafford',
                'country' => 'US',
                'state' => 'New York',
                'city' => 'New York',
                'is_primary' => 1,
                'is_shipping_location' => 1,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
        ));
        
        
    }
}