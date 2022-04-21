<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesBackupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities_backup')->delete();
        
        
        
    }
}