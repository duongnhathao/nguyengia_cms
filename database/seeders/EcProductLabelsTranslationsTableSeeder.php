<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductLabelsTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_labels_translations')->delete();
        
        \DB::table('ec_product_labels_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'ec_product_labels_id' => 1,
                'name' => 'Nổi bật',
                'description' => NULL,
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'ec_product_labels_id' => 2,
                'name' => 'Mới',
                'description' => NULL,
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'ec_product_labels_id' => 3,
                'name' => 'Giảm giá',
                'description' => NULL,
            ),
        ));
        
        
    }
}