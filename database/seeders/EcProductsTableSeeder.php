<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EcProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ec_products')->delete();
        
        \DB::table('ec_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Smart Home Speaker',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/1.jpg","products\\/1-1.jpg","products\\/1-2.jpg","products\\/1-3.jpg"]',
                'sku' => 'HS-132-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 7,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 406.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 14.0,
                'weight' => 555.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 8853,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Headphone Ultra Bass',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/2.jpg","products\\/2-1.jpg","products\\/2-2.jpg","products\\/2-3.jpg"]',
                'sku' => 'HS-148-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 1,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 368.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 12.0,
                'height' => 16.0,
                'weight' => 734.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 186325,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Boxed - Bluetooth Headphone',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/3.jpg","products\\/3-1.jpg","products\\/3-2.jpg","products\\/3-3.jpg"]',
                'sku' => 'HS-186-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 4,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 309.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 16.0,
                'height' => 19.0,
                'weight' => 882.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 122138,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Chikie - Bluetooth Speaker',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/4.jpg","products\\/4-1.jpg","products\\/4-2.jpg","products\\/4-3.jpg"]',
                'sku' => 'HS-145-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 83.0,
                'sale_price' => 63.08,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 18.0,
                'height' => 19.0,
                'weight' => 629.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 179671,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Camera Hikvision HK-35VS8',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/5.jpg","products\\/5-1.jpg","products\\/5-2.jpg","products\\/5-3.jpg"]',
                'sku' => 'HS-147-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 3,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 44.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 13.0,
                'height' => 13.0,
                'weight' => 729.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 119452,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Camera Samsung SS-24',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/6.jpg","products\\/6-1.jpg"]',
                'sku' => 'HS-114-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 53.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 580.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 180581,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Leather Watch Band',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/7.jpg","products\\/7-1.jpg"]',
                'sku' => 'HS-190-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 2,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 120.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 20.0,
                'height' => 17.0,
                'weight' => 516.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 100545,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Apple iPhone 13 Plus',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/8.jpg","products\\/8-1.jpg"]',
                'sku' => 'HS-195-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 4,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 124.0,
                'sale_price' => 100.44,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 20.0,
                'height' => 12.0,
                'weight' => 503.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 168923,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Macbook Pro 2015',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/9.jpg","products\\/9-1.jpg"]',
                'sku' => 'HS-196-A0',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 11.0,
                'height' => 16.0,
                'weight' => 801.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 86583,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Macbook Air 12 inch',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/10.jpg","products\\/10-1.jpg"]',
                'sku' => 'HS-118-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 6,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 374.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 14.0,
                'height' => 19.0,
                'weight' => 778.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 158702,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Apple Watch Serial 7',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/11.jpg","products\\/11-1.jpg"]',
                'sku' => 'HS-167-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 18.0,
                'height' => 10.0,
                'weight' => 774.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 28019,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Macbook Pro 13 inch',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/12.jpg","products\\/12-1.jpg"]',
                'sku' => 'HS-153-A0',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 130.0,
                'sale_price' => 101.4,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 12.0,
                'height' => 19.0,
                'weight' => 589.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 71010,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Apple Keyboard',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/13.jpg","products\\/13-1.jpg"]',
                'sku' => 'HS-129-A0',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 2,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 19.0,
                'height' => 13.0,
                'weight' => 510.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 5317,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'MacSafe 80W',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/14.jpg","products\\/14-1.jpg"]',
                'sku' => 'HS-111-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 3,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 15.0,
                'height' => 15.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 26817,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Hand playstation',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/15.jpg","products\\/15-1.jpg"]',
                'sku' => 'HS-181-A0',
                'order' => 0,
                'quantity' => 10,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 2,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 17.0,
                'height' => 19.0,
                'weight' => 615.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 134245,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Apple Airpods Serial 3',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/16.jpg"]',
                'sku' => 'HS-176-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 6,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 112.0,
                'sale_price' => 97.44,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 16.0,
                'height' => 20.0,
                'weight' => 782.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 154223,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Cool Smart Watches',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/17.jpg"]',
                'sku' => 'HS-120-A0',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 4,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 13.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 594.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 94757,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Black Smart Watches',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/18.jpg","products\\/18-1.jpg","products\\/18-2.jpg"]',
                'sku' => 'HS-101-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 4,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 118.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 18.0,
                'weight' => 696.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 101022,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Leather Watch Band Serial 3',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/19.jpg","products\\/19-1.jpg"]',
                'sku' => 'HS-163-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 519.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 41006,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Macbook Pro 2015 13 inch',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/20.jpg","products\\/20-1.jpg"]',
                'sku' => 'HS-188-A0',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 6,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => 112.64,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 10.0,
                'height' => 20.0,
                'weight' => 879.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 138792,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Historic Alarm Clock',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/21.jpg","products\\/21-1.jpg"]',
                'sku' => 'HS-141-A0',
                'order' => 0,
                'quantity' => 10,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 2,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 119.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 663.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 65153,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Black Glasses',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/22.jpg","products\\/22-1.jpg"]',
                'sku' => 'HS-129-A0',
                'order' => 0,
                'quantity' => 17,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 10.0,
                'height' => 17.0,
                'weight' => 847.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 56654,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Phillips Mouse',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/23.jpg","products\\/23-1.jpg"]',
                'sku' => 'HS-142-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 4,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 121.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 793.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 166676,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Gaming Keyboard',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/24.jpg","products\\/24-1.jpg"]',
                'sku' => 'HS-147-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 1,
                'brand_id' => 5,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 111.0,
                'sale_price' => 96.57,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 13.0,
                'height' => 10.0,
                'weight' => 699.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 4928,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Dual Camera 20MP',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/25.jpg","products\\/25-1.jpg"]',
                'sku' => 'HS-192-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 80.25,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 12.0,
                'weight' => 853.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 30390,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Smart Watches',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/26.jpg","products\\/26-1.jpg","products\\/26-2.jpg"]',
                'sku' => 'HS-104-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 40.5,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 827.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 54682,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Beat Headphone',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/27.jpg","products\\/27-1.jpg"]',
                'sku' => 'HS-124-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 20.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 17.0,
                'height' => 12.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 45739,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Red & Black Headphone',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/28.jpg","products\\/28-1.jpg"]',
                'sku' => 'HS-194-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => 37.0,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 19.0,
                'weight' => 805.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 39741,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Audio Equipment',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/29.jpg","products\\/29-1.jpg"]',
                'sku' => 'HS-154-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 51.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 13.0,
                'height' => 12.0,
                'weight' => 555.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 185126,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Smart Televisions',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/30.jpg","products\\/30-1.jpg"]',
                'sku' => 'HS-156-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 7,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 19.0,
                'height' => 17.0,
                'weight' => 703.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 94180,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Samsung Smart TV',
                'description' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>',
                'content' => '<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.</p>
<p>- Casual unisex fit</p>

<p>- 64% polyester, 36% polyurethane</p>

<p>- Water column pressure: 4000 mm</p>

<p>- Model is 187cm tall and wearing a size S / M</p>

<p>- Unisex fit</p>

<p>- Drawstring hood with built-in cap</p>

<p>- Front placket with snap buttons</p>

<p>- Ventilation under armpit</p>

<p>- Adjustable cuffs</p>

<p>- Double welted front pockets</p>

<p>- Adjustable elastic string at hempen</p>

<p>- Ultrasonically welded seams</p>

<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.</p>',
                'status' => 'published',
                'images' => '["products\\/31.jpg","products\\/31-1.jpg"]',
                'sku' => 'HS-168-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 0,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 18.0,
                'height' => 13.0,
                'weight' => 711.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => 1,
                'views' => 173800,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Smart Home Speaker',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/1.jpg"]',
                'sku' => 'HS-132-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 7,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 406.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 14.0,
                'weight' => 555.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Smart Home Speaker',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/1-1.jpg"]',
                'sku' => 'HS-132-A0-A1',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 7,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 406.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 14.0,
                'weight' => 555.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Headphone Ultra Bass',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/2.jpg"]',
                'sku' => 'HS-148-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 368.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 12.0,
                'height' => 16.0,
                'weight' => 734.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Headphone Ultra Bass',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/2-1.jpg"]',
                'sku' => 'HS-148-A0-A1',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 368.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 12.0,
                'height' => 16.0,
                'weight' => 734.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Headphone Ultra Bass',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/2-2.jpg"]',
                'sku' => 'HS-148-A0-A2',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 368.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 12.0,
                'height' => 16.0,
                'weight' => 734.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Boxed - Bluetooth Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/3.jpg"]',
                'sku' => 'HS-186-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 309.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 16.0,
                'height' => 19.0,
                'weight' => 882.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Boxed - Bluetooth Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/3-1.jpg"]',
                'sku' => 'HS-186-A0-A1',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 309.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 16.0,
                'height' => 19.0,
                'weight' => 882.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Chikie - Bluetooth Speaker',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/4.jpg"]',
                'sku' => 'HS-145-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 83.0,
                'sale_price' => 63.08,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 18.0,
                'height' => 19.0,
                'weight' => 629.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Chikie - Bluetooth Speaker',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/4-1.jpg"]',
                'sku' => 'HS-145-A0-A1',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 83.0,
                'sale_price' => 61.42,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 18.0,
                'height' => 19.0,
                'weight' => 629.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Camera Hikvision HK-35VS8',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/5.jpg"]',
                'sku' => 'HS-147-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 44.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 13.0,
                'height' => 13.0,
                'weight' => 729.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Camera Samsung SS-24',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/6.jpg"]',
                'sku' => 'HS-114-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 53.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 580.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Camera Samsung SS-24',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/6-1.jpg"]',
                'sku' => 'HS-114-A0-A1',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 53.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 580.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Camera Samsung SS-24',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/6.jpg"]',
                'sku' => 'HS-114-A0-A2',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 53.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 580.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Leather Watch Band',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/7.jpg"]',
                'sku' => 'HS-190-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 120.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 20.0,
                'height' => 17.0,
                'weight' => 516.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Leather Watch Band',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/7-1.jpg"]',
                'sku' => 'HS-190-A0-A1',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 120.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 20.0,
                'height' => 17.0,
                'weight' => 516.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Apple iPhone 13 Plus',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/8.jpg"]',
                'sku' => 'HS-195-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 124.0,
                'sale_price' => 100.44,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 20.0,
                'height' => 12.0,
                'weight' => 503.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Apple iPhone 13 Plus',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/8-1.jpg"]',
                'sku' => 'HS-195-A0-A1',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 124.0,
                'sale_price' => 111.6,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 20.0,
                'height' => 12.0,
                'weight' => 503.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Macbook Pro 2015',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/9.jpg"]',
                'sku' => 'HS-196-A0',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 11.0,
                'height' => 16.0,
                'weight' => 801.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Macbook Air 12 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/10.jpg"]',
                'sku' => 'HS-118-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 374.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 14.0,
                'height' => 19.0,
                'weight' => 778.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Macbook Air 12 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/10-1.jpg"]',
                'sku' => 'HS-118-A0-A1',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 374.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 14.0,
                'height' => 19.0,
                'weight' => 778.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Macbook Air 12 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/10.jpg"]',
                'sku' => 'HS-118-A0-A2',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 374.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 14.0,
                'height' => 19.0,
                'weight' => 778.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Apple Watch Serial 7',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/11.jpg"]',
                'sku' => 'HS-167-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 18.0,
                'height' => 10.0,
                'weight' => 774.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Apple Watch Serial 7',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/11-1.jpg"]',
                'sku' => 'HS-167-A0-A1',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 18.0,
                'height' => 10.0,
                'weight' => 774.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Apple Watch Serial 7',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/11.jpg"]',
                'sku' => 'HS-167-A0-A2',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 18.0,
                'height' => 10.0,
                'weight' => 774.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Macbook Pro 13 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/12.jpg"]',
                'sku' => 'HS-153-A0',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 130.0,
                'sale_price' => 101.4,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 12.0,
                'height' => 19.0,
                'weight' => 589.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Apple Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/13.jpg"]',
                'sku' => 'HS-129-A0',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 19.0,
                'height' => 13.0,
                'weight' => 510.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Apple Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/13-1.jpg"]',
                'sku' => 'HS-129-A0-A1',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 19.0,
                'height' => 13.0,
                'weight' => 510.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Apple Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/13.jpg"]',
                'sku' => 'HS-129-A0-A2',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 125.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 19.0,
                'height' => 13.0,
                'weight' => 510.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'MacSafe 80W',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/14.jpg"]',
                'sku' => 'HS-111-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 15.0,
                'height' => 15.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'MacSafe 80W',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/14-1.jpg"]',
                'sku' => 'HS-111-A0-A1',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 15.0,
                'height' => 15.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'MacSafe 80W',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/14.jpg"]',
                'sku' => 'HS-111-A0-A2',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 15.0,
                'height' => 15.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'MacSafe 80W',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/14.jpg"]',
                'sku' => 'HS-111-A0-A3',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 10.0,
                'wide' => 15.0,
                'height' => 15.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Hand playstation',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/15.jpg"]',
                'sku' => 'HS-181-A0',
                'order' => 0,
                'quantity' => 10,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 17.0,
                'height' => 19.0,
                'weight' => 615.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Apple Airpods Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/16.jpg"]',
                'sku' => 'HS-176-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 112.0,
                'sale_price' => 97.44,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 16.0,
                'height' => 20.0,
                'weight' => 782.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Apple Airpods Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/16.jpg"]',
                'sku' => 'HS-176-A0-A1',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 112.0,
                'sale_price' => 85.12,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 16.0,
                'height' => 20.0,
                'weight' => 782.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Apple Airpods Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/16.jpg"]',
                'sku' => 'HS-176-A0-A2',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 112.0,
                'sale_price' => 89.6,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 16.0,
                'height' => 20.0,
                'weight' => 782.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Cool Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/17.jpg"]',
                'sku' => 'HS-120-A0',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 13.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 594.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Cool Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/17.jpg"]',
                'sku' => 'HS-120-A0-A1',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 13.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 594.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Cool Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/17.jpg"]',
                'sku' => 'HS-120-A0-A2',
                'order' => 0,
                'quantity' => 12,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 13.0,
                'wide' => 19.0,
                'height' => 10.0,
                'weight' => 594.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Black Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/18.jpg"]',
                'sku' => 'HS-101-A0',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 118.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 18.0,
                'weight' => 696.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Black Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/18-1.jpg"]',
                'sku' => 'HS-101-A0-A1',
                'order' => 0,
                'quantity' => 15,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 118.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 18.0,
                'weight' => 696.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Leather Watch Band Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/19.jpg"]',
                'sku' => 'HS-163-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 519.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Leather Watch Band Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/19-1.jpg"]',
                'sku' => 'HS-163-A0-A1',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 519.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Leather Watch Band Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/19.jpg"]',
                'sku' => 'HS-163-A0-A2',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 519.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Leather Watch Band Serial 3',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/19.jpg"]',
                'sku' => 'HS-163-A0-A3',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 113.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 519.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Macbook Pro 2015 13 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/20.jpg"]',
                'sku' => 'HS-188-A0',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => 112.64,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 10.0,
                'height' => 20.0,
                'weight' => 879.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Macbook Pro 2015 13 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/20-1.jpg"]',
                'sku' => 'HS-188-A0-A1',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => 106.24,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 10.0,
                'height' => 20.0,
                'weight' => 879.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Macbook Pro 2015 13 inch',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/20.jpg"]',
                'sku' => 'HS-188-A0-A2',
                'order' => 0,
                'quantity' => 14,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 6,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => 115.2,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 10.0,
                'height' => 20.0,
                'weight' => 879.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Historic Alarm Clock',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/21.jpg"]',
                'sku' => 'HS-141-A0',
                'order' => 0,
                'quantity' => 10,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 2,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 119.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 14.0,
                'height' => 11.0,
                'weight' => 663.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Black Glasses',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/22.jpg"]',
                'sku' => 'HS-129-A0',
                'order' => 0,
                'quantity' => 17,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 10.0,
                'height' => 17.0,
                'weight' => 847.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Black Glasses',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/22-1.jpg"]',
                'sku' => 'HS-129-A0-A1',
                'order' => 0,
                'quantity' => 17,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 10.0,
                'height' => 17.0,
                'weight' => 847.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Black Glasses',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/22.jpg"]',
                'sku' => 'HS-129-A0-A2',
                'order' => 0,
                'quantity' => 17,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 10.0,
                'height' => 17.0,
                'weight' => 847.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Black Glasses',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/22.jpg"]',
                'sku' => 'HS-129-A0-A3',
                'order' => 0,
                'quantity' => 17,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 10.0,
                'height' => 17.0,
                'weight' => 847.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Black Glasses',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/22.jpg"]',
                'sku' => 'HS-129-A0-A4',
                'order' => 0,
                'quantity' => 17,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 115.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 10.0,
                'height' => 17.0,
                'weight' => 847.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Phillips Mouse',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/23.jpg"]',
                'sku' => 'HS-142-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 121.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 793.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Phillips Mouse',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/23-1.jpg"]',
                'sku' => 'HS-142-A0-A1',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 121.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 14.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 793.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Gaming Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/24.jpg"]',
                'sku' => 'HS-147-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 111.0,
                'sale_price' => 96.57,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 13.0,
                'height' => 10.0,
                'weight' => 699.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Gaming Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/24-1.jpg"]',
                'sku' => 'HS-147-A0-A1',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 111.0,
                'sale_price' => 81.03,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 13.0,
                'height' => 10.0,
                'weight' => 699.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Gaming Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/24.jpg"]',
                'sku' => 'HS-147-A0-A2',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 111.0,
                'sale_price' => 81.03,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 13.0,
                'height' => 10.0,
                'weight' => 699.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Gaming Keyboard',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/24.jpg"]',
                'sku' => 'HS-147-A0-A3',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 5,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 111.0,
                'sale_price' => 77.7,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 11.0,
                'wide' => 13.0,
                'height' => 10.0,
                'weight' => 699.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Dual Camera 20MP',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/25.jpg"]',
                'sku' => 'HS-192-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 80.25,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 12.0,
                'wide' => 15.0,
                'height' => 12.0,
                'weight' => 853.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/26.jpg"]',
                'sku' => 'HS-104-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 40.5,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 827.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/26-1.jpg"]',
                'sku' => 'HS-104-A0-A1',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 40.5,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 827.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/26-2.jpg"]',
                'sku' => 'HS-104-A0-A2',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 40.5,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 827.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Smart Watches',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/26.jpg"]',
                'sku' => 'HS-104-A0-A3',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 40.5,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 12.0,
                'height' => 12.0,
                'weight' => 827.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Beat Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/27.jpg"]',
                'sku' => 'HS-124-A0',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 20.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 17.0,
                'height' => 12.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Beat Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/27-1.jpg"]',
                'sku' => 'HS-124-A0-A1',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 20.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 17.0,
                'height' => 12.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Beat Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/27.jpg"]',
                'sku' => 'HS-124-A0-A2',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 20.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 17.0,
                'height' => 12.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Beat Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/27.jpg"]',
                'sku' => 'HS-124-A0-A3',
                'order' => 0,
                'quantity' => 20,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 4,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 20.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 16.0,
                'wide' => 17.0,
                'height' => 12.0,
                'weight' => 747.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Red & Black Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/28.jpg"]',
                'sku' => 'HS-194-A0',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => 37.0,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 19.0,
                'weight' => 805.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Red & Black Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/28-1.jpg"]',
                'sku' => 'HS-194-A0-A1',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => 45.0,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 19.0,
                'weight' => 805.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Red & Black Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/28.jpg"]',
                'sku' => 'HS-194-A0-A2',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => 36.0,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 19.0,
                'weight' => 805.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Red & Black Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/28.jpg"]',
                'sku' => 'HS-194-A0-A3',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => 43.5,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 19.0,
                'weight' => 805.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Red & Black Headphone',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/28.jpg"]',
                'sku' => 'HS-194-A0-A4',
                'order' => 0,
                'quantity' => 16,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => 38.5,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 18.0,
                'wide' => 19.0,
                'height' => 19.0,
                'weight' => 805.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Audio Equipment',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/29.jpg"]',
                'sku' => 'HS-154-A0',
                'order' => 0,
                'quantity' => 19,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 3,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 51.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 20.0,
                'wide' => 13.0,
                'height' => 12.0,
                'weight' => 555.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Smart Televisions',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/30.jpg"]',
                'sku' => 'HS-156-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 7,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 19.0,
                'height' => 17.0,
                'weight' => 703.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Smart Televisions',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/30-1.jpg"]',
                'sku' => 'HS-156-A0-A1',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 7,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 128.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 15.0,
                'wide' => 19.0,
                'height' => 17.0,
                'weight' => 703.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Samsung Smart TV',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/31.jpg"]',
                'sku' => 'HS-168-A0',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 18.0,
                'height' => 13.0,
                'weight' => 711.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Samsung Smart TV',
                'description' => NULL,
                'content' => NULL,
                'status' => 'published',
                'images' => '["products\\/31-1.jpg"]',
                'sku' => 'HS-168-A0-A1',
                'order' => 0,
                'quantity' => 18,
                'allow_checkout_when_out_of_stock' => 0,
                'with_storehouse_management' => 1,
                'is_featured' => 0,
                'brand_id' => 1,
                'is_variation' => 1,
                'sale_type' => 0,
                'price' => 50.0,
                'sale_price' => NULL,
                'start_date' => NULL,
                'end_date' => NULL,
                'length' => 19.0,
                'wide' => 18.0,
                'height' => 13.0,
                'weight' => 711.0,
                'created_at' => '2022-01-04 04:21:13',
                'updated_at' => '2022-01-04 04:21:13',
                'tax_id' => NULL,
                'views' => 0,
                'stock_status' => 'in_stock',
                'created_by_id' => 0,
                'created_by_type' => 'Botble\\ACL\\Models\\User',
                'image' => NULL,
            ),
        ));
        
        
    }
}