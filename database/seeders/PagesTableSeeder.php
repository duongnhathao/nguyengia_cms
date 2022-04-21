<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Homepage',
                'content' => '<div>[simple-slider key="home-slider"][/simple-slider]</div><div>[featured-product-categories title="Top Categories" subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius."][/featured-product-categories]</div><div>[flash-sale title="Best deals for you"][/flash-sale]</div><div>[product-collections title="Exclusive Products"][/product-collections]</div><div>[theme-ads key_1="IZ6WU8KUALYD" key_2="ILSFJVYFGCPZ" key_3="ZDOZUZZIU7FT"][/theme-ads]</div><div>[trending-products title="Trending Products"][[/trending-products]</div><div>[product-blocks featured_product_title="Featured Products" top_rated_product_title="Top Rated Products" on_sale_product_title="On Sale Products"][/product-blocks]</div><div>[featured-brands title="Our Brands"][/featured-brands]</div><div>[featured-news title="Visit Our Blog" subtitle="Our Blog updated the newest trend of the world regularly"][/featured-news]</div><div>[testimonials title="Our Client Say!"][/testimonials]</div><div>[our-features icon1="flaticon-shipped" title1="Free Delivery" subtitle1="Free shipping on all US order or order above $200" icon2="flaticon-money-back" title2="30 Day Returns Guarantee" subtitle2="Simply return it within 30 days for an exchange" icon3="flaticon-support" title3="27/4 Online Support" subtitle3="Contact us 24 hours a day, 7 days a week"][/our-features]</div><div>[newsletter-form title="Join Our Newsletter Now" subtitle="Register now to get updates on promotions."][/newsletter-form]</div>',
                'user_id' => 1,
                'image' => NULL,
                'template' => 'homepage',
                'is_featured' => 0,
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Contact us',
                'content' => '<p>[contact-form][/contact-form]</p>',
                'user_id' => 1,
                'image' => NULL,
                'template' => 'default',
                'is_featured' => 0,
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Blog',
                'content' => '<p>---</p>',
                'user_id' => 1,
                'image' => NULL,
                'template' => 'blog-sidebar',
                'is_featured' => 0,
                'description' => NULL,
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:19',
                'updated_at' => '2022-01-04 04:21:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'About us',
            'content' => '<p>ARE you doing out here? Run home this moment, and fetch me a pair of white kid gloves while she was now about two feet high: even then she heard a little queer, won\'t you?\' \'Not a bit,\' she thought of herself, \'I wish you would have called him a fish)--and rapped loudly at the top of it. She stretched herself up on tiptoe, and peeped over the verses on his flappers, \'--Mystery, ancient and modern, with Seaography: then Drawling--the Drawling-master was an old Crab took the cauldron of soup off.</p>',
            'user_id' => 1,
            'image' => NULL,
            'template' => 'default',
            'is_featured' => 0,
            'description' => NULL,
            'status' => 'published',
            'created_at' => '2022-01-04 04:21:19',
            'updated_at' => '2022-01-04 04:21:19',
        ),
        4 => 
        array (
            'id' => 5,
            'name' => 'FAQ',
            'content' => '<div>[faqs][/faqs]</div>',
            'user_id' => 1,
            'image' => NULL,
            'template' => 'default',
            'is_featured' => 0,
            'description' => NULL,
            'status' => 'published',
            'created_at' => '2022-01-04 04:21:19',
            'updated_at' => '2022-01-04 04:21:19',
        ),
        5 => 
        array (
            'id' => 6,
            'name' => 'Location',
            'content' => '<p>Mouse. \'Of course,\' the Dodo could not answer without a porpoise.\' \'Wouldn\'t it really?\' said Alice in a day or two: wouldn\'t it be of any one; so, when the White Rabbit, trotting slowly back to the Dormouse, and repeated her question. \'Why did they live at the time they were playing the Queen had only one who had not gone far before they saw the Mock Turtle. \'No, no! The adventures first,\' said the Queen to play croquet.\' The Frog-Footman repeated, in the direction it pointed to, without.</p>',
            'user_id' => 1,
            'image' => NULL,
            'template' => 'default',
            'is_featured' => 0,
            'description' => NULL,
            'status' => 'published',
            'created_at' => '2022-01-04 04:21:19',
            'updated_at' => '2022-01-04 04:21:19',
        ),
        6 => 
        array (
            'id' => 7,
            'name' => 'Affiliates',
            'content' => '<p>He sent them word I had not a moment like a writing-desk?\' \'Come, we shall have somebody to talk about trouble!\' said the Footman. \'That\'s the most confusing thing I ask! It\'s always six o\'clock now.\' A bright idea came into her eyes; and once she remembered how small she was terribly frightened all the jurymen are back in a tone of delight, which changed into alarm in another minute the whole head appeared, and then a voice she had read several nice little histories about children who had.</p>',
            'user_id' => 1,
            'image' => NULL,
            'template' => 'default',
            'is_featured' => 0,
            'description' => NULL,
            'status' => 'published',
            'created_at' => '2022-01-04 04:21:19',
            'updated_at' => '2022-01-04 04:21:19',
        ),
        7 => 
        array (
            'id' => 8,
            'name' => 'Brands',
            'content' => '<p>[all-brands][/all-brands]</p>',
            'user_id' => 1,
            'image' => NULL,
            'template' => 'default',
            'is_featured' => 0,
            'description' => NULL,
            'status' => 'published',
            'created_at' => '2022-01-04 04:21:19',
            'updated_at' => '2022-01-04 04:21:19',
        ),
        8 => 
        array (
            'id' => 9,
            'name' => 'Cookie Policy',
            'content' => '<h3>EU Cookie Consent</h3><p>To use this website we are using Cookies and collecting some data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data.</p><h4>Essential Data</h4><p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p><p>- Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p><p>- XSRF-Token Cookie: Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>',
            'user_id' => 1,
            'image' => NULL,
            'template' => 'default',
            'is_featured' => 0,
            'description' => NULL,
            'status' => 'published',
            'created_at' => '2022-01-04 04:21:19',
            'updated_at' => '2022-01-04 04:21:19',
        ),
    ));
        
        
    }
}