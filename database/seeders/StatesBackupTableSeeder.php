<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesBackupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states_backup')->delete();
        
        
        
    }
}