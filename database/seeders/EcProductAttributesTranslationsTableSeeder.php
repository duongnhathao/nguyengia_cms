<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductAttributesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_attributes_translations')->delete();
        
        \DB::table('ec_product_attributes_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 1,
                'title' => 'Xanh lá cây',
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 2,
                'title' => 'Xanh da trời',
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 3,
                'title' => 'Đỏ',
            ),
            3 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 4,
                'title' => 'Đen',
            ),
            4 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 5,
                'title' => 'Nâu',
            ),
            5 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 6,
                'title' => 'S',
            ),
            6 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 7,
                'title' => 'M',
            ),
            7 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 8,
                'title' => 'L',
            ),
            8 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 9,
                'title' => 'XL',
            ),
            9 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attributes_id' => 10,
                'title' => 'XXL',
            ),
        ));
        
        
    }
}