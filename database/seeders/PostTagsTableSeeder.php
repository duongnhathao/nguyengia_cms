<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_tags')->delete();
        
        \DB::table('post_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag_id' => 1,
                'post_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'tag_id' => 2,
                'post_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'tag_id' => 3,
                'post_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'tag_id' => 4,
                'post_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'tag_id' => 5,
                'post_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'tag_id' => 1,
                'post_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'tag_id' => 2,
                'post_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'tag_id' => 3,
                'post_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'tag_id' => 4,
                'post_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'tag_id' => 5,
                'post_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'tag_id' => 1,
                'post_id' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'tag_id' => 2,
                'post_id' => 3,
            ),
            12 => 
            array (
                'id' => 13,
                'tag_id' => 3,
                'post_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'tag_id' => 4,
                'post_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'tag_id' => 5,
                'post_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'tag_id' => 1,
                'post_id' => 4,
            ),
            16 => 
            array (
                'id' => 17,
                'tag_id' => 2,
                'post_id' => 4,
            ),
            17 => 
            array (
                'id' => 18,
                'tag_id' => 3,
                'post_id' => 4,
            ),
            18 => 
            array (
                'id' => 19,
                'tag_id' => 4,
                'post_id' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'tag_id' => 5,
                'post_id' => 4,
            ),
            20 => 
            array (
                'id' => 21,
                'tag_id' => 1,
                'post_id' => 5,
            ),
            21 => 
            array (
                'id' => 22,
                'tag_id' => 2,
                'post_id' => 5,
            ),
            22 => 
            array (
                'id' => 23,
                'tag_id' => 3,
                'post_id' => 5,
            ),
            23 => 
            array (
                'id' => 24,
                'tag_id' => 4,
                'post_id' => 5,
            ),
            24 => 
            array (
                'id' => 25,
                'tag_id' => 5,
                'post_id' => 5,
            ),
            25 => 
            array (
                'id' => 26,
                'tag_id' => 1,
                'post_id' => 6,
            ),
            26 => 
            array (
                'id' => 27,
                'tag_id' => 2,
                'post_id' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'tag_id' => 3,
                'post_id' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'tag_id' => 4,
                'post_id' => 6,
            ),
            29 => 
            array (
                'id' => 30,
                'tag_id' => 5,
                'post_id' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'tag_id' => 1,
                'post_id' => 7,
            ),
            31 => 
            array (
                'id' => 32,
                'tag_id' => 2,
                'post_id' => 7,
            ),
            32 => 
            array (
                'id' => 33,
                'tag_id' => 3,
                'post_id' => 7,
            ),
            33 => 
            array (
                'id' => 34,
                'tag_id' => 4,
                'post_id' => 7,
            ),
            34 => 
            array (
                'id' => 35,
                'tag_id' => 5,
                'post_id' => 7,
            ),
            35 => 
            array (
                'id' => 36,
                'tag_id' => 1,
                'post_id' => 8,
            ),
            36 => 
            array (
                'id' => 37,
                'tag_id' => 2,
                'post_id' => 8,
            ),
            37 => 
            array (
                'id' => 38,
                'tag_id' => 3,
                'post_id' => 8,
            ),
            38 => 
            array (
                'id' => 39,
                'tag_id' => 4,
                'post_id' => 8,
            ),
            39 => 
            array (
                'id' => 40,
                'tag_id' => 5,
                'post_id' => 8,
            ),
            40 => 
            array (
                'id' => 41,
                'tag_id' => 1,
                'post_id' => 9,
            ),
            41 => 
            array (
                'id' => 42,
                'tag_id' => 2,
                'post_id' => 9,
            ),
            42 => 
            array (
                'id' => 43,
                'tag_id' => 3,
                'post_id' => 9,
            ),
            43 => 
            array (
                'id' => 44,
                'tag_id' => 4,
                'post_id' => 9,
            ),
            44 => 
            array (
                'id' => 45,
                'tag_id' => 5,
                'post_id' => 9,
            ),
            45 => 
            array (
                'id' => 46,
                'tag_id' => 1,
                'post_id' => 10,
            ),
            46 => 
            array (
                'id' => 47,
                'tag_id' => 2,
                'post_id' => 10,
            ),
            47 => 
            array (
                'id' => 48,
                'tag_id' => 3,
                'post_id' => 10,
            ),
            48 => 
            array (
                'id' => 49,
                'tag_id' => 4,
                'post_id' => 10,
            ),
            49 => 
            array (
                'id' => 50,
                'tag_id' => 5,
                'post_id' => 10,
            ),
            50 => 
            array (
                'id' => 51,
                'tag_id' => 1,
                'post_id' => 11,
            ),
            51 => 
            array (
                'id' => 52,
                'tag_id' => 2,
                'post_id' => 11,
            ),
            52 => 
            array (
                'id' => 53,
                'tag_id' => 3,
                'post_id' => 11,
            ),
            53 => 
            array (
                'id' => 54,
                'tag_id' => 4,
                'post_id' => 11,
            ),
            54 => 
            array (
                'id' => 55,
                'tag_id' => 5,
                'post_id' => 11,
            ),
        ));
        
        
    }
}