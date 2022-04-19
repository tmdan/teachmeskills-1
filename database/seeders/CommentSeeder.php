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
                'text' => 'рандомный комментрарий 1',
                'slug' => 'comment_1',
                'user_id' => '1',
                'post_id' => '1',
                'is_published' => true
            ],
            [
                'text' => 'рандомный комментрарий 2',
                'slug' => 'comment_2',
                'user_id' => '2',
                'post_id' => '2',
                'is_published' => true
            ],
            [
                'text' => 'рандомный комментрарий 3',
                'slug' => 'comment_3',
                'user_id' => '3',
                'post_id' => '3',
                'is_published' => true
            ],
            [
                'text' => 'рандомный комментрарий 4',
                'slug' => 'comment_4',
                'user_id' => '4',
                'post_id' => '4',
                'is_published' => true
            ],
            [
                'text' => 'рандомный комментрарий 5',
                'slug' => 'comment_5',
                'user_id' => '5',
                'post_id' => '5',
                'is_published' => true
            ],
        ]);
    }
}
