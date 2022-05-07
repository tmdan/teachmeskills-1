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
                'slug' => 'slag_posta_1',
                'content' => 'пост №1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 200,
                'date' => now(),
                'description' => 'краткое описание поста №1',
            ],
            [
                'title' => 'пост №2',
                'slug' => 'slag_posta_2',
                'content' => 'пост №2',
                'category_id' => 1,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 300,
                'date' => now(),
                'description' => 'краткое описание поста №2',
            ],
            [
                'title' => 'пост №3',
                'slug' => 'slag_posta_3',
                'content' => 'пост №3',
                'category_id' => 2,
                'user_id' => 3,
                'is_publish' => 0,
                'is_recommended' => 0,
                'views' => 0,
                'date' => now(),
                'description' => 'краткое описание поста №3',
            ],
            [
                'title' => 'пост №4',
                'slug' => 'slag_posta_4',
                'content' => 'пост №4',
                'category_id' => 3,
                'user_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 500,
                'date' => now(),
                'description' => 'краткое описание поста №4',
            ],
            [
                'title' => 'пост №5',
                'slug' => 'slag_posta_5',
                'content' => 'пост №5',
                'category_id' => 4,
                'user_id' => 5,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 300,
                'date' => now(),
                'description' => 'краткое описание поста №5',
            ],
        ]);
    }
}
