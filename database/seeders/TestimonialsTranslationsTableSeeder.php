<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials_translations')->delete();
        
        \DB::table('testimonials_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'testimonials_id' => 1,
                'name' => 'Adam Williams',
                'content' => NULL,
                'company' => 'Giám đốc Microsoft',
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'testimonials_id' => 2,
                'name' => 'Retha Deowalim',
                'content' => NULL,
                'company' => 'Giám đốc Apple',
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'testimonials_id' => 3,
                'name' => 'Sam J. Wasim',
                'content' => NULL,
                'company' => 'Nhà sáng lập Pio',
            ),
            3 => 
            array (
                'lang_code' => 'vi',
                'testimonials_id' => 4,
                'name' => 'Usan Gulwarm',
                'content' => NULL,
                'company' => 'Giám đốc Facewarm',
            ),
        ));
        
        
    }
}