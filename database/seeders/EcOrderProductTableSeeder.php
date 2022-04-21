<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcOrderProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_order_product')->delete();
        
        \DB::table('ec_order_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'qty' => 1,
                'price' => '406.00',
                'tax_amount' => '40.60',
                'options' => '[]',
                'product_id' => 32,
                'product_name' => 'Smart Home Speaker',
                'weight' => 555.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 1,
                'qty' => 3,
                'price' => '374.00',
                'tax_amount' => '37.40',
                'options' => '[]',
                'product_id' => 52,
                'product_name' => 'Macbook Air 12 inch',
                'weight' => 2334.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 2,
                'qty' => 1,
                'price' => '125.00',
                'tax_amount' => '12.50',
                'options' => '[]',
                'product_id' => 59,
                'product_name' => 'Apple Keyboard',
                'weight' => 510.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 2,
                'qty' => 1,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 60,
                'product_name' => 'MacSafe 80W',
                'weight' => 747.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => 2,
                'qty' => 3,
                'price' => '119.00',
                'tax_amount' => '11.90',
                'options' => '[]',
                'product_id' => 80,
                'product_name' => 'Historic Alarm Clock',
                'weight' => 1989.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => 2,
                'qty' => 2,
                'price' => '50.00',
                'tax_amount' => '5.00',
                'options' => '[]',
                'product_id' => 105,
                'product_name' => 'Red & Black Headphone',
                'weight' => 1610.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            6 => 
            array (
                'id' => 7,
                'order_id' => 3,
                'qty' => 1,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 61,
                'product_name' => 'MacSafe 80W',
                'weight' => 747.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            7 => 
            array (
                'id' => 8,
                'order_id' => 3,
                'qty' => 1,
                'price' => '115.00',
                'tax_amount' => '11.50',
                'options' => '[]',
                'product_id' => 85,
                'product_name' => 'Black Glasses',
                'weight' => 847.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            8 => 
            array (
                'id' => 9,
                'order_id' => 3,
                'qty' => 2,
                'price' => '111.00',
                'tax_amount' => '11.10',
                'options' => '[]',
                'product_id' => 88,
                'product_name' => 'Gaming Keyboard',
                'weight' => 1398.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            9 => 
            array (
                'id' => 10,
                'order_id' => 4,
                'qty' => 3,
                'price' => '125.00',
                'tax_amount' => '12.50',
                'options' => '[]',
                'product_id' => 54,
                'product_name' => 'Apple Watch Serial 7',
                'weight' => 2322.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            10 => 
            array (
                'id' => 11,
                'order_id' => 4,
                'qty' => 2,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 60,
                'product_name' => 'MacSafe 80W',
                'weight' => 1494.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            11 => 
            array (
                'id' => 12,
                'order_id' => 5,
                'qty' => 2,
                'price' => '406.00',
                'tax_amount' => '40.60',
                'options' => '[]',
                'product_id' => 33,
                'product_name' => 'Smart Home Speaker',
                'weight' => 1110.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            12 => 
            array (
                'id' => 13,
                'order_id' => 5,
                'qty' => 1,
                'price' => '309.00',
                'tax_amount' => '30.90',
                'options' => '[]',
                'product_id' => 37,
                'product_name' => 'Boxed - Bluetooth Headphone',
                'weight' => 882.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            13 => 
            array (
                'id' => 14,
                'order_id' => 5,
                'qty' => 3,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 64,
                'product_name' => 'Hand playstation',
                'weight' => 1845.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            14 => 
            array (
                'id' => 15,
                'order_id' => 6,
                'qty' => 2,
                'price' => '125.00',
                'tax_amount' => '12.50',
                'options' => '[]',
                'product_id' => 58,
                'product_name' => 'Apple Keyboard',
                'weight' => 1020.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            15 => 
            array (
                'id' => 16,
                'order_id' => 6,
                'qty' => 3,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 74,
                'product_name' => 'Leather Watch Band Serial 3',
                'weight' => 1557.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            16 => 
            array (
                'id' => 17,
                'order_id' => 6,
                'qty' => 3,
                'price' => '111.00',
                'tax_amount' => '11.10',
                'options' => '[]',
                'product_id' => 89,
                'product_name' => 'Gaming Keyboard',
                'weight' => 2097.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            17 => 
            array (
                'id' => 18,
                'order_id' => 7,
                'qty' => 1,
                'price' => '374.00',
                'tax_amount' => '37.40',
                'options' => '[]',
                'product_id' => 50,
                'product_name' => 'Macbook Air 12 inch',
                'weight' => 778.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            18 => 
            array (
                'id' => 19,
                'order_id' => 7,
                'qty' => 1,
                'price' => '115.00',
                'tax_amount' => '11.50',
                'options' => '[]',
                'product_id' => 82,
                'product_name' => 'Black Glasses',
                'weight' => 847.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            19 => 
            array (
                'id' => 20,
                'order_id' => 7,
                'qty' => 1,
                'price' => '111.00',
                'tax_amount' => '11.10',
                'options' => '[]',
                'product_id' => 88,
                'product_name' => 'Gaming Keyboard',
                'weight' => 699.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            20 => 
            array (
                'id' => 21,
                'order_id' => 8,
                'qty' => 2,
                'price' => '44.00',
                'tax_amount' => '4.40',
                'options' => '[]',
                'product_id' => 41,
                'product_name' => 'Camera Hikvision HK-35VS8',
                'weight' => 1458.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            21 => 
            array (
                'id' => 22,
                'order_id' => 8,
                'qty' => 2,
                'price' => '111.00',
                'tax_amount' => '11.10',
                'options' => '[]',
                'product_id' => 88,
                'product_name' => 'Gaming Keyboard',
                'weight' => 1398.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            22 => 
            array (
                'id' => 23,
                'order_id' => 8,
                'qty' => 2,
                'price' => '50.00',
                'tax_amount' => '5.00',
                'options' => '[]',
                'product_id' => 109,
                'product_name' => 'Samsung Smart TV',
                'weight' => 1422.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            23 => 
            array (
                'id' => 24,
                'order_id' => 9,
                'qty' => 3,
                'price' => '309.00',
                'tax_amount' => '30.90',
                'options' => '[]',
                'product_id' => 37,
                'product_name' => 'Boxed - Bluetooth Headphone',
                'weight' => 2646.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            24 => 
            array (
                'id' => 25,
                'order_id' => 9,
                'qty' => 1,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 70,
                'product_name' => 'Cool Smart Watches',
                'weight' => 594.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            25 => 
            array (
                'id' => 26,
                'order_id' => 9,
                'qty' => 2,
                'price' => '118.00',
                'tax_amount' => '11.80',
                'options' => '[]',
                'product_id' => 72,
                'product_name' => 'Black Smart Watches',
                'weight' => 1392.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            26 => 
            array (
                'id' => 27,
                'order_id' => 10,
                'qty' => 2,
                'price' => '121.00',
                'tax_amount' => '12.10',
                'options' => '[]',
                'product_id' => 86,
                'product_name' => 'Phillips Mouse',
                'weight' => 1586.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            27 => 
            array (
                'id' => 28,
                'order_id' => 10,
                'qty' => 1,
                'price' => '20.00',
                'tax_amount' => '2.00',
                'options' => '[]',
                'product_id' => 98,
                'product_name' => 'Beat Headphone',
                'weight' => 747.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            28 => 
            array (
                'id' => 29,
                'order_id' => 11,
                'qty' => 1,
                'price' => '128.00',
                'tax_amount' => '12.80',
                'options' => '[]',
                'product_id' => 77,
                'product_name' => 'Macbook Pro 2015 13 inch',
                'weight' => 879.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            29 => 
            array (
                'id' => 30,
                'order_id' => 11,
                'qty' => 1,
                'price' => '40.50',
                'tax_amount' => '4.05',
                'options' => '[]',
                'product_id' => 95,
                'product_name' => 'Smart Watches',
                'weight' => 827.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            30 => 
            array (
                'id' => 31,
                'order_id' => 11,
                'qty' => 1,
                'price' => '50.00',
                'tax_amount' => '5.00',
                'options' => '[]',
                'product_id' => 105,
                'product_name' => 'Red & Black Headphone',
                'weight' => 805.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            31 => 
            array (
                'id' => 32,
                'order_id' => 12,
                'qty' => 2,
                'price' => '406.00',
                'tax_amount' => '40.60',
                'options' => '[]',
                'product_id' => 33,
                'product_name' => 'Smart Home Speaker',
                'weight' => 1110.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            32 => 
            array (
                'id' => 33,
                'order_id' => 12,
                'qty' => 3,
                'price' => '125.00',
                'tax_amount' => '12.50',
                'options' => '[]',
                'product_id' => 57,
                'product_name' => 'Apple Keyboard',
                'weight' => 1530.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            33 => 
            array (
                'id' => 34,
                'order_id' => 12,
                'qty' => 3,
                'price' => '119.00',
                'tax_amount' => '11.90',
                'options' => '[]',
                'product_id' => 80,
                'product_name' => 'Historic Alarm Clock',
                'weight' => 1989.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            34 => 
            array (
                'id' => 35,
                'order_id' => 12,
                'qty' => 3,
                'price' => '115.00',
                'tax_amount' => '11.50',
                'options' => '[]',
                'product_id' => 85,
                'product_name' => 'Black Glasses',
                'weight' => 2541.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            35 => 
            array (
                'id' => 36,
                'order_id' => 13,
                'qty' => 3,
                'price' => '368.00',
                'tax_amount' => '36.80',
                'options' => '[]',
                'product_id' => 34,
                'product_name' => 'Headphone Ultra Bass',
                'weight' => 2202.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            36 => 
            array (
                'id' => 37,
                'order_id' => 13,
                'qty' => 1,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 69,
                'product_name' => 'Cool Smart Watches',
                'weight' => 594.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            37 => 
            array (
                'id' => 38,
                'order_id' => 13,
                'qty' => 2,
                'price' => '128.00',
                'tax_amount' => '12.80',
                'options' => '[]',
                'product_id' => 79,
                'product_name' => 'Macbook Pro 2015 13 inch',
                'weight' => 1758.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            38 => 
            array (
                'id' => 39,
                'order_id' => 14,
                'qty' => 2,
                'price' => '125.00',
                'tax_amount' => '12.50',
                'options' => '[]',
                'product_id' => 53,
                'product_name' => 'Apple Watch Serial 7',
                'weight' => 1548.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            39 => 
            array (
                'id' => 40,
                'order_id' => 14,
                'qty' => 2,
                'price' => '20.00',
                'tax_amount' => '2.00',
                'options' => '[]',
                'product_id' => 100,
                'product_name' => 'Beat Headphone',
                'weight' => 1494.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            40 => 
            array (
                'id' => 41,
                'order_id' => 15,
                'qty' => 2,
                'price' => '112.00',
                'tax_amount' => '11.20',
                'options' => '[]',
                'product_id' => 66,
                'product_name' => 'Apple Airpods Serial 3',
                'weight' => 1564.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            41 => 
            array (
                'id' => 42,
                'order_id' => 15,
                'qty' => 2,
                'price' => '118.00',
                'tax_amount' => '11.80',
                'options' => '[]',
                'product_id' => 72,
                'product_name' => 'Black Smart Watches',
                'weight' => 1392.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            42 => 
            array (
                'id' => 43,
                'order_id' => 15,
                'qty' => 3,
                'price' => '40.50',
                'tax_amount' => '4.05',
                'options' => '[]',
                'product_id' => 93,
                'product_name' => 'Smart Watches',
                'weight' => 2481.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            43 => 
            array (
                'id' => 44,
                'order_id' => 16,
                'qty' => 2,
                'price' => '125.00',
                'tax_amount' => '12.50',
                'options' => '[]',
                'product_id' => 54,
                'product_name' => 'Apple Watch Serial 7',
                'weight' => 1548.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            44 => 
            array (
                'id' => 45,
                'order_id' => 16,
                'qty' => 1,
                'price' => '20.00',
                'tax_amount' => '2.00',
                'options' => '[]',
                'product_id' => 98,
                'product_name' => 'Beat Headphone',
                'weight' => 747.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            45 => 
            array (
                'id' => 46,
                'order_id' => 17,
                'qty' => 3,
                'price' => '53.00',
                'tax_amount' => '5.30',
                'options' => '[]',
                'product_id' => 44,
                'product_name' => 'Camera Samsung SS-24',
                'weight' => 1740.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            46 => 
            array (
                'id' => 47,
                'order_id' => 17,
                'qty' => 3,
                'price' => '124.00',
                'tax_amount' => '12.40',
                'options' => '[]',
                'product_id' => 48,
                'product_name' => 'Apple iPhone 13 Plus',
                'weight' => 1509.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            47 => 
            array (
                'id' => 48,
                'order_id' => 17,
                'qty' => 1,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 73,
                'product_name' => 'Leather Watch Band Serial 3',
                'weight' => 519.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            48 => 
            array (
                'id' => 49,
                'order_id' => 17,
                'qty' => 3,
                'price' => '128.00',
                'tax_amount' => '12.80',
                'options' => '[]',
                'product_id' => 79,
                'product_name' => 'Macbook Pro 2015 13 inch',
                'weight' => 2637.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
            ),
            49 => 
            array (
                'id' => 50,
                'order_id' => 18,
                'qty' => 2,
                'price' => '53.00',
                'tax_amount' => '5.30',
                'options' => '[]',
                'product_id' => 44,
                'product_name' => 'Camera Samsung SS-24',
                'weight' => 1160.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            50 => 
            array (
                'id' => 51,
                'order_id' => 18,
                'qty' => 2,
                'price' => '124.00',
                'tax_amount' => '12.40',
                'options' => '[]',
                'product_id' => 48,
                'product_name' => 'Apple iPhone 13 Plus',
                'weight' => 1006.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            51 => 
            array (
                'id' => 52,
                'order_id' => 18,
                'qty' => 1,
                'price' => '50.00',
                'tax_amount' => '5.00',
                'options' => '[]',
                'product_id' => 103,
                'product_name' => 'Red & Black Headphone',
                'weight' => 805.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            52 => 
            array (
                'id' => 53,
                'order_id' => 19,
                'qty' => 3,
                'price' => '113.00',
                'tax_amount' => '11.30',
                'options' => '[]',
                'product_id' => 60,
                'product_name' => 'MacSafe 80W',
                'weight' => 2241.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            53 => 
            array (
                'id' => 54,
                'order_id' => 19,
                'qty' => 2,
                'price' => '80.25',
                'tax_amount' => '8.03',
                'options' => '[]',
                'product_id' => 92,
                'product_name' => 'Dual Camera 20MP',
                'weight' => 1706.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            54 => 
            array (
                'id' => 55,
                'order_id' => 20,
                'qty' => 1,
                'price' => '406.00',
                'tax_amount' => '40.60',
                'options' => '[]',
                'product_id' => 33,
                'product_name' => 'Smart Home Speaker',
                'weight' => 555.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            55 => 
            array (
                'id' => 56,
                'order_id' => 20,
                'qty' => 3,
                'price' => '83.00',
                'tax_amount' => '8.30',
                'options' => '[]',
                'product_id' => 39,
                'product_name' => 'Chikie - Bluetooth Speaker',
                'weight' => 1887.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
            56 => 
            array (
                'id' => 57,
                'order_id' => 20,
                'qty' => 2,
                'price' => '20.00',
                'tax_amount' => '2.00',
                'options' => '[]',
                'product_id' => 99,
                'product_name' => 'Beat Headphone',
                'weight' => 1494.0,
                'restock_quantity' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
            ),
        ));
        
        
    }
}