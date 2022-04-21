<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcFlashSalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_flash_sales')->delete();
        
        \DB::table('ec_flash_sales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Deal of the Day.',
                'end_date' => '2022-04-13 00:00:00',
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Gadgets & Accessories',
                'end_date' => '2022-04-23 00:00:00',
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
        ));
        
        
    }
}