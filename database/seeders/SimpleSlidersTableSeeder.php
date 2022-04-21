<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SimpleSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('simple_sliders')->delete();
        
        \DB::table('simple_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home slider',
                'key' => 'home-slider',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Slider trang chủ',
                'key' => 'slider-trang-chu',
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
        ));
        
        
    }
}