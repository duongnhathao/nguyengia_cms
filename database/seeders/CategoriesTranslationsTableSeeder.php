<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories_translations')->delete();
        
        \DB::table('categories_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'categories_id' => 1,
                'name' => 'Thương mại điện tử',
                'description' => NULL,
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'categories_id' => 2,
                'name' => 'Thời trang',
                'description' => NULL,
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'categories_id' => 3,
                'name' => 'Điện tử',
                'description' => NULL,
            ),
            3 => 
            array (
                'lang_code' => 'vi',
                'categories_id' => 4,
                'name' => 'Thương mại',
                'description' => NULL,
            ),
        ));
        
        
    }
}