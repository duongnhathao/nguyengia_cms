<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcShipmentHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_shipment_histories')->delete();
        
        \DB::table('ec_shipment_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 1,
                'order_id' => 1,
                'created_at' => '2022-03-15 14:06:38',
                'updated_at' => '2022-03-15 14:06:38',
            ),
            1 => 
            array (
                'id' => 2,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 1,
                'order_id' => 1,
                'created_at' => '2022-03-18 22:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            2 => 
            array (
                'id' => 3,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 2,
                'order_id' => 2,
                'created_at' => '2022-03-06 08:06:38',
                'updated_at' => '2022-03-06 08:06:38',
            ),
            3 => 
            array (
                'id' => 4,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 2,
                'order_id' => 2,
                'created_at' => '2022-03-19 00:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            4 => 
            array (
                'id' => 5,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 3,
                'order_id' => 3,
                'created_at' => '2022-03-19 02:06:38',
                'updated_at' => '2022-03-19 02:06:38',
            ),
            5 => 
            array (
                'id' => 6,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 3,
                'order_id' => 3,
                'created_at' => '2022-03-19 02:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            6 => 
            array (
                'id' => 7,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 4,
                'order_id' => 4,
                'created_at' => '2022-03-17 18:06:38',
                'updated_at' => '2022-03-17 18:06:38',
            ),
            7 => 
            array (
                'id' => 8,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 4,
                'order_id' => 4,
                'created_at' => '2022-03-19 04:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            8 => 
            array (
                'id' => 9,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 5,
                'order_id' => 5,
                'created_at' => '2022-03-07 06:06:38',
                'updated_at' => '2022-03-07 06:06:38',
            ),
            9 => 
            array (
                'id' => 10,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 5,
                'order_id' => 5,
                'created_at' => '2022-03-19 06:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            10 => 
            array (
                'id' => 11,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 5,
                'order_id' => 5,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            11 => 
            array (
                'id' => 12,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 6,
                'order_id' => 6,
                'created_at' => '2022-03-14 08:06:38',
                'updated_at' => '2022-03-14 08:06:38',
            ),
            12 => 
            array (
                'id' => 13,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 6,
                'order_id' => 6,
                'created_at' => '2022-03-19 08:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            13 => 
            array (
                'id' => 14,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 7,
                'order_id' => 7,
                'created_at' => '2022-03-11 06:06:38',
                'updated_at' => '2022-03-11 06:06:38',
            ),
            14 => 
            array (
                'id' => 15,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 7,
                'order_id' => 7,
                'created_at' => '2022-03-19 10:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            15 => 
            array (
                'id' => 16,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 7,
                'order_id' => 7,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            16 => 
            array (
                'id' => 17,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 8,
                'order_id' => 8,
                'created_at' => '2022-03-14 02:06:38',
                'updated_at' => '2022-03-14 02:06:38',
            ),
            17 => 
            array (
                'id' => 18,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 8,
                'order_id' => 8,
                'created_at' => '2022-03-19 12:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            18 => 
            array (
                'id' => 19,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 8,
                'order_id' => 8,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            19 => 
            array (
                'id' => 20,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 9,
                'order_id' => 9,
                'created_at' => '2022-03-17 14:06:38',
                'updated_at' => '2022-03-17 14:06:38',
            ),
            20 => 
            array (
                'id' => 21,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 9,
                'order_id' => 9,
                'created_at' => '2022-03-19 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            21 => 
            array (
                'id' => 22,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 9,
                'order_id' => 9,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            22 => 
            array (
                'id' => 23,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 10,
                'order_id' => 10,
                'created_at' => '2022-03-12 08:06:38',
                'updated_at' => '2022-03-12 08:06:38',
            ),
            23 => 
            array (
                'id' => 24,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 10,
                'order_id' => 10,
                'created_at' => '2022-03-19 16:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            24 => 
            array (
                'id' => 25,
                'action' => 'update_cod_status',
                'description' => 'Updated COD status to Completed . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 10,
                'order_id' => 10,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            25 => 
            array (
                'id' => 26,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 10,
                'order_id' => 10,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            26 => 
            array (
                'id' => 27,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 11,
                'order_id' => 11,
                'created_at' => '2022-03-14 18:06:38',
                'updated_at' => '2022-03-14 18:06:38',
            ),
            27 => 
            array (
                'id' => 28,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 11,
                'order_id' => 11,
                'created_at' => '2022-03-19 18:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            28 => 
            array (
                'id' => 29,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 11,
                'order_id' => 11,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            29 => 
            array (
                'id' => 30,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 12,
                'order_id' => 12,
                'created_at' => '2022-03-13 02:06:38',
                'updated_at' => '2022-03-13 02:06:38',
            ),
            30 => 
            array (
                'id' => 31,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 12,
                'order_id' => 12,
                'created_at' => '2022-03-19 20:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            31 => 
            array (
                'id' => 32,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 13,
                'order_id' => 13,
                'created_at' => '2022-03-16 14:06:38',
                'updated_at' => '2022-03-16 14:06:38',
            ),
            32 => 
            array (
                'id' => 33,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 13,
                'order_id' => 13,
                'created_at' => '2022-03-19 22:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            33 => 
            array (
                'id' => 34,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 13,
                'order_id' => 13,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            34 => 
            array (
                'id' => 35,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 14,
                'order_id' => 14,
                'created_at' => '2022-03-15 22:06:38',
                'updated_at' => '2022-03-15 22:06:38',
            ),
            35 => 
            array (
                'id' => 36,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 14,
                'order_id' => 14,
                'created_at' => '2022-03-20 00:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            36 => 
            array (
                'id' => 37,
                'action' => 'update_cod_status',
                'description' => 'Updated COD status to Completed . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 14,
                'order_id' => 14,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            37 => 
            array (
                'id' => 38,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 14,
                'order_id' => 14,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            38 => 
            array (
                'id' => 39,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 15,
                'order_id' => 15,
                'created_at' => '2022-03-17 02:06:38',
                'updated_at' => '2022-03-17 02:06:38',
            ),
            39 => 
            array (
                'id' => 40,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 15,
                'order_id' => 15,
                'created_at' => '2022-03-20 02:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            40 => 
            array (
                'id' => 41,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 16,
                'order_id' => 16,
                'created_at' => '2022-03-19 18:06:38',
                'updated_at' => '2022-03-19 18:06:38',
            ),
            41 => 
            array (
                'id' => 42,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 16,
                'order_id' => 16,
                'created_at' => '2022-03-20 04:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            42 => 
            array (
                'id' => 43,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 17,
                'order_id' => 17,
                'created_at' => '2022-03-18 14:06:38',
                'updated_at' => '2022-03-18 14:06:38',
            ),
            43 => 
            array (
                'id' => 44,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 17,
                'order_id' => 17,
                'created_at' => '2022-03-20 06:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            44 => 
            array (
                'id' => 45,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 18,
                'order_id' => 18,
                'created_at' => '2022-03-18 08:06:39',
                'updated_at' => '2022-03-18 08:06:39',
            ),
            45 => 
            array (
                'id' => 46,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 18,
                'order_id' => 18,
                'created_at' => '2022-03-20 08:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            46 => 
            array (
                'id' => 47,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Delivered . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 18,
                'order_id' => 18,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            47 => 
            array (
                'id' => 48,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 19,
                'order_id' => 19,
                'created_at' => '2022-03-20 02:06:39',
                'updated_at' => '2022-03-20 02:06:39',
            ),
            48 => 
            array (
                'id' => 49,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 19,
                'order_id' => 19,
                'created_at' => '2022-03-20 10:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            49 => 
            array (
                'id' => 50,
                'action' => 'create_from_order',
                'description' => 'Shipping was created from order %order_id%',
                'user_id' => 0,
                'shipment_id' => 20,
                'order_id' => 20,
                'created_at' => '2022-03-20 10:06:39',
                'updated_at' => '2022-03-20 10:06:39',
            ),
            50 => 
            array (
                'id' => 51,
                'action' => 'update_status',
                'description' => 'Changed status of shipping to : Approved . Updated by: %user_name%',
                'user_id' => 0,
                'shipment_id' => 20,
                'order_id' => 20,
                'created_at' => '2022-03-20 12:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
        ));
        
        
    }
}