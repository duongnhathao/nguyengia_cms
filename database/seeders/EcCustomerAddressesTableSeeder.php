<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcCustomerAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_customer_addresses')->delete();
        
        \DB::table('ec_customer_addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Smith',
                'email' => 'john.smith@botble.com',
                'phone' => '+18288804370',
                'country' => 'TL',
                'state' => 'Utah',
                'city' => 'New Ena',
                'address' => '209 Bode Road',
                'customer_id' => 1,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:46',
                'updated_at' => '2022-01-04 04:20:46',
                'zip_code' => '72689-0438',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'John Smith',
                'email' => 'john.smith@botble.com',
                'phone' => '+18186619632',
                'country' => 'TT',
                'state' => 'Kentucky',
                'city' => 'East Mosesmouth',
                'address' => '3350 Koepp Courts Apt. 439',
                'customer_id' => 1,
                'is_default' => 0,
                'created_at' => '2022-01-04 04:20:46',
                'updated_at' => '2022-01-04 04:20:46',
                'zip_code' => '76467',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Gilda Gutkowski',
                'email' => 'ukozey@example.org',
                'phone' => '+15306245381',
                'country' => 'IO',
                'state' => 'Arizona',
                'city' => 'Barrettfort',
                'address' => '57730 Abbigail Dam',
                'customer_id' => 2,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '48932-5674',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Norris Heller',
                'email' => 'phirthe@example.net',
                'phone' => '+16604353530',
                'country' => 'TL',
                'state' => 'Washington',
                'city' => 'Eloyville',
                'address' => '3814 Raina Pines Suite 619',
                'customer_id' => 3,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '00098',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dr. Megane O\'Keefe',
                'email' => 'pietro.maggio@example.org',
                'phone' => '+17274382659',
                'country' => 'LB',
                'state' => 'Iowa',
                'city' => 'Port Sigurdmouth',
                'address' => '9944 Streich Curve',
                'customer_id' => 4,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '70890',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cody O\'Reilly',
                'email' => 'orrin05@example.com',
                'phone' => '+15206722188',
                'country' => 'GS',
                'state' => 'Massachusetts',
                'city' => 'Harberview',
                'address' => '63261 Lavern Shore',
                'customer_id' => 5,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '16348',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Betty Maggio Jr.',
                'email' => 'shanelle89@example.com',
                'phone' => '+14407015303',
                'country' => 'VC',
                'state' => 'Ohio',
                'city' => 'Camrynborough',
                'address' => '36739 Bechtelar Street',
                'customer_id' => 6,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '74159-1231',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Maudie Jacobi Jr.',
                'email' => 'cdietrich@example.net',
                'phone' => '+14586271866',
                'country' => 'BN',
                'state' => 'Oklahoma',
                'city' => 'Port Deontae',
                'address' => '704 Marge Tunnel',
                'customer_id' => 7,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '33560',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Prof. Kaden Gerhold',
                'email' => 'virginie88@example.net',
                'phone' => '+18014325651',
                'country' => 'AI',
                'state' => 'Missouri',
                'city' => 'Jacobsland',
                'address' => '86903 Vernice Estates',
                'customer_id' => 8,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '96845',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Prof. Rhiannon Hudson',
                'email' => 'geovanny53@example.net',
                'phone' => '+14848855711',
                'country' => 'CN',
                'state' => 'Tennessee',
                'city' => 'South Gavinville',
                'address' => '460 Lela Spurs',
                'customer_id' => 9,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '26517-5471',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Lavern Stoltenberg',
                'email' => 'rosella.blick@example.org',
                'phone' => '+18707120139',
                'country' => 'SY',
                'state' => 'West Virginia',
                'city' => 'Favianville',
                'address' => '166 Nyah Shores',
                'customer_id' => 10,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '46044-0994',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Miss Georgianna Rowe',
                'email' => 'rory17@example.org',
                'phone' => '+18564350372',
                'country' => 'UG',
                'state' => 'Wyoming',
                'city' => 'Port Catherine',
                'address' => '334 Jaskolski Mews Suite 654',
                'customer_id' => 11,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:20:47',
                'updated_at' => '2022-01-04 04:20:47',
                'zip_code' => '51411-0474',
            ),
        ));
        
        
    }
}