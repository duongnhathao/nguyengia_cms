<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaFoldersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media_folders')->delete();
        
        \DB::table('media_folders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 0,
                'name' => 'brands',
                'slug' => 'brands',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:20:42',
                'updated_at' => '2022-01-04 04:20:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 0,
                'name' => 'product-categories',
                'slug' => 'product-categories',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 0,
                'name' => 'customers',
                'slug' => 'customers',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 0,
                'name' => 'products',
                'slug' => 'products',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 0,
                'name' => 'news',
                'slug' => 'news',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:21:15',
                'updated_at' => '2022-01-04 04:21:15',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 0,
                'name' => 'testimonials',
                'slug' => 'testimonials',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 0,
                'name' => 'sliders',
                'slug' => 'sliders',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 0,
                'name' => 'general',
                'slug' => 'general',
                'parent_id' => 0,
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}