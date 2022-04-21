<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductCollectionsTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_collections_translations')->delete();
        
        \DB::table('ec_product_collections_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'ec_product_collections_id' => 1,
                'name' => 'Hàng mới về',
                'description' => NULL,
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'ec_product_collections_id' => 2,
                'name' => 'Bán chạy nhất',
                'description' => NULL,
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'ec_product_collections_id' => 3,
                'name' => 'Khuyến mãi đặc biệt',
                'description' => NULL,
            ),
        ));
        
        
    }
}