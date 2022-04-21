<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcCustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_customers')->delete();
        
        \DB::table('ec_customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Smith',
                'email' => 'john.smith@botble.com',
                'password' => '$2y$10$/9/b4C1PqxZT7Hb3zZtRCOtwZXaFxZR3W/05KUSMpvP/mMtYonRhC',
                'avatar' => 'customers/1.jpg',
                'dob' => NULL,
                'phone' => '+16517592198',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:46',
                'updated_at' => '2022-01-04 04:20:46',
                'confirmed_at' => '2022-01-04 04:20:46',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Gilda Gutkowski',
                'email' => 'ukozey@example.org',
                'password' => '$2y$10$6p2wEecZ3SCWXYMcpG33guXRlLohyGtQSpV1G7C3vImkCgJDysHG6',
                'avatar' => 'customers/1.jpg',
                'dob' => NULL,
                'phone' => '+17085045205',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:46',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Norris Heller',
                'email' => 'phirthe@example.net',
                'password' => '$2y$10$d7pge0dBg9ZMLbKRgll4d.EG/I2.TmKyeYdKI8mIp/Onuy3fZ6rqG',
                'avatar' => 'customers/2.jpg',
                'dob' => NULL,
                'phone' => '+14429786561',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dr. Megane O\'Keefe',
                'email' => 'pietro.maggio@example.org',
                'password' => '$2y$10$n4OMnTbfAwxKIx1an.V3Z.jqEAvbJDJTi7s6lUw3fZXoTtgK9UhX.',
                'avatar' => 'customers/3.jpg',
                'dob' => NULL,
                'phone' => '+14454936268',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cody O\'Reilly',
                'email' => 'orrin05@example.com',
                'password' => '$2y$10$5OsxQp3L3FEkCq46ltWdruC4TAq7x5QvONneiMG/goHL15ceFUHvG',
                'avatar' => 'customers/4.jpg',
                'dob' => NULL,
                'phone' => '+19719610072',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Betty Maggio Jr.',
                'email' => 'shanelle89@example.com',
                'password' => '$2y$10$glSqQ4Vt0Qzd2Fa2x9anIO5H.4OnglXwFmtX8GlWKML3rj7/7yy1u',
                'avatar' => 'customers/5.jpg',
                'dob' => NULL,
                'phone' => '+14308233006',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Maudie Jacobi Jr.',
                'email' => 'cdietrich@example.net',
                'password' => '$2y$10$UOiuWClgWBrvixGA9PnsqO88qSyhjGqhGoy8Eaw4pSAyemOooX6yK',
                'avatar' => 'customers/6.jpg',
                'dob' => NULL,
                'phone' => '+17605634307',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Prof. Kaden Gerhold',
                'email' => 'virginie88@example.net',
                'password' => '$2y$10$F3kzRLw3hcBmhQlfZR4Ty.CZ6h4QTHnNSE0CLaLWitUi9mylBSiAO',
                'avatar' => 'customers/7.jpg',
                'dob' => NULL,
                'phone' => '+19868678118',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Prof. Rhiannon Hudson',
                'email' => 'geovanny53@example.net',
                'password' => '$2y$10$YLRI0Lvz.SFPsGq2K8KQb.bi.hHP7TMCXiAviDOKi4Ql8G4pYHTJS',
                'avatar' => 'customers/8.jpg',
                'dob' => NULL,
                'phone' => '+16895586146',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Lavern Stoltenberg',
                'email' => 'rosella.blick@example.org',
                'password' => '$2y$10$aGsPnnfOIcm0pWyEFY6pV.NH4WRgTPICwGytIQUkwGJb/KzUp6s9.',
                'avatar' => 'customers/9.jpg',
                'dob' => NULL,
                'phone' => '+13522609240',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Miss Georgianna Rowe',
                'email' => 'rory17@example.org',
                'password' => '$2y$10$RSHRiIk5mN7ZSZ6uPvP6uuOB/oOrXGWqs8g6F8wAEqRUYBuc7T9H.',
                'avatar' => 'customers/10.jpg',
                'dob' => NULL,
                'phone' => '+14409244086',
                'remember_token' => NULL,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'confirmed_at' => '2022-01-04 04:20:47',
                'email_verify_token' => NULL,
                'status' => 'activated',
            ),
        ));
        
        
    }
}