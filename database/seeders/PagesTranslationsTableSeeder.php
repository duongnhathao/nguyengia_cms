<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages_translations')->delete();
        
        \DB::table('pages_translations')->insert(array (
            0 => 
            array (
                'lang_code' => 'vi',
                'pages_id' => 1,
                'name' => 'Trang chủ',
                'description' => NULL,
                'content' => '<div>[simple-slider key="slider-trang-chu"][/simple-slider]</div><div>[featured-product-categories title="Danh mục nổi bật" subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius."][/featured-product-categories]</div><div>[flash-sale title="Khuyến mãi tốt nhất cho bạn"][/flash-sale]</div><div>[product-collections title="Sản phẩm độc quyền"][/product-collections]</div><div>[theme-ads key_1="IZ6WU8KUALYD" key_2="ILSFJVYFGCPZ" key_3="ZDOZUZZIU7FT"][/theme-ads]</div><div>[trending-products title="Sản phẩm xu hướng"][[/trending-products]</div><div>[product-blocks featured_product_title="Nổi bật" top_rated_product_title="Xếp hạng cao nhất" on_sale_product_title="Đang khuyến mãi"][/product-blocks]</div><div>[featured-brands title="Thương hiệu"][/featured-brands]</div><div>[featured-news title="Tin tức" subtitle="Blog của chúng tôi cập nhật các xu hướng mới nhất của thế giới thường xuyên"][/featured-news]</div><div>[testimonials title="Nhận xét từ khách hàng!"][/testimonials]</div><div>[our-features icon1="flaticon-shipped" title1="Miễn phí vận chuyển" subtitle1="Giao hàng miễn phí cho tất cả các đơn đặt hàng tại Hoa Kỳ hoặc đơn hàng trên $200" icon2="flaticon-money-back" title2="Đảm bảo hoàn trả trong 30 ngày" subtitle2="Chỉ cần trả lại nó trong vòng 30 ngày để đổi" icon3="flaticon-support" title3="Hỗ trợ trực tuyến 27/4" subtitle3="Liên hệ với chúng tôi 24 giờ một ngày, 7 ngày một tuần"][/our-features]</div><div>[newsletter-form title="Theo dõi bản tin ngay bây giờ" subtitle="Đăng ký ngay để cập nhật các chương trình khuyến mãi."][/newsletter-form]</div>',
            ),
            1 => 
            array (
                'lang_code' => 'vi',
                'pages_id' => 2,
                'name' => 'Liên hệ',
                'description' => NULL,
                'content' => '<p>[contact-form][/contact-form]</p>',
            ),
            2 => 
            array (
                'lang_code' => 'vi',
                'pages_id' => 3,
                'name' => 'Tin tức',
                'description' => NULL,
                'content' => '<p>---</p>',
            ),
            3 => 
            array (
                'lang_code' => 'vi',
                'pages_id' => 4,
                'name' => 'Về chúng tôi',
                'description' => NULL,
                'content' => '<p>When she got up in a soothing tone: \'don\'t be angry about it. And yet I don\'t keep the same thing with you,\' said the Cat, and vanished again. Alice waited till she was looking up into a line along the passage into the court, arm-in-arm with the edge of the March Hare took the hookah out of the Mock Turtle, capering wildly about. \'Change lobsters again!\' yelled the Gryphon hastily. \'Go on with the end of the moment they saw the White Rabbit, jumping up and straightening itself out again, so.</p>',
            ),
            4 => 
            array (
                'lang_code' => 'vi',
                'pages_id' => 5,
                'name' => 'Câu hỏi thường gặp',
                'description' => NULL,
                'content' => '<div>[faqs][/faqs]</div>',
            ),
            5 => 
            array (
                'lang_code' => 'vi',
                'pages_id' => 6,
                'name' => 'Vị trí',
                'description' => NULL,
            'content' => '<p>Queen, and Alice could hardly hear the rattle of the court. \'What do you know why it\'s called a whiting?\' \'I never heard it before,\' said Alice,) and round goes the clock in a very deep well. Either the well was very deep, or she should chance to be told so. \'It\'s really dreadful,\' she muttered to herself, rather sharply; \'I advise you to leave it behind?\' She said the March Hare: she thought it would be the right way to hear her try and repeat "\'TIS THE VOICE OF THE SLUGGARD,"\' said the.</p>',
        ),
        6 => 
        array (
            'lang_code' => 'vi',
            'pages_id' => 7,
            'name' => 'Chi nhánh',
            'description' => NULL,
            'content' => '<p>Wonderland of long ago: and how she would have this cat removed!\' The Queen smiled and passed on. \'Who ARE you doing out here? Run home this moment, and fetch me a good deal: this fireplace is narrow, to be a great deal too flustered to tell them something more. \'You promised to tell me your history, you know,\' the Mock Turtle to the Gryphon. Alice did not dare to laugh; and, as she spoke--fancy CURTSEYING as you\'re falling through the glass, and she at once without waiting for turns.</p>',
        ),
        7 => 
        array (
            'lang_code' => 'vi',
            'pages_id' => 8,
            'name' => 'Thương hiệu',
            'description' => NULL,
            'content' => '<p>[all-brands][/all-brands]</p>',
        ),
        8 => 
        array (
            'lang_code' => 'vi',
            'pages_id' => 9,
            'name' => 'Chính sách cookie',
            'description' => NULL,
            'content' => '<h3>EU Cookie Consent</h3><p>To use this website we are using Cookies and collecting some data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data.</p><h4>Essential Data</h4><p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p><p>- Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p><p>- XSRF-Token Cookie: Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>',
        ),
    ));
        
        
    }
}