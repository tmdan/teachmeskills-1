<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
            [
                'title' => 'post_title_1',
                'slug' => 'post_slug_1',
                'content' => 'post_content_1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 500,
            ],
            [
                'title' => 'post_title_2',
                'slug' => 'post_slug_2',
                'content' => 'post_content_2',
                'category_id' => 2,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 0,
                'views' => 1000,
            ],
            [
                'title' => 'post_title_3',
                'slug' => 'post_slug_3',
                'content' => 'post_content_3',
                'category_id' => 3,
                'user_id' => 3,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 2000,
            ],
            [
                'title' => 'post_title_4',
                'slug' => 'post_slug_4',
                'content' => 'post_content_4',
                'category_id' => 4,
                'user_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 0,
                'views' => 100000,
            ],
            [
                'title' => 'post_title_5',
                'slug' => 'post_slug_5',
                'content' => 'post_content_5',
                'category_id' => 5,
                'user_id' => 5,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 6000,
            ],
        ]);
    }
}
