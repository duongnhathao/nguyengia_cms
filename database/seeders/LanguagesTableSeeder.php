<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'lang_id' => 1,
                'lang_name' => 'English',
                'lang_locale' => 'en',
                'lang_code' => 'en_US',
                'lang_flag' => 'us',
                'lang_is_default' => 1,
                'lang_order' => 0,
                'lang_is_rtl' => 0,
            ),
            1 => 
            array (
                'lang_id' => 2,
                'lang_name' => 'Tiếng Việt',
                'lang_locale' => 'vi',
                'lang_code' => 'vi',
                'lang_flag' => 'vn',
                'lang_is_default' => 0,
                'lang_order' => 0,
                'lang_is_rtl' => 0,
            ),
        ));
        
        
    }
}