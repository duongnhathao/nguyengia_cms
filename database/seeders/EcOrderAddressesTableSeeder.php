<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcOrderAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_order_addresses')->delete();
        
        \DB::table('ec_order_addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cody O\'Reilly',
                'phone' => '+15206722188',
                'email' => 'orrin05@example.com',
                'country' => 'GS',
                'state' => 'Massachusetts',
                'city' => 'Harberview',
                'address' => '63261 Lavern Shore',
                'order_id' => 1,
                'zip_code' => '16348',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Maudie Jacobi Jr.',
                'phone' => '+14586271866',
                'email' => 'cdietrich@example.net',
                'country' => 'BN',
                'state' => 'Oklahoma',
                'city' => 'Port Deontae',
                'address' => '704 Marge Tunnel',
                'order_id' => 2,
                'zip_code' => '33560',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Gilda Gutkowski',
                'phone' => '+15306245381',
                'email' => 'ukozey@example.org',
                'country' => 'IO',
                'state' => 'Arizona',
                'city' => 'Barrettfort',
                'address' => '57730 Abbigail Dam',
                'order_id' => 3,
                'zip_code' => '48932-5674',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lavern Stoltenberg',
                'phone' => '+18707120139',
                'email' => 'rosella.blick@example.org',
                'country' => 'SY',
                'state' => 'West Virginia',
                'city' => 'Favianville',
                'address' => '166 Nyah Shores',
                'order_id' => 4,
                'zip_code' => '46044-0994',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'John Smith',
                'phone' => '+18288804370',
                'email' => 'john.smith@botble.com',
                'country' => 'TL',
                'state' => 'Utah',
                'city' => 'New Ena',
                'address' => '209 Bode Road',
                'order_id' => 5,
                'zip_code' => '72689-0438',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Miss Georgianna Rowe',
                'phone' => '+18564350372',
                'email' => 'rory17@example.org',
                'country' => 'UG',
                'state' => 'Wyoming',
                'city' => 'Port Catherine',
                'address' => '334 Jaskolski Mews Suite 654',
                'order_id' => 6,
                'zip_code' => '51411-0474',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Norris Heller',
                'phone' => '+16604353530',
                'email' => 'phirthe@example.net',
                'country' => 'TL',
                'state' => 'Washington',
                'city' => 'Eloyville',
                'address' => '3814 Raina Pines Suite 619',
                'order_id' => 7,
                'zip_code' => '00098',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Gilda Gutkowski',
                'phone' => '+15306245381',
                'email' => 'ukozey@example.org',
                'country' => 'IO',
                'state' => 'Arizona',
                'city' => 'Barrettfort',
                'address' => '57730 Abbigail Dam',
                'order_id' => 8,
                'zip_code' => '48932-5674',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Gilda Gutkowski',
                'phone' => '+15306245381',
                'email' => 'ukozey@example.org',
                'country' => 'IO',
                'state' => 'Arizona',
                'city' => 'Barrettfort',
                'address' => '57730 Abbigail Dam',
                'order_id' => 9,
                'zip_code' => '48932-5674',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dr. Megane O\'Keefe',
                'phone' => '+17274382659',
                'email' => 'pietro.maggio@example.org',
                'country' => 'LB',
                'state' => 'Iowa',
                'city' => 'Port Sigurdmouth',
                'address' => '9944 Streich Curve',
                'order_id' => 10,
                'zip_code' => '70890',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Norris Heller',
                'phone' => '+16604353530',
                'email' => 'phirthe@example.net',
                'country' => 'TL',
                'state' => 'Washington',
                'city' => 'Eloyville',
                'address' => '3814 Raina Pines Suite 619',
                'order_id' => 11,
                'zip_code' => '00098',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Cody O\'Reilly',
                'phone' => '+15206722188',
                'email' => 'orrin05@example.com',
                'country' => 'GS',
                'state' => 'Massachusetts',
                'city' => 'Harberview',
                'address' => '63261 Lavern Shore',
                'order_id' => 12,
                'zip_code' => '16348',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Miss Georgianna Rowe',
                'phone' => '+18564350372',
                'email' => 'rory17@example.org',
                'country' => 'UG',
                'state' => 'Wyoming',
                'city' => 'Port Catherine',
                'address' => '334 Jaskolski Mews Suite 654',
                'order_id' => 13,
                'zip_code' => '51411-0474',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Prof. Rhiannon Hudson',
                'phone' => '+14848855711',
                'email' => 'geovanny53@example.net',
                'country' => 'CN',
                'state' => 'Tennessee',
                'city' => 'South Gavinville',
                'address' => '460 Lela Spurs',
                'order_id' => 14,
                'zip_code' => '26517-5471',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Betty Maggio Jr.',
                'phone' => '+14407015303',
                'email' => 'shanelle89@example.com',
                'country' => 'VC',
                'state' => 'Ohio',
                'city' => 'Camrynborough',
                'address' => '36739 Bechtelar Street',
                'order_id' => 15,
                'zip_code' => '74159-1231',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Lavern Stoltenberg',
                'phone' => '+18707120139',
                'email' => 'rosella.blick@example.org',
                'country' => 'SY',
                'state' => 'West Virginia',
                'city' => 'Favianville',
                'address' => '166 Nyah Shores',
                'order_id' => 16,
                'zip_code' => '46044-0994',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Betty Maggio Jr.',
                'phone' => '+14407015303',
                'email' => 'shanelle89@example.com',
                'country' => 'VC',
                'state' => 'Ohio',
                'city' => 'Camrynborough',
                'address' => '36739 Bechtelar Street',
                'order_id' => 17,
                'zip_code' => '74159-1231',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Betty Maggio Jr.',
                'phone' => '+14407015303',
                'email' => 'shanelle89@example.com',
                'country' => 'VC',
                'state' => 'Ohio',
                'city' => 'Camrynborough',
                'address' => '36739 Bechtelar Street',
                'order_id' => 18,
                'zip_code' => '74159-1231',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Norris Heller',
                'phone' => '+16604353530',
                'email' => 'phirthe@example.net',
                'country' => 'TL',
                'state' => 'Washington',
                'city' => 'Eloyville',
                'address' => '3814 Raina Pines Suite 619',
                'order_id' => 19,
                'zip_code' => '00098',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Miss Georgianna Rowe',
                'phone' => '+18564350372',
                'email' => 'rory17@example.org',
                'country' => 'UG',
                'state' => 'Wyoming',
                'city' => 'Port Catherine',
                'address' => '334 Jaskolski Mews Suite 654',
                'order_id' => 20,
                'zip_code' => '51411-0474',
            ),
        ));
        
        
    }
}