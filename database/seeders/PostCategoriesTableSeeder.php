<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_categories')->delete();
        
        \DB::table('post_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 2,
                'post_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 4,
                'post_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'post_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 4,
                'post_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'post_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 4,
                'post_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'post_id' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 3,
                'post_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'post_id' => 5,
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 4,
                'post_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 2,
                'post_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 3,
                'post_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'post_id' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 4,
                'post_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 2,
                'post_id' => 8,
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 3,
                'post_id' => 8,
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 1,
                'post_id' => 9,
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 3,
                'post_id' => 9,
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 1,
                'post_id' => 10,
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 4,
                'post_id' => 10,
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 1,
                'post_id' => 11,
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 3,
                'post_id' => 11,
            ),
        ));
        
        
    }
}