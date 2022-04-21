<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcFlashSalesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_flash_sales_translations')->delete();
        
        \DB::table('ec_flash_sales_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'ec_flash_sales_id' => 1,
                'name' => 'Khuyến mãi trong ngày.',
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'ec_flash_sales_id' => 2,
                'name' => 'Tiện ích & Phụ kiện',
            ),
        ));
        
        
    }
}