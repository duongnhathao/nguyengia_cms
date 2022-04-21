<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcCustomerPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_customer_password_resets')->delete();
        
        
        
    }
}