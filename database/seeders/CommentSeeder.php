<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->insert([
            [
                'text' => 'коммент №1',
               // 'slug' => 'slag_kommentariya_1',
                'user_id' => 1,
                'post_id' => 1,
                'is_publish' => 1,
            ],
            [
                'text' => 'коммент №2',
               // 'slug' => 'slag_kommentariya_2',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => 1,
            ],
            [
                'text' => 'коммент №3',
               // 'slug' => 'slag_kommentariya_3',
                'user_id' => 3,
                'post_id' => 3,
                'is_publish' => 0,
            ],
            [
                'text' => 'коммент №4',
               // 'slug' => 'slag_kommentariya_4',
                'user_id' => 4,
                'post_id' => 4,
                'is_publish' => 1,
            ],
            [
                'text' => 'коммент №5',
               // 'slug' => 'slag_kommentariya_5',
                'user_id' => 5,
                'post_id' => 1,
                'is_publish' => 1,
            ],
        ]);
    }
}
