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
                'text' => 'CommentText1',
                'slug' => 'CommentSlug1',
                'user_id' => 1,
                'post_id' => 1,
                'is_publish' => 1,
            ],
            [
                'text' => 'CommentText2',
                'slug' => 'CommentSlug2',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => 1,
            ],
            [
                'text' => 'CommentText3',
                'slug' => 'CommentSlug3',
                'user_id' => 3,
                'post_id' => 3,
                'is_publish' => 1,
            ],
            [
                'text' => 'CommentText4',
                'slug' => 'CommentSlug4',
                'user_id' => 4,
                'post_id' => 4,
                'is_publish' => 1,
            ],
            [
                'text' => 'CommentText5',
                'slug' => 'CommentSlug5',
                'user_id' => 5,
                'post_id' => 5,
                'is_publish' => 1,
            ],
        ]);
    }
}
