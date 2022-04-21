<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductLabelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_labels')->delete();
        
        \DB::table('ec_product_labels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hot',
                'color' => '#ec2434',
                'status' => 'published',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'New',
                'color' => '#00c9a7',
                'status' => 'published',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sale',
                'color' => '#fe9931',
                'status' => 'published',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
        ));
        
        
    }
}