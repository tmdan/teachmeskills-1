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
                'text'=>'comments text text text 1',
                'slug'=>'slug-comments-1',
                'user_id'=>1,
                'post_id'=>1,
                'is_publish'=>true,
            ],
            [
                'text'=>'comments text text text 2',
                'slug'=>'slug-comments-2',
                'user_id'=>2,
                'post_id'=>2,
                'is_publish'=>true,
            ],
            [
                'text'=>'comments text text text 3',
                'slug'=>'slug-comments-3',
                'user_id'=>3,
                'post_id'=>3,
                'is_publish'=>true,
            ],
            [
                'text'=>'comments text text text 4',
                'slug'=>'slug-comments-4',
                'user_id'=>4,
                'post_id'=>4,
                'is_publish'=>true,
            ],
            [
                'text'=>'comments text text text 5',
                'slug'=>'slug-comments-5',
                'user_id'=>5,
                'post_id'=>5,
                'is_publish'=>false,
            ],
        ]);
    }
}
