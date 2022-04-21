<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_attributes')->delete();
        
        \DB::table('ec_product_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attribute_set_id' => 1,
                'title' => 'Green',
                'slug' => 'green',
                'color' => '#5FB7D4',
                'image' => NULL,
                'is_default' => 1,
                'order' => 1,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            1 => 
            array (
                'id' => 2,
                'attribute_set_id' => 1,
                'title' => 'Blue',
                'slug' => 'blue',
                'color' => '#333333',
                'image' => NULL,
                'is_default' => 0,
                'order' => 2,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            2 => 
            array (
                'id' => 3,
                'attribute_set_id' => 1,
                'title' => 'Red',
                'slug' => 'red',
                'color' => '#DA323F',
                'image' => NULL,
                'is_default' => 0,
                'order' => 3,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            3 => 
            array (
                'id' => 4,
                'attribute_set_id' => 1,
                'title' => 'Black',
                'slug' => 'back',
                'color' => '#2F366C',
                'image' => NULL,
                'is_default' => 0,
                'order' => 4,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            4 => 
            array (
                'id' => 5,
                'attribute_set_id' => 1,
                'title' => 'Brown',
                'slug' => 'brown',
                'color' => '#87554B',
                'image' => NULL,
                'is_default' => 0,
                'order' => 5,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            5 => 
            array (
                'id' => 6,
                'attribute_set_id' => 2,
                'title' => 'S',
                'slug' => 's',
                'color' => NULL,
                'image' => NULL,
                'is_default' => 1,
                'order' => 1,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            6 => 
            array (
                'id' => 7,
                'attribute_set_id' => 2,
                'title' => 'M',
                'slug' => 'm',
                'color' => NULL,
                'image' => NULL,
                'is_default' => 0,
                'order' => 2,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            7 => 
            array (
                'id' => 8,
                'attribute_set_id' => 2,
                'title' => 'L',
                'slug' => 'l',
                'color' => NULL,
                'image' => NULL,
                'is_default' => 0,
                'order' => 3,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            8 => 
            array (
                'id' => 9,
                'attribute_set_id' => 2,
                'title' => 'XL',
                'slug' => 'xl',
                'color' => NULL,
                'image' => NULL,
                'is_default' => 0,
                'order' => 4,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
            9 => 
            array (
                'id' => 10,
                'attribute_set_id' => 2,
                'title' => 'XXL',
                'slug' => 'xxl',
                'color' => NULL,
                'image' => NULL,
                'is_default' => 0,
                'order' => 5,
                'status' => 'published',
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
            ),
        ));
        
        
    }
}