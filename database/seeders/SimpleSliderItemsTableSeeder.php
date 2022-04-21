<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SimpleSliderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('simple_slider_items')->delete();
        
        \DB::table('simple_slider_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'simple_slider_id' => 1,
                'title' => 'Woman Fashion',
                'image' => 'sliders/1.jpg',
                'link' => NULL,
                'description' => 'Get up to 50% off Today Only!',
                'order' => 1,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            1 => 
            array (
                'id' => 2,
                'simple_slider_id' => 1,
                'title' => 'Man Fashion',
                'image' => 'sliders/2.jpg',
                'link' => NULL,
                'description' => '50% off in all products',
                'order' => 2,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            2 => 
            array (
                'id' => 3,
                'simple_slider_id' => 1,
                'title' => 'Summer Sale',
                'image' => 'sliders/3.jpg',
                'link' => NULL,
                'description' => 'Taking your Viewing Experience to Next Level',
                'order' => 3,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            3 => 
            array (
                'id' => 4,
                'simple_slider_id' => 2,
                'title' => 'Thời trang Nam',
                'image' => 'sliders/1.jpg',
                'link' => NULL,
                'description' => 'Được giảm giá tới 50% Chỉ hôm nay!',
                'order' => 1,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            4 => 
            array (
                'id' => 5,
                'simple_slider_id' => 2,
                'title' => 'Thời trang Nữ',
                'image' => 'sliders/2.jpg',
                'link' => NULL,
                'description' => 'Khuyến mãi 50% tất cả sản phẩm',
                'order' => 2,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            5 => 
            array (
                'id' => 6,
                'simple_slider_id' => 2,
                'title' => 'Khuyến mãi hè',
                'image' => 'sliders/3.jpg',
                'link' => NULL,
                'description' => 'Nâng trải nghiệm xem của bạn lên cấp độ tiếp theo',
                'order' => 3,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
        ));
        
        
    }
}