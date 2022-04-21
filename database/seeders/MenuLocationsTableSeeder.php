<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuLocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_locations')->delete();
        
        \DB::table('menu_locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'location' => 'main-menu',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 5,
                'location' => 'main-menu',
                'created_at' => '2022-01-04 04:21:20',
                'updated_at' => '2022-01-04 04:21:20',
            ),
        ));
        
        
    }
}