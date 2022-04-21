<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_categories')->delete();
        
        \DB::table('ec_product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Television',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 0,
                'image' => 'product-categories/p-1.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Home Audio & Theaters',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 0,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TV & Videos',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 1,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Camera, Photos & Videos',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 2,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cellphones & Accessories',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 3,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Headphones',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 4,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Videos games',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 5,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Wireless Speakers',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 6,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Office Electronic',
                'parent_id' => 1,
                'description' => NULL,
                'status' => 'published',
                'order' => 7,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mobile',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 1,
                'image' => 'product-categories/p-2.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Digital Cables',
                'parent_id' => 10,
                'description' => NULL,
                'status' => 'published',
                'order' => 0,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Audio & Video Cables',
                'parent_id' => 10,
                'description' => NULL,
                'status' => 'published',
                'order' => 1,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Batteries',
                'parent_id' => 10,
                'description' => NULL,
                'status' => 'published',
                'order' => 2,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Headphone',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 2,
                'image' => 'product-categories/p-3.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Computer & Tablets',
                'parent_id' => 14,
                'description' => NULL,
                'status' => 'published',
                'order' => 0,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Laptop',
                'parent_id' => 14,
                'description' => NULL,
                'status' => 'published',
                'order' => 1,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Monitors',
                'parent_id' => 14,
                'description' => NULL,
                'status' => 'published',
                'order' => 2,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Computer Components',
                'parent_id' => 14,
                'description' => NULL,
                'status' => 'published',
                'order' => 3,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Watches',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 3,
                'image' => 'product-categories/p-4.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Drive & Storages',
                'parent_id' => 19,
                'description' => NULL,
                'status' => 'published',
                'order' => 0,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Gaming Laptop',
                'parent_id' => 19,
                'description' => NULL,
                'status' => 'published',
                'order' => 1,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Security & Protection',
                'parent_id' => 19,
                'description' => NULL,
                'status' => 'published',
                'order' => 2,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Accessories',
                'parent_id' => 19,
                'description' => NULL,
                'status' => 'published',
                'order' => 3,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Game',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 4,
                'image' => 'product-categories/p-5.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Camera',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 5,
                'image' => 'product-categories/p-6.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Audio',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 6,
                'image' => 'product-categories/p-7.png',
                'is_featured' => 1,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Mobile & Tablet',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 7,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Accessories',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 8,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Home Audio & Theater',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 9,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Tv & Smart Box',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 10,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Printer',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 11,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Computer',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 12,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Fax Machine',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 13,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Mouse',
                'parent_id' => 0,
                'description' => NULL,
                'status' => 'published',
                'order' => 14,
                'image' => NULL,
                'is_featured' => 0,
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
        ));
        
        
    }
}