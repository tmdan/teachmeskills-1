<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\DB;

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
                'text' => 'comment_text_1',
                'slug' => 'comment_slug_1',
                'user_id' => 1,
                'post_id' => 1,
                'is_publish' => true,
            ],
            [
                'text' => 'comment_text_2',
                'slug' => 'comment_slug_2',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => true,
            ],
            [
                'text' => 'comment_text_3',
                'slug' => 'comment_slug_3',
                'user_id' => 3,
                'post_id' => 3,
                'is_publish' => true,
            ],
            [
                'text' => 'comment_text_4',
                'slug' => 'comment_slug_4',
                'user_id' => 4,
                'post_id' => 4,
                'is_publish' => true,
            ],
            [
                'text' => 'comment_text_5',
                'slug' => 'comment_slug_5',
                'user_id' => 5,
                'post_id' => 5,
                'is_publish' => true,
            ],
        ]);
    }
}
