<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcBrandsTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_brands_translations')->delete();
        
        \DB::table('ec_brands_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 1,
                'name' => 'Fashion live',
                'description' => NULL,
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 2,
                'name' => 'Hand crafted',
                'description' => NULL,
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 3,
                'name' => 'Mestonix',
                'description' => NULL,
            ),
            3 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 4,
                'name' => 'Sunshine',
                'description' => NULL,
            ),
            4 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 5,
                'name' => 'Pure',
                'description' => NULL,
            ),
            5 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 6,
                'name' => 'Anfold',
                'description' => NULL,
            ),
            6 => 
            array (
                'lang_code' => 'vi',
                'ec_brands_id' => 7,
                'name' => 'Automotive',
                'description' => NULL,
            ),
        ));
        
        
    }
}