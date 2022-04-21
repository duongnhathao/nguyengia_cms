<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2013_04_09_032329_create_base_tables',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2013_04_09_062329_create_revisions_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_06_10_230148_create_acl_tables',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_06_14_230857_create_menus_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_06_28_221418_create_pages_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_10_05_074239_create_setting_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_11_28_032840_create_dashboard_widget_tables',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_12_16_084601_create_widgets_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2017_05_09_070343_create_media_tables',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2017_11_03_070450_create_slug_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2019_01_05_053554_create_jobs_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2019_05_03_000001_create_customer_columns',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2019_05_03_000002_create_subscriptions_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2019_05_03_000003_create_subscription_items_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2021_12_26_024330_update_theme_options_social_links',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2020_11_18_150916_ads_create_ads_table',
                'batch' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2021_12_02_035301_add_ads_translations_table',
                'batch' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2015_06_29_025744_create_audit_history',
                'batch' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2015_06_18_033822_create_blog_table',
                'batch' => 4,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2021_02_16_092633_remove_default_value_for_author_type',
                'batch' => 4,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2021_12_03_030600_create_blog_translations',
                'batch' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2016_06_17_091537_create_contacts_table',
                'batch' => 5,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2020_03_05_041139_create_ecommerce_tables',
                'batch' => 6,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2020_09_22_135635_update_taxes_table',
                'batch' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2020_09_29_101006_add_views_into_ec_products_table',
                'batch' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2020_10_01_152311_make_column_image_in_product_attributes_table_nullable',
                'batch' => 6,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2020_10_06_073439_improve_ecommerce_database',
                'batch' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2020_11_01_040415_update_table_ec_order_addresses',
                'batch' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2020_11_04_091510_make_column_phone_in_order_addresses_nullable',
                'batch' => 6,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2020_11_30_015801_update_table_ec_product_categories',
                'batch' => 6,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2021_01_01_044147_ecommerce_create_flash_sale_table',
                'batch' => 6,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2021_01_17_082713_add_column_is_featured_to_product_collections_table',
                'batch' => 6,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2021_01_18_024333_add_zip_code_into_table_customer_addresses',
                'batch' => 6,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2021_02_18_073505_update_table_ec_reviews',
                'batch' => 6,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2021_03_10_024419_add_column_confirmed_at_to_table_ec_customers',
                'batch' => 6,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2021_03_10_025153_change_column_tax_amount',
                'batch' => 6,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2021_03_20_033103_add_column_availability_to_table_ec_products',
                'batch' => 6,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2021_04_28_074008_ecommerce_create_product_label_table',
                'batch' => 6,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2021_05_31_173037_ecommerce_create_ec_products_translations',
                'batch' => 6,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2021_06_28_153141_correct_slugs_data',
                'batch' => 6,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2021_08_17_105016_remove_column_currency_id_in_some_tables',
                'batch' => 6,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2021_08_30_142128_add_images_column_to_ec_reviews_table',
                'batch' => 6,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2021_09_01_115151_remove_unused_fields_in_ec_products',
                'batch' => 6,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2021_10_04_030050_add_column_created_by_to_table_ec_products',
                'batch' => 6,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2021_10_05_122616_add_status_column_to_ec_customers_table',
                'batch' => 6,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2021_11_03_025806_nullable_phone_number_in_ec_customer_addresses',
                'batch' => 6,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2021_11_23_071403_correct_languages_for_product_variations',
                'batch' => 6,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2021_11_28_031808_add_product_tags_translations',
                'batch' => 6,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2021_12_01_031123_add_featured_image_to_ec_products',
                'batch' => 6,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2022_01_01_033107_update_table_ec_shipments',
                'batch' => 6,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2018_07_09_221238_create_faq_table',
                'batch' => 7,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2021_12_03_082134_create_faq_translations',
                'batch' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2016_10_03_032336_create_languages_table',
                'batch' => 8,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2021_10_25_021023_fix-priority-load-for-language-advanced',
                'batch' => 9,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2021_12_03_075608_create_page_translations',
                'batch' => 9,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2017_10_24_154832_create_newsletter_table',
                'batch' => 10,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2017_05_18_080441_create_payment_tables',
                'batch' => 11,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2021_03_27_144913_add_customer_type_into_table_payments',
                'batch' => 11,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2021_05_24_034720_make_column_currency_nullable',
                'batch' => 11,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2021_08_09_161302_add_metadata_column_to_payments_table',
                'batch' => 11,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2021_10_19_020859_update_metadata_field',
                'batch' => 11,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2017_07_11_140018_create_simple_slider_table',
                'batch' => 12,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2018_07_09_214610_create_testimonial_table',
                'batch' => 13,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2021_12_03_083642_create_testimonials_translations',
                'batch' => 13,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2016_10_07_193005_create_translations_table',
                'batch' => 14,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2022_02_16_042457_improve_product_attribute_sets',
                'batch' => 15,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2019_11_18_061011_create_country_table',
                'batch' => 16,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2021_12_03_084118_create_location_translations',
                'batch' => 16,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2021_12_03_094518_migrate_old_location_data',
                'batch' => 16,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2021_12_10_034440_switch_plugin_location_to_use_language_advanced',
                'batch' => 16,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2022_01_16_085908_improve_plugin_location',
                'batch' => 16,
            ),
        ));
        
        
    }
}