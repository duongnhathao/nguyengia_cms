<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductAttributeSetsTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_attribute_sets_translations')->delete();
        
        \DB::table('ec_product_attribute_sets_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attribute_sets_id' => 1,
                'title' => 'Màu sắc',
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'ec_product_attribute_sets_id' => 2,
                'title' => 'Kích thước',
            ),
        ));
        
        
    }
}