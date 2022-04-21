<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesBackupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries_backup')->delete();
        
        
        
    }
}