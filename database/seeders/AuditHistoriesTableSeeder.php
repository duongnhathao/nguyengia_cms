<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuditHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('audit_histories')->delete();
        
        
        
    }
}