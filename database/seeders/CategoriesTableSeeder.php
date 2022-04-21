<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ecommerce',
                'parent_id' => 0,
                'description' => 'Assumenda aperiam expedita temporibus voluptate veniam ut. Distinctio id rerum ut nisi facilis qui. Deleniti sunt explicabo cumque omnis deleniti natus. Incidunt est totam debitis voluptas.',
                'status' => 'published',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'icon' => NULL,
                'order' => 0,
                'is_featured' => 0,
                'is_default' => 1,
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fashion',
                'parent_id' => 0,
                'description' => 'Laborum libero saepe qui velit velit eos. Neque et ut vitae esse sint dolor. Eligendi aut neque sit qui esse. Qui quae sit quis hic.',
                'status' => 'published',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'icon' => NULL,
                'order' => 0,
                'is_featured' => 1,
                'is_default' => 0,
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Electronic',
                'parent_id' => 0,
                'description' => 'Consectetur consequatur corporis enim ab. Ut placeat ut libero aliquam. Ipsum commodi hic vel.',
                'status' => 'published',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'icon' => NULL,
                'order' => 0,
                'is_featured' => 1,
                'is_default' => 0,
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Commercial',
                'parent_id' => 0,
                'description' => 'Sit ut est tempora quaerat quibusdam. Velit enim qui harum. Ad illo rem similique et ipsa placeat.',
                'status' => 'published',
                'author_id' => 1,
                'author_type' => 'Botble\\ACL\\Models\\User',
                'icon' => NULL,
                'order' => 0,
                'is_featured' => 1,
                'is_default' => 0,
                'created_at' => '2022-01-04 04:21:18',
                'updated_at' => '2022-01-04 04:21:18',
            ),
        ));
        
        
    }
}