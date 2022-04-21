<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Adam Williams',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'image' => 'testimonials/1.jpg',
                'company' => 'CEO Of Microsoft',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Retha Deowalim',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'image' => 'testimonials/2.jpg',
                'company' => 'CEO Of Apple',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sam J. Wasim',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'image' => 'testimonials/3.jpg',
                'company' => 'Pio Founder',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Usan Gulwarm',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'image' => 'testimonials/4.jpg',
                'company' => 'CEO Of Facewarm',
                'status' => 'published',
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
        ));
        
        
    }
}