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
              'title' => 'Публикация 1',
                'slug' => 'post_1',
                'image' => null,
                'content' => 'Рандомный контент 1',
                'category_id' => '1',
                'user_id' => '1',
                'is_published' => true,
                'is_recommended' => true,
            ],
            [
                'title' => 'Публикация 2',
                'slug' => 'post_2',
                'image' => null,
                'content' => 'Рандомный контент 2',
                'category_id' => '2',
                'user_id' => '2',
                'is_published' => true,
                'is_recommended' => true,
            ],
            [
                'title' => 'Публикация 3',
                'slug' => 'post_3',
                'image' => null,
                'content' => 'Рандомный контент 3',
                'category_id' => '3',
                'user_id' => '3',
                'is_published' => true,
                'is_recommended' => true,
            ],
            [
                'title' => 'Публикация 4',
                'slug' => 'post_4',
                'image' => null,
                'content' => 'Рандомный контент 4',
                'category_id' => '4',
                'user_id' => '4',
                'is_published' => true,
                'is_recommended' => true,
            ],
            [
                'title' => 'Публикация 5',
                'slug' => 'post_5',
                'image' => null,
                'content' => 'Рандомный контент 5',
                'category_id' => '5',
                'user_id' => '5',
                'is_published' => true,
                'is_recommended' => true,
            ],
        ]);
    }
}
