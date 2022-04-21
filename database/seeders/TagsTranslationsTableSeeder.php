<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags_translations')->delete();
        
        \DB::table('tags_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'tags_id' => 1,
                'name' => 'Chung',
                'description' => NULL,
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'tags_id' => 2,
                'name' => 'Thiết kế',
                'description' => NULL,
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'tags_id' => 3,
                'name' => 'Thời trang',
                'description' => NULL,
            ),
            3 => 
            array (
                'lang_code' => 'vi',
                'tags_id' => 4,
                'name' => 'Thương hiệu',
                'description' => NULL,
            ),
            4 => 
            array (
                'lang_code' => 'vi',
                'tags_id' => 5,
                'name' => 'Hiện đại',
                'description' => NULL,
            ),
        ));
        
        
    }
}