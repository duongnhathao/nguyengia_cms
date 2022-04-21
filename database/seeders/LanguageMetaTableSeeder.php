<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguageMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language_meta')->delete();
        
        \DB::table('language_meta')->insert(array (
            0 => 
            array (
                'lang_meta_id' => 1,
                'lang_meta_code' => 'en_US',
                'lang_meta_origin' => '73c25068aaa2a5c206d48ac1fc60923f',
                'reference_id' => 1,
                'reference_type' => 'Botble\\SimpleSlider\\Models\\SimpleSlider',
            ),
            1 => 
            array (
                'lang_meta_id' => 2,
                'lang_meta_code' => 'vi',
                'lang_meta_origin' => '73c25068aaa2a5c206d48ac1fc60923f',
                'reference_id' => 2,
                'reference_type' => 'Botble\\SimpleSlider\\Models\\SimpleSlider',
            ),
            2 => 
            array (
                'lang_meta_id' => 3,
                'lang_meta_code' => 'en_US',
                'lang_meta_origin' => '36fd047718f0cefd0eee0a737827196a',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Menu\\Models\\MenuLocation',
            ),
            3 => 
            array (
                'lang_meta_id' => 4,
                'lang_meta_code' => 'en_US',
                'lang_meta_origin' => 'f4f1abb3930b5ac214123f1b7fe901ee',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            4 => 
            array (
                'lang_meta_id' => 5,
                'lang_meta_code' => 'en_US',
                'lang_meta_origin' => '8e866caa342b7c491fdef187412568c0',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            5 => 
            array (
                'lang_meta_id' => 6,
                'lang_meta_code' => 'en_US',
                'lang_meta_origin' => '430770c63500089634ba5841e5f3f605',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            6 => 
            array (
                'lang_meta_id' => 7,
                'lang_meta_code' => 'en_US',
                'lang_meta_origin' => '1de3fdda9985358daaa082398f3f65f0',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            7 => 
            array (
                'lang_meta_id' => 8,
                'lang_meta_code' => 'vi',
                'lang_meta_origin' => 'd4d832ebc48f2698f26ff1a66ba25b55',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Menu\\Models\\MenuLocation',
            ),
            8 => 
            array (
                'lang_meta_id' => 9,
                'lang_meta_code' => 'vi',
                'lang_meta_origin' => 'f4f1abb3930b5ac214123f1b7fe901ee',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            9 => 
            array (
                'lang_meta_id' => 10,
                'lang_meta_code' => 'vi',
                'lang_meta_origin' => '8e866caa342b7c491fdef187412568c0',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            10 => 
            array (
                'lang_meta_id' => 11,
                'lang_meta_code' => 'vi',
                'lang_meta_origin' => '430770c63500089634ba5841e5f3f605',
                'reference_id' => 7,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
            11 => 
            array (
                'lang_meta_id' => 12,
                'lang_meta_code' => 'vi',
                'lang_meta_origin' => '1de3fdda9985358daaa082398f3f65f0',
                'reference_id' => 8,
                'reference_type' => 'Botble\\Menu\\Models\\Menu',
            ),
        ));
        
        
    }
}