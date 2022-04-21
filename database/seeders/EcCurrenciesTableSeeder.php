<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_currencies')->delete();
        
        \DB::table('ec_currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'USD',
                'symbol' => '$',
                'is_prefix_symbol' => 1,
                'decimals' => 2,
                'order' => 0,
                'is_default' => 1,
                'exchange_rate' => 1.0,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'EUR',
                'symbol' => '€',
                'is_prefix_symbol' => 0,
                'decimals' => 2,
                'order' => 1,
                'is_default' => 0,
                'exchange_rate' => 0.84,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'VND',
                'symbol' => '₫',
                'is_prefix_symbol' => 0,
                'decimals' => 0,
                'order' => 2,
                'is_default' => 0,
                'exchange_rate' => 23203.0,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
        ));
        
        
    }
}