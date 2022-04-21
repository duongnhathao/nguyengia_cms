<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguageMetaBackupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language_meta_backup')->delete();
        
        
        
    }
}