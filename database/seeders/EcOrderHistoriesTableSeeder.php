<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcOrderHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_order_histories')->delete();
        
        \DB::table('ec_order_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 1,
                'extras' => NULL,
                'created_at' => '2022-03-15 14:06:38',
                'updated_at' => '2022-03-15 14:06:38',
            ),
            1 => 
            array (
                'id' => 2,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 1,
                'extras' => NULL,
                'created_at' => '2022-03-15 14:06:38',
                'updated_at' => '2022-03-15 14:06:38',
            ),
            2 => 
            array (
                'id' => 3,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $1,606.00) by %user_name%',
                'user_id' => 0,
                'order_id' => 1,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            3 => 
            array (
                'id' => 4,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 1,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            4 => 
            array (
                'id' => 5,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 2,
                'extras' => NULL,
                'created_at' => '2022-03-06 08:06:38',
                'updated_at' => '2022-03-06 08:06:38',
            ),
            5 => 
            array (
                'id' => 6,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 2,
                'extras' => NULL,
                'created_at' => '2022-03-06 08:06:38',
                'updated_at' => '2022-03-06 08:06:38',
            ),
            6 => 
            array (
                'id' => 7,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 2,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            7 => 
            array (
                'id' => 8,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 3,
                'extras' => NULL,
                'created_at' => '2022-03-19 02:06:38',
                'updated_at' => '2022-03-19 02:06:38',
            ),
            8 => 
            array (
                'id' => 9,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 3,
                'extras' => NULL,
                'created_at' => '2022-03-19 02:06:38',
                'updated_at' => '2022-03-19 02:06:38',
            ),
            9 => 
            array (
                'id' => 10,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $483.90) by %user_name%',
                'user_id' => 0,
                'order_id' => 3,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            10 => 
            array (
                'id' => 11,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 3,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            11 => 
            array (
                'id' => 12,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 4,
                'extras' => NULL,
                'created_at' => '2022-03-17 18:06:38',
                'updated_at' => '2022-03-17 18:06:38',
            ),
            12 => 
            array (
                'id' => 13,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 4,
                'extras' => NULL,
                'created_at' => '2022-03-17 18:06:38',
                'updated_at' => '2022-03-17 18:06:38',
            ),
            13 => 
            array (
                'id' => 14,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 4,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            14 => 
            array (
                'id' => 15,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 5,
                'extras' => NULL,
                'created_at' => '2022-03-07 06:06:38',
                'updated_at' => '2022-03-07 06:06:38',
            ),
            15 => 
            array (
                'id' => 16,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 5,
                'extras' => NULL,
                'created_at' => '2022-03-07 06:06:38',
                'updated_at' => '2022-03-07 06:06:38',
            ),
            16 => 
            array (
                'id' => 17,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $1,542.80) by %user_name%',
                'user_id' => 0,
                'order_id' => 5,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            17 => 
            array (
                'id' => 18,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 5,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            18 => 
            array (
                'id' => 19,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 5,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            19 => 
            array (
                'id' => 20,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 6,
                'extras' => NULL,
                'created_at' => '2022-03-14 08:06:38',
                'updated_at' => '2022-03-14 08:06:38',
            ),
            20 => 
            array (
                'id' => 21,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 6,
                'extras' => NULL,
                'created_at' => '2022-03-14 08:06:38',
                'updated_at' => '2022-03-14 08:06:38',
            ),
            21 => 
            array (
                'id' => 22,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 6,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            22 => 
            array (
                'id' => 23,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 7,
                'extras' => NULL,
                'created_at' => '2022-03-11 06:06:38',
                'updated_at' => '2022-03-11 06:06:38',
            ),
            23 => 
            array (
                'id' => 24,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 7,
                'extras' => NULL,
                'created_at' => '2022-03-11 06:06:38',
                'updated_at' => '2022-03-11 06:06:38',
            ),
            24 => 
            array (
                'id' => 25,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 7,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            25 => 
            array (
                'id' => 26,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 7,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            26 => 
            array (
                'id' => 27,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 8,
                'extras' => NULL,
                'created_at' => '2022-03-14 02:06:38',
                'updated_at' => '2022-03-14 02:06:38',
            ),
            27 => 
            array (
                'id' => 28,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 8,
                'extras' => NULL,
                'created_at' => '2022-03-14 02:06:38',
                'updated_at' => '2022-03-14 02:06:38',
            ),
            28 => 
            array (
                'id' => 29,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $430.50) by %user_name%',
                'user_id' => 0,
                'order_id' => 8,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            29 => 
            array (
                'id' => 30,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 8,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            30 => 
            array (
                'id' => 31,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 8,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            31 => 
            array (
                'id' => 32,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 9,
                'extras' => NULL,
                'created_at' => '2022-03-17 14:06:38',
                'updated_at' => '2022-03-17 14:06:38',
            ),
            32 => 
            array (
                'id' => 33,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 9,
                'extras' => NULL,
                'created_at' => '2022-03-17 14:06:38',
                'updated_at' => '2022-03-17 14:06:38',
            ),
            33 => 
            array (
                'id' => 34,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $1,330.00) by %user_name%',
                'user_id' => 0,
                'order_id' => 9,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            34 => 
            array (
                'id' => 35,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 9,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            35 => 
            array (
                'id' => 36,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 9,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            36 => 
            array (
                'id' => 37,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 10,
                'extras' => NULL,
                'created_at' => '2022-03-12 08:06:38',
                'updated_at' => '2022-03-12 08:06:38',
            ),
            37 => 
            array (
                'id' => 38,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 10,
                'extras' => NULL,
                'created_at' => '2022-03-12 08:06:38',
                'updated_at' => '2022-03-12 08:06:38',
            ),
            38 => 
            array (
                'id' => 39,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 10,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            39 => 
            array (
                'id' => 40,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 10,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            40 => 
            array (
                'id' => 41,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 11,
                'extras' => NULL,
                'created_at' => '2022-03-14 18:06:38',
                'updated_at' => '2022-03-14 18:06:38',
            ),
            41 => 
            array (
                'id' => 42,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 11,
                'extras' => NULL,
                'created_at' => '2022-03-14 18:06:38',
                'updated_at' => '2022-03-14 18:06:38',
            ),
            42 => 
            array (
                'id' => 43,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $240.35) by %user_name%',
                'user_id' => 0,
                'order_id' => 11,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            43 => 
            array (
                'id' => 44,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 11,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            44 => 
            array (
                'id' => 45,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 11,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            45 => 
            array (
                'id' => 46,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 12,
                'extras' => NULL,
                'created_at' => '2022-03-13 02:06:38',
                'updated_at' => '2022-03-13 02:06:38',
            ),
            46 => 
            array (
                'id' => 47,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 12,
                'extras' => NULL,
                'created_at' => '2022-03-13 02:06:38',
                'updated_at' => '2022-03-13 02:06:38',
            ),
            47 => 
            array (
                'id' => 48,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 12,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            48 => 
            array (
                'id' => 49,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 13,
                'extras' => NULL,
                'created_at' => '2022-03-16 14:06:38',
                'updated_at' => '2022-03-16 14:06:38',
            ),
            49 => 
            array (
                'id' => 50,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 13,
                'extras' => NULL,
                'created_at' => '2022-03-16 14:06:38',
                'updated_at' => '2022-03-16 14:06:38',
            ),
            50 => 
            array (
                'id' => 51,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $1,533.90) by %user_name%',
                'user_id' => 0,
                'order_id' => 13,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            51 => 
            array (
                'id' => 52,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 13,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            52 => 
            array (
                'id' => 53,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 13,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            53 => 
            array (
                'id' => 54,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 14,
                'extras' => NULL,
                'created_at' => '2022-03-15 22:06:38',
                'updated_at' => '2022-03-15 22:06:38',
            ),
            54 => 
            array (
                'id' => 55,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 14,
                'extras' => NULL,
                'created_at' => '2022-03-15 22:06:38',
                'updated_at' => '2022-03-15 22:06:38',
            ),
            55 => 
            array (
                'id' => 56,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 14,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            56 => 
            array (
                'id' => 57,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 14,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            57 => 
            array (
                'id' => 58,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 15,
                'extras' => NULL,
                'created_at' => '2022-03-17 02:06:38',
                'updated_at' => '2022-03-17 02:06:38',
            ),
            58 => 
            array (
                'id' => 59,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 15,
                'extras' => NULL,
                'created_at' => '2022-03-17 02:06:38',
                'updated_at' => '2022-03-17 02:06:38',
            ),
            59 => 
            array (
                'id' => 60,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $608.55) by %user_name%',
                'user_id' => 0,
                'order_id' => 15,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            60 => 
            array (
                'id' => 61,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 15,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            61 => 
            array (
                'id' => 62,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 16,
                'extras' => NULL,
                'created_at' => '2022-03-19 18:06:38',
                'updated_at' => '2022-03-19 18:06:38',
            ),
            62 => 
            array (
                'id' => 63,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 16,
                'extras' => NULL,
                'created_at' => '2022-03-19 18:06:38',
                'updated_at' => '2022-03-19 18:06:38',
            ),
            63 => 
            array (
                'id' => 64,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 16,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            64 => 
            array (
                'id' => 65,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 17,
                'extras' => NULL,
                'created_at' => '2022-03-18 14:06:38',
                'updated_at' => '2022-03-18 14:06:38',
            ),
            65 => 
            array (
                'id' => 66,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 17,
                'extras' => NULL,
                'created_at' => '2022-03-18 14:06:38',
                'updated_at' => '2022-03-18 14:06:38',
            ),
            66 => 
            array (
                'id' => 67,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 17,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            67 => 
            array (
                'id' => 68,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 18,
                'extras' => NULL,
                'created_at' => '2022-03-18 08:06:39',
                'updated_at' => '2022-03-18 08:06:39',
            ),
            68 => 
            array (
                'id' => 69,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 18,
                'extras' => NULL,
                'created_at' => '2022-03-18 08:06:39',
                'updated_at' => '2022-03-18 08:06:39',
            ),
            69 => 
            array (
                'id' => 70,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $426.70) by %user_name%',
                'user_id' => 0,
                'order_id' => 18,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            70 => 
            array (
                'id' => 71,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 18,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            71 => 
            array (
                'id' => 72,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'order_id' => 18,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            72 => 
            array (
                'id' => 73,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 19,
                'extras' => NULL,
                'created_at' => '2022-03-20 02:06:39',
                'updated_at' => '2022-03-20 02:06:39',
            ),
            73 => 
            array (
                'id' => 74,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 19,
                'extras' => NULL,
                'created_at' => '2022-03-20 02:06:39',
                'updated_at' => '2022-03-20 02:06:39',
            ),
            74 => 
            array (
                'id' => 75,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $518.83) by %user_name%',
                'user_id' => 0,
                'order_id' => 19,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            75 => 
            array (
                'id' => 76,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 19,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            76 => 
            array (
                'id' => 77,
                'action' => 'create_order_from_seeder',
                'description' => 'Order is created from the checkout page',
                'user_id' => NULL,
                'order_id' => 20,
                'extras' => NULL,
                'created_at' => '2022-03-20 10:06:39',
                'updated_at' => '2022-03-20 10:06:39',
            ),
            77 => 
            array (
                'id' => 78,
                'action' => 'confirm_order',
                'description' => 'Order was verified by %user_name%',
                'user_id' => 0,
                'order_id' => 20,
                'extras' => NULL,
                'created_at' => '2022-03-20 10:06:39',
                'updated_at' => '2022-03-20 10:06:39',
            ),
            78 => 
            array (
                'id' => 79,
                'action' => 'confirm_payment',
            'description' => 'Payment was confirmed (amount $745.90) by %user_name%',
                'user_id' => 0,
                'order_id' => 20,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            79 => 
            array (
                'id' => 80,
                'action' => 'create_shipment',
                'description' => 'Created shipment for order',
                'user_id' => 0,
                'order_id' => 20,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            80 => 
            array (
                'id' => 81,
                'action' => 'update_status',
                'description' => 'Order confirmed by %user_name%',
                'user_id' => 0,
                'order_id' => 5,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            81 => 
            array (
                'id' => 82,
                'action' => 'update_status',
                'description' => 'Order confirmed by %user_name%',
                'user_id' => 0,
                'order_id' => 8,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            82 => 
            array (
                'id' => 83,
                'action' => 'update_status',
                'description' => 'Order confirmed by %user_name%',
                'user_id' => 0,
                'order_id' => 9,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            83 => 
            array (
                'id' => 84,
                'action' => 'update_status',
                'description' => 'Order confirmed by %user_name%',
                'user_id' => 0,
                'order_id' => 11,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            84 => 
            array (
                'id' => 85,
                'action' => 'update_status',
                'description' => 'Order confirmed by %user_name%',
                'user_id' => 0,
                'order_id' => 13,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            85 => 
            array (
                'id' => 86,
                'action' => 'update_status',
                'description' => 'Order confirmed by %user_name%',
                'user_id' => 0,
                'order_id' => 18,
                'extras' => NULL,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
        ));
        
        
    }
}