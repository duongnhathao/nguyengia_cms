<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductAttributeSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_product_attribute_sets')->delete();
        
        \DB::table('ec_product_attribute_sets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Color',
                'slug' => 'color',
                'display_layout' => 'visual',
                'is_searchable' => 1,
                'is_comparable' => 1,
                'is_use_in_product_listing' => 1,
                'status' => 'published',
                'order' => 0,
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
                'use_image_from_product_variation' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Size',
                'slug' => 'size',
                'display_layout' => 'text',
                'is_searchable' => 1,
                'is_comparable' => 1,
                'is_use_in_product_listing' => 1,
                'status' => 'published',
                'order' => 1,
                'created_at' => '2022-03-20 14:06:37',
                'updated_at' => '2022-03-20 14:06:37',
                'use_image_from_product_variation' => 0,
            ),
        ));
        
        
    }
}