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
//                'image'         => null,
                'content'       => 'Описание поста 1 с длинным текстом',
                'category_id'   => 1,
                'user_id'       => 1,
                'is_publish'    => true,
                'is_recommended'=> true
            ],
            [
                'title'         => 'пост 2',
                'slug'          => 'post-2',
//                'image'         => null,
                'content'       => 'Описание поста 2 с длинным текстом',
                'category_id'   => 2,
                'user_id'       => 2,
                'is_publish'    => true,
                'is_recommended'=> true
            ],
            [
                'title'         => 'пост 3',
                'slug'          => 'post-3',
//                'image'         => null,
                'content'       => 'Описание поста 3 с длинным текстом',
                'category_id'   => 3,
                'user_id'       => 3,
                'is_publish'    => true,
                'is_recommended'=> true
            ],
            [
                'title'         => 'пост 4',
                'slug'          => 'post-4',
//                'image'         => null,
                'content'       => 'Описание поста 4 с длинным текстом',
                'category_id'   => 4,
                'user_id'       => 4,
                'is_publish'    => true,
                'is_recommended'=> true
            ],
            [
                'title'         => 'пост 5',
                'slug'          => 'post-5',
//                'image'         => null,
                'content'       => 'Описание поста 5 с длинным текстом',
                'category_id'   => 5,
                'user_id'       => 5,
                'is_publish'    => true,
                'is_recommended'=> true
            ]
        ]);

    }
}
