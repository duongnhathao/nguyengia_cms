<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_tags')->delete();
        
        \DB::table('ec_product_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Electronic',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mobile',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Iphone',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Printer',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Office',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'IT',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
        ));
        
        
    }
}