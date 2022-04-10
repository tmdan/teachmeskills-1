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
                'text' => 'коммент №1',
                'slug' => 'comment_1',
                'users_id' => 1,
                'post_id' => 1,
                'is_publish' => 1,
            ],
            [
                'text' => 'коммент №2',
                'slug' => 'comment_2',
                'users_id' => 2,
                'post_id' => 2,
                'is_publish' => 1,
            ],
            [
                'text' => 'коммент №3',
                'slug' => 'comment_3',
                'users_id' => 3,
                'post_id' => 3,
                'is_publish' => 0,
            ],
            [
                'text' => 'коммент №4',
                'slug' => 'comment_4',
                'users_id' => 4,
                'post_id' => 4,
                'is_publish' => 1,
            ],
        ]);
    }
}
