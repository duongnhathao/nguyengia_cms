<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'General',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'description' => '',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Design',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'description' => '',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fashion',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'description' => '',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Branding',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'description' => '',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Modern',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'description' => '',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
        ));
        
        
    }
}