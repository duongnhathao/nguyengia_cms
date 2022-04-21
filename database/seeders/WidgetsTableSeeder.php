<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WidgetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('widgets')->delete();
        
        \DB::table('widgets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'theme' => 'shopwise',
                'position' => 1,
                'data' => '{"id":"CustomMenuWidget","name":"Useful Links","menu_id":"useful-links"}',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            1 => 
            array (
                'id' => 2,
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'theme' => 'shopwise',
                'position' => 2,
                'data' => '{"id":"CustomMenuWidget","name":"Categories","menu_id":"categories"}',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            2 => 
            array (
                'id' => 3,
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'theme' => 'shopwise',
                'position' => 3,
                'data' => '{"id":"CustomMenuWidget","name":"My Account","menu_id":"my-account"}',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            3 => 
            array (
                'id' => 4,
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'theme' => 'shopwise-vi',
                'position' => 1,
                'data' => '{"id":"CustomMenuWidget","name":"Li\\u00ean k\\u1ebft h\\u1eefu \\u00edch","menu_id":"lien-ket-huu-ich"}',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            4 => 
            array (
                'id' => 5,
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'theme' => 'shopwise-vi',
                'position' => 2,
                'data' => '{"id":"CustomMenuWidget","name":"Danh m\\u1ee5c","menu_id":"danh-muc"}',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            5 => 
            array (
                'id' => 6,
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'theme' => 'shopwise-vi',
                'position' => 3,
                'data' => '{"id":"CustomMenuWidget","name":"T\\u00e0i kho\\u1ea3n","menu_id":"tai-khoan"}',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
        ));
        
        
    }
}