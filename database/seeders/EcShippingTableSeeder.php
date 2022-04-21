<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcShippingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_shipping')->delete();
        
        \DB::table('ec_shipping')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'All',
                'country' => NULL,
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
        ));
        
        
    }
}