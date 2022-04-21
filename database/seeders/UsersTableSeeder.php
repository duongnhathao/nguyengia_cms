<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'admin@botble.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Hkbdp.lY6Oyl1kzhjMWCTu7dw901W5nBW.mvIWCt3qjQLYSNfqsY6',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
                'first_name' => 'System',
                'last_name' => 'Admin',
                'username' => 'botble',
                'avatar_id' => NULL,
                'super_user' => 1,
                'manage_supers' => 1,
                'permissions' => NULL,
                'last_login' => NULL,
                'stripe_id' => NULL,
                'pm_type' => NULL,
                'pm_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
        ));
        
        
    }
}