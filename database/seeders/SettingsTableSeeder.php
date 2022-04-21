<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'activated_plugins',
                'value' => '["language","language-advanced","ads","analytics","audit-log","backup","blog","captcha","contact","cookie-consent","ecommerce","faq","newsletter","payment","paystack","razorpay","simple-slider","social-login","sslcommerz","testimonial","mollie","location"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'payment_cod_status',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'payment_bank_transfer_status',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'language_hide_default',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'language_switcher_display',
                'value' => 'dropdown',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'language_display',
                'value' => 'all',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'language_hide_languages',
                'value' => '[]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'media_random_hash',
                'value' => 'ba362a7282ed7e9a37b747a1b63459b8',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'permalink-botble-blog-models-post',
                'value' => 'news',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'permalink-botble-blog-models-category',
                'value' => 'news',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'permalink-botble-blog-models-tag',
                'value' => 'tags',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'payment_cod_description',
            'value' => 'Please pay money directly to the postman, if you choose cash on delivery method (COD).',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'payment_bank_transfer_description',
                'value' => 'Please send money to our bank account: ACB - 1990 404 19.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'plugins_ecommerce_customer_new_order_status',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'plugins_ecommerce_admin_new_order_status',
                'value' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'key' => 'New York',
                'value' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 24,
                'key' => 'ecommerce_store_name',
                'value' => 'Shopwise',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 25,
                'key' => 'ecommerce_store_phone',
                'value' => '123-456-7890',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 26,
                'key' => 'ecommerce_store_address',
                'value' => '123 Street, Old Trafford',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 27,
                'key' => 'ecommerce_store_state',
                'value' => 'New York',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 28,
                'key' => 'ecommerce_store_city',
                'value' => 'New York',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'key' => 'ecommerce_store_country',
                'value' => 'US',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 30,
                'key' => 'admin_logo',
                'value' => 'general/logo-light.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 31,
                'key' => 'admin_favicon',
                'value' => 'general/favicon.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 32,
                'key' => 'theme',
                'value' => 'shopwise',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 33,
                'key' => 'theme-shopwise-site_title',
                'value' => 'Shopwise - Laravel Ecommerce system',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 34,
                'key' => 'theme-shopwise-copyright',
                'value' => '© 2022 Botble Technologies. All Rights Reserved.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 35,
                'key' => 'theme-shopwise-favicon',
                'value' => 'general/favicon.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 36,
                'key' => 'theme-shopwise-logo',
                'value' => 'general/logo.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 37,
                'key' => 'theme-shopwise-logo_footer',
                'value' => 'general/logo-light.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 38,
                'key' => 'theme-shopwise-address',
                'value' => '123 Street, Old Trafford, NewYork, USA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 39,
                'key' => 'theme-shopwise-hotline',
                'value' => '123-456-7890',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 40,
                'key' => 'theme-shopwise-email',
                'value' => 'info@sitename.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 41,
                'key' => 'theme-shopwise-payment_methods',
                'value' => '["general\\/visa.png","general\\/paypal.png","general\\/master-card.png","general\\/discover.png","general\\/american-express.png"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 42,
                'key' => 'theme-shopwise-newsletter_image',
                'value' => 'general/newsletter.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 43,
                'key' => 'theme-shopwise-homepage_id',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 44,
                'key' => 'theme-shopwise-blog_page_id',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 45,
                'key' => 'theme-shopwise-cookie_consent_message',
                'value' => 'Your experience on this site will be improved by allowing cookies ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 46,
                'key' => 'theme-shopwise-cookie_consent_learn_more_url',
                'value' => 'http://shopwise.test/cookie-policy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 47,
                'key' => 'theme-shopwise-cookie_consent_learn_more_text',
                'value' => 'Cookie Policy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 48,
                'key' => 'theme-shopwise-about-us',
                'value' => 'If you are going to use of Lorem Ipsum need to be sure there isn\'t hidden of text',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 49,
                'key' => 'theme-shopwise-vi-primary_font',
                'value' => 'Roboto Condensed',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 50,
                'key' => 'theme-shopwise-vi-copyright',
                'value' => '© 2021 Botble Technologies. Tất cả quyền đã được bảo hộ.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 51,
                'key' => 'theme-shopwise-vi-cookie_consent_message',
                'value' => 'Trải nghiệm của bạn trên trang web này sẽ được cải thiện bằng cách cho phép cookie ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 52,
                'key' => 'theme-shopwise-vi-cookie_consent_learn_more_url',
                'value' => 'http://shopwise.test/cookie-policy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 53,
                'key' => 'theme-shopwise-vi-cookie_consent_learn_more_text',
                'value' => 'Chính sách cookie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 54,
                'key' => 'theme-shopwise-vi-homepage_id',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 55,
                'key' => 'theme-shopwise-vi-blog_page_id',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 56,
                'key' => 'theme-shopwise-social_links',
                'value' => '[[{"key":"social-name","value":"Facebook"},{"key":"social-icon","value":"ion-social-facebook"},{"key":"social-url","value":""},{"key":"social-color","value":"#3b5998"}],[{"key":"social-name","value":"Twitter"},{"key":"social-icon","value":"ion-social-twitter"},{"key":"social-url","value":""},{"key":"social-color","value":"#00acee"}],[{"key":"social-name","value":"Youtube"},{"key":"social-icon","value":"ion-social-youtube"},{"key":"social-url","value":""},{"key":"social-color","value":"#c4302b"}],[{"key":"social-name","value":"Instagram"},{"key":"social-icon","value":"ion-social-instagram"},{"key":"social-url","value":""},{"key":"social-color","value":"#3f729b"}]]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}