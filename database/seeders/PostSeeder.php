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
                'title' => 'пост №1',
                'slug' => 'post_1',
                'content' => 'пост №1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 200,
            ],
            [
                'title' => 'пост №2',
                'slug' => 'post_2',
                'content' => 'пост №2',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 300,
            ],
            [
                'title' => 'пост №3',
                'slug' => 'post_3',
                'content' => 'пост №3',
                'category_id' => 2,
                'user_id' => 1,
                'is_publish' => 0,
                'is_recommended' => 0,
                'views' => 0,
            ],
            [
                'title' => 'пост №4',
                'slug' => 'post_4',
                'content' => 'пост №4',
                'category_id' => 3,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 500,
            ],
        ]);
    }
}
