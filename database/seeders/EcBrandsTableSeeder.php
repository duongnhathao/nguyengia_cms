<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_brands')->delete();
        
        \DB::table('ec_brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fashion live',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/1.png',
                'status' => 'published',
                'order' => 0,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hand crafted',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/2.png',
                'status' => 'published',
                'order' => 1,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mestonix',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/3.png',
                'status' => 'published',
                'order' => 2,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sunshine',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/4.png',
                'status' => 'published',
                'order' => 3,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Pure',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/5.png',
                'status' => 'published',
                'order' => 4,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Anfold',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/6.png',
                'status' => 'published',
                'order' => 5,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Automotive',
                'description' => NULL,
                'website' => NULL,
                'logo' => 'brands/7.png',
                'status' => 'published',
                'order' => 6,
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
        ));
        
        
    }
}