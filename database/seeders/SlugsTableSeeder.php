<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slugs')->delete();
        
        \DB::table('slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'fashion-live',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'hand-crafted',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'mestonix',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'sunshine',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'pure',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'anfold',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'automotive',
                'reference_id' => 7,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Brand',
                'prefix' => 'brands',
                'created_at' => '2022-01-04 04:20:43',
                'updated_at' => '2022-01-04 04:20:43',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'television',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'home-audio-theaters',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'tv-videos',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'camera-photos-videos',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'cellphones-accessories',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'headphones',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'videos-games',
                'reference_id' => 7,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'wireless-speakers',
                'reference_id' => 8,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'office-electronic',
                'reference_id' => 9,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'mobile',
                'reference_id' => 10,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'digital-cables',
                'reference_id' => 11,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'audio-video-cables',
                'reference_id' => 12,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'batteries',
                'reference_id' => 13,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'headphone',
                'reference_id' => 14,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'computer-tablets',
                'reference_id' => 15,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'laptop',
                'reference_id' => 16,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'monitors',
                'reference_id' => 17,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'computer-components',
                'reference_id' => 18,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'watches',
                'reference_id' => 19,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'drive-storages',
                'reference_id' => 20,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'gaming-laptop',
                'reference_id' => 21,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'security-protection',
                'reference_id' => 22,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'accessories',
                'reference_id' => 23,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'game',
                'reference_id' => 24,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'camera',
                'reference_id' => 25,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'audio',
                'reference_id' => 26,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'mobile-tablet',
                'reference_id' => 27,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'accessories',
                'reference_id' => 28,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'home-audio-theater',
                'reference_id' => 29,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'tv-smart-box',
                'reference_id' => 30,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'printer',
                'reference_id' => 31,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'computer',
                'reference_id' => 32,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'fax-machine',
                'reference_id' => 33,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'mouse',
                'reference_id' => 34,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductCategory',
                'prefix' => 'product-categories',
                'created_at' => '2022-01-04 04:20:45',
                'updated_at' => '2022-01-04 04:20:45',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'smart-home-speaker',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'headphone-ultra-bass',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'boxed-bluetooth-headphone',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'chikie-bluetooth-speaker',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'camera-hikvision-hk-35vs8',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'camera-samsung-ss-24',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'leather-watch-band',
                'reference_id' => 7,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'apple-iphone-13-plus',
                'reference_id' => 8,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'macbook-pro-2015',
                'reference_id' => 9,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'macbook-air-12-inch',
                'reference_id' => 10,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'apple-watch-serial-7',
                'reference_id' => 11,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'macbook-pro-13-inch',
                'reference_id' => 12,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'apple-keyboard',
                'reference_id' => 13,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'macsafe-80w',
                'reference_id' => 14,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'hand-playstation',
                'reference_id' => 15,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'apple-airpods-serial-3',
                'reference_id' => 16,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'cool-smart-watches',
                'reference_id' => 17,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'black-smart-watches',
                'reference_id' => 18,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'leather-watch-band-serial-3',
                'reference_id' => 19,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'macbook-pro-2015-13-inch',
                'reference_id' => 20,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'historic-alarm-clock',
                'reference_id' => 21,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'black-glasses',
                'reference_id' => 22,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'phillips-mouse',
                'reference_id' => 23,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'gaming-keyboard',
                'reference_id' => 24,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'dual-camera-20mp',
                'reference_id' => 25,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'smart-watches',
                'reference_id' => 26,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'beat-headphone',
                'reference_id' => 27,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'red-black-headphone',
                'reference_id' => 28,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'audio-equipment',
                'reference_id' => 29,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'smart-televisions',
                'reference_id' => 30,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'samsung-smart-tv',
                'reference_id' => 31,
                'reference_type' => 'Botble\\Ecommerce\\Models\\Product',
                'prefix' => 'products',
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'electronic',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductTag',
                'prefix' => 'product-tags',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'mobile',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductTag',
                'prefix' => 'product-tags',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'iphone',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductTag',
                'prefix' => 'product-tags',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'printer',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductTag',
                'prefix' => 'product-tags',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'office',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductTag',
                'prefix' => 'product-tags',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'it',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Ecommerce\\Models\\ProductTag',
                'prefix' => 'product-tags',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'ecommerce',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Blog\\Models\\Category',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'fashion',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Blog\\Models\\Category',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'electronic',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Blog\\Models\\Category',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'commercial',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Blog\\Models\\Category',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'general',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Blog\\Models\\Tag',
                'prefix' => 'tags',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'design',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Blog\\Models\\Tag',
                'prefix' => 'tags',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'fashion',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Blog\\Models\\Tag',
                'prefix' => 'tags',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'branding',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Blog\\Models\\Tag',
                'prefix' => 'tags',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            86 => 
            array (
                'id' => 87,
                'key' => 'modern',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Blog\\Models\\Tag',
                'prefix' => 'tags',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            87 => 
            array (
                'id' => 88,
                'key' => '4-expert-tips-on-how-to-choose-the-right-mens-wallet',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            88 => 
            array (
                'id' => 89,
                'key' => 'sexy-clutches-how-to-buy-wear-a-designer-clutch-bag',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            89 => 
            array (
                'id' => 90,
                'key' => 'the-top-2020-handbag-trends-to-know',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            90 => 
            array (
                'id' => 91,
                'key' => 'how-to-match-the-color-of-your-handbag-with-an-outfit',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            91 => 
            array (
                'id' => 92,
                'key' => 'how-to-care-for-leather-bags',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            92 => 
            array (
                'id' => 93,
                'key' => 'were-crushing-hard-on-summers-10-biggest-bag-trends',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            93 => 
            array (
                'id' => 94,
                'key' => 'essential-qualities-of-highly-successful-music',
                'reference_id' => 7,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            94 => 
            array (
                'id' => 95,
                'key' => '9-things-i-love-about-shaving-my-head',
                'reference_id' => 8,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            95 => 
            array (
                'id' => 96,
                'key' => 'why-teamwork-really-makes-the-dream-work',
                'reference_id' => 9,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            96 => 
            array (
                'id' => 97,
                'key' => 'the-world-caters-to-average-people',
                'reference_id' => 10,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            97 => 
            array (
                'id' => 98,
                'key' => 'the-litigants-on-the-screen-are-not-actors',
                'reference_id' => 11,
                'reference_type' => 'Botble\\Blog\\Models\\Post',
                'prefix' => 'news',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            98 => 
            array (
                'id' => 99,
                'key' => 'homepage',
                'reference_id' => 1,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            99 => 
            array (
                'id' => 100,
                'key' => 'contact-us',
                'reference_id' => 2,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            100 => 
            array (
                'id' => 101,
                'key' => 'blog',
                'reference_id' => 3,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            101 => 
            array (
                'id' => 102,
                'key' => 'about-us',
                'reference_id' => 4,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            102 => 
            array (
                'id' => 103,
                'key' => 'faq',
                'reference_id' => 5,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            103 => 
            array (
                'id' => 104,
                'key' => 'location',
                'reference_id' => 6,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            104 => 
            array (
                'id' => 105,
                'key' => 'affiliates',
                'reference_id' => 7,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            105 => 
            array (
                'id' => 106,
                'key' => 'brands',
                'reference_id' => 8,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            106 => 
            array (
                'id' => 107,
                'key' => 'cookie-policy',
                'reference_id' => 9,
                'reference_type' => 'Botble\\Page\\Models\\Page',
                'prefix' => '',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
        ));
        
        
    }
}