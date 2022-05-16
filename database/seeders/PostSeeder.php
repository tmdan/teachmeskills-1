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
                'title'         => 'пост 1',
                'slug'          => 'post-1',
                'image'         => 'test-images/photo1.png',
                'content'       => 'Описание поста 1 с длинным текстом',
                'category_id'   => 5,
                'user_id'       => 1,
                'is_publish'    => true,
                'is_recommended'=> false,
                'views'         => 100,
                'created_at'    => now()

            ],
            [
                'title'         => 'пост 2',
                'slug'          => 'post-2',
                'image'         => 'test-images/photo2.png',
                'content'       => 'Описание поста 2 с длинным текстом',
                'category_id'   => 5,
                'user_id'       => 2,
                'is_publish'    => true,
                'is_recommended'=> true,
                'views'         => 200,
                'created_at'    => now()->addMinute(),
            ],
            [
                'title'         => 'пост 3',
                'slug'          => 'post-3',
                'image'         => 'test-images/photo3.jpg',
                'content'       => 'Описание поста 3 с длинным текстом',
                'category_id'   => 5,
                'user_id'       => 3,
                'is_publish'    => true,
                'is_recommended'=> false,
                'views'         => 300,
                'created_at'    => now()->addMinutes(2)
            ],
            [
                'title'         => 'пост 4',
                'slug'          => 'post-4',
                'image'         => 'test-images/photo4.jpg',
                'content'       => 'Описание поста 4 с длинным текстом',
                'category_id'   => 4,
                'user_id'       => 4,
                'is_publish'    => true,
                'is_recommended'=> true,
                'views'         => 400,
                'created_at'    => now()->addMinutes(3),
            ],
            [
                'title'         => 'пост 5',
                'slug'          => 'post-5',
                'image'         => 'test-images/photo1.png',
                'content'       => 'Описание поста 5 с длинным текстом',
                'category_id'   => 5,
                'user_id'       => 5,
                'is_publish'    => true,
                'is_recommended'=> false,
                'views'         => 500,
                'created_at'    => now()->addMinutes(4)
            ]
        ]);

    }
}
