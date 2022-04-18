<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'title' => 'PostTitle1',
                'slug' => 'PostSlug1',
                'content' => 'ContentPost1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 132,
            ],
            [
                'title' => 'PostTitle2',
                'slug' => 'PostSlug2',
                'content' => 'ContentPost2',
                'category_id' => 2,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 0,
                'views' => 213,
            ],
            [
                'title' => 'PostTitle3',
                'slug' => 'PostSlug3',
                'content' => 'ContentPost3',
                'category_id' => 3,
                'user_id' => 3,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 174,
            ],
            [
                'title' => 'PostTitle4',
                'slug' => 'PostSlug4',
                'content' => 'ContentPost4',
                'category_id' => 4,
                'user_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 0,
                'views' => 201,
            ],
            [
                'title' => 'PostTitle5',
                'slug' => 'PostSlug5',
                'content' => 'ContentPost5',
                'category_id' => 5,
                'user_id' => 5,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 196,
            ],
        ]);
    }
}
