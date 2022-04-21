<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcCartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_cart')->delete();
        
        
        
    }
}