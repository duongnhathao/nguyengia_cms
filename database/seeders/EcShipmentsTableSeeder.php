<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcShipmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_shipments')->delete();
        
        \DB::table('ec_shipments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'user_id' => NULL,
                'weight' => 2889.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0094237535',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-21 14:06:38',
                'date_shipped' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 2,
                'user_id' => NULL,
                'weight' => 4856.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '735.70',
                'cod_status' => 'pending',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0082347602',
                'shipping_company_name' => 'FastShipping',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-27 14:06:38',
                'date_shipped' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 3,
                'user_id' => NULL,
                'weight' => 2992.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0087959546',
                'shipping_company_name' => 'GHN',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-23 14:06:38',
                'date_shipped' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 4,
                'user_id' => NULL,
                'weight' => 3816.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '624.80',
                'cod_status' => 'pending',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0098679943',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-26 14:06:38',
                'date_shipped' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => 5,
                'user_id' => NULL,
                'weight' => 3837.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0053865125',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-21 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => 6,
                'user_id' => NULL,
                'weight' => 4674.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0011944970',
                'shipping_company_name' => 'FastShipping',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-26 14:06:38',
                'date_shipped' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'order_id' => 7,
                'user_id' => NULL,
                'weight' => 2324.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0052905520',
                'shipping_company_name' => 'GHN',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-22 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            7 => 
            array (
                'id' => 8,
                'order_id' => 8,
                'user_id' => NULL,
                'weight' => 4278.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0047448386',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-29 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            8 => 
            array (
                'id' => 9,
                'order_id' => 9,
                'user_id' => NULL,
                'weight' => 4632.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0068299727',
                'shipping_company_name' => 'FastShipping',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-23 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            9 => 
            array (
                'id' => 10,
                'order_id' => 10,
                'user_id' => NULL,
                'weight' => 2333.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '276.10',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0070209498',
                'shipping_company_name' => 'GHN',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-26 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            10 => 
            array (
                'id' => 11,
                'order_id' => 11,
                'user_id' => NULL,
                'weight' => 2511.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0043962070',
                'shipping_company_name' => 'DHL',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-25 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            11 => 
            array (
                'id' => 12,
                'order_id' => 12,
                'user_id' => NULL,
                'weight' => 7170.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '1965.50',
                'cod_status' => 'pending',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0020905772',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-23 14:06:38',
                'date_shipped' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'order_id' => 13,
                'user_id' => NULL,
                'weight' => 4554.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0081754603',
                'shipping_company_name' => 'FastShipping',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-30 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            13 => 
            array (
                'id' => 14,
                'order_id' => 14,
                'user_id' => NULL,
                'weight' => 3042.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '304.50',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0055731477',
                'shipping_company_name' => 'GHN',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-26 14:06:38',
                'date_shipped' => '2022-03-20 14:06:38',
            ),
            14 => 
            array (
                'id' => 15,
                'order_id' => 15,
                'user_id' => NULL,
                'weight' => 5437.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD001375024',
                'shipping_company_name' => 'GHN',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-26 14:06:38',
                'date_shipped' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'order_id' => 16,
                'user_id' => NULL,
                'weight' => 2295.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0089474808',
                'shipping_company_name' => 'FastShipping',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-28 14:06:38',
                'date_shipped' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'order_id' => 17,
                'user_id' => NULL,
                'weight' => 6405.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:38',
                'updated_at' => '2022-03-20 14:06:38',
                'tracking_id' => 'JJD0048849281',
                'shipping_company_name' => 'DHL',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-25 14:06:38',
                'date_shipped' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'order_id' => 18,
                'user_id' => NULL,
                'weight' => 2971.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'delivered',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
                'tracking_id' => 'JJD0087305080',
                'shipping_company_name' => 'GHN',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-27 14:06:39',
                'date_shipped' => '2022-03-20 14:06:39',
            ),
            18 => 
            array (
                'id' => 19,
                'order_id' => 19,
                'user_id' => NULL,
                'weight' => 3947.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
                'tracking_id' => 'JJD0098234577',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-30 14:06:39',
                'date_shipped' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'order_id' => 20,
                'user_id' => NULL,
                'weight' => 3936.0,
                'shipment_id' => NULL,
                'note' => '',
                'status' => 'approved',
                'cod_amount' => '0.00',
                'cod_status' => 'completed',
                'cross_checking_status' => 'pending',
                'price' => '0.00',
                'store_id' => 0,
                'created_at' => '2022-03-20 14:06:39',
                'updated_at' => '2022-03-20 14:06:39',
                'tracking_id' => 'JJD0067944993',
                'shipping_company_name' => 'AliExpress',
                'tracking_link' => 'https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference',
                'estimate_date_shipped' => '2022-03-30 14:06:39',
                'date_shipped' => NULL,
            ),
        ));
        
        
    }
}