<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcTaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_taxes')->delete();
        
        \DB::table('ec_taxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'VAT',
                'percentage' => 10.0,
                'priority' => 1,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'None',
                'percentage' => 0.0,
                'priority' => 2,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:14',
                'updated_at' => '2022-01-04 04:21:14',
            ),
        ));
        
        
    }
}