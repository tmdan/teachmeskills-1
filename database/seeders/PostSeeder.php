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
                'users_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 200,
            ],
            [
                'title' => 'пост №2',
                'slug' => 'slag_posta_2',
                'content' => 'пост №2',
                'category_id' => 1,
                'users_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 300,
            ],
            [
                'title' => 'пост №3',
                'slug' => 'slag_posta_3',
                'content' => 'пост №3',
                'category_id' => 2,
                'users_id' => 3,
                'is_publish' => 0,
                'is_recommended' => 0,
                'views' => 0,
            ],
            [
                'title' => 'пост №4',
                'slug' => 'slag_posta_4',
                'content' => 'пост №4',
                'category_id' => 3,
                'users_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 500,
            ],
            [
                'title' => 'пост №5',
                'slug' => 'slag_posta_5',
                'content' => 'пост №5',
                'category_id' => 4,
                'users_id' => 5,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 300,
            ],
        ]);
    }
}
