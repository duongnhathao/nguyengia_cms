<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Main menu',
                'slug' => 'main-menu',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Useful Links',
                'slug' => 'useful-links',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Categories',
                'slug' => 'categories',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'My Account',
                'slug' => 'my-account',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Menu chính',
                'slug' => 'menu-chinh',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Liên kết hữu ích',
                'slug' => 'lien-ket-huu-ich',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Danh mục',
                'slug' => 'danh-muc',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Tài khoản',
                'slug' => 'tai-khoan',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
        ));
        
        
    }
}