<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductCollectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_collections')->delete();
        
        \DB::table('ec_product_collections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'New Arrival',
                'slug' => 'new-arrival',
                'description' => NULL,
                'image' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
                'is_featured' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Best Sellers',
                'slug' => 'best-sellers',
                'description' => NULL,
                'image' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
                'is_featured' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Special Offer',
                'slug' => 'special-offer',
                'description' => NULL,
                'image' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
                'is_featured' => 0,
            ),
        ));
        
        
    }
}