<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq_categories')->delete();
        
        \DB::table('faq_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Shipping',
                'order' => 0,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Payment',
                'order' => 1,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Order & Returns',
                'order' => 2,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
        ));
        
        
    }
}