<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqCategoriesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq_categories_translations')->delete();
        
        \DB::table('faq_categories_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'faq_categories_id' => 1,
                'name' => 'VẬN CHUYỂN',
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'faq_categories_id' => 2,
                'name' => 'THANH TOÁN',
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'faq_categories_id' => 3,
                'name' => 'ĐƠN HÀNG & HOÀN TRẢ',
            ),
        ));
        
        
    }
}