<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'text' => 'комментарий 1 пользователя, с какии-либо очень длинным текстом, подробным описанием и т.д',
                'slug' => 'comment-1',
                'user_id' => '1',
                'post_id' => '1',
                'is_publish' => true,
            ],
            [
                'text' => 'комментарий 2 пользователя, с какии-либо очень длинным текстом, подробным описанием и т.д',
                'slug' => 'comment-2',
                'user_id' => '2',
                'post_id' => '2',
                'is_publish' => true,
            ],
            [
                'text' => 'комментарий 3 пользователя, с какии-либо очень длинным текстом, подробным описанием и т.д',
                'slug' => 'comment-3',
                'user_id' => '3',
                'post_id' => '3',
                'is_publish' => true,
            ],
            [
                'text' => 'комментарий 4 пользователя, с какии-либо очень длинным текстом, подробным описанием и т.д',
                'slug' => 'comment-4',
                'user_id' => '4',
                'post_id' => '4',
                'is_publish' => true,
            ],
            [
                'text' => 'комментарий 5 пользователя, с какии-либо очень длинным текстом, подробным описанием и т.д',
                'slug' => 'comment-5',
                'user_id' => '5',
                'post_id' => '5',
                'is_publish' => true,
            ]
        ]);
    }
}
