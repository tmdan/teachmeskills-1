<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
            [
                'title' => 'пост №1',
                'slug' => 'слаг поста №1',
                'content' => 'пост №1',
                'category_id' => 1,
                'users_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 200,
            ],
            [
                'title' => 'пост №2',
                'slug' => 'слаг поста №2',
                'content' => 'пост №2',
                'category_id' => 1,
                'users_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 300,
            ],
            [
                'title' => 'пост №3',
                'slug' => 'слаг поста №3',
                'content' => 'пост №3',
                'category_id' => 2,
                'users_id' => 3,
                'is_publish' => 0,
                'is_recommended' => 0,
                'views' => 0,
            ],
            [
                'title' => 'пост №4',
                'slug' => 'слаг поста №4',
                'content' => 'пост №4',
                'category_id' => 3,
                'users_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 500,
            ],
        ]);
    }
}
