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
                'title'=>'posts_title_1',
                'slug'=>'slug-posts-1',
                'image'=>'',
                'content'=>'text posts text posts 1',
                'category_id'=>1,
                'user_id'=>1,
                'is_publish'=>true,
                'is_recommended'=>true,
            ],
            [
                'title'=>'posts_title_2',
                'slug'=>'slug-posts-2',
                'image'=>'',
                'content'=>'text posts text posts 2',
                'category_id'=>2,
                'user_id'=>2,
                'is_publish'=>true,
                'is_recommended'=>true,
            ],
            [
                'title'=>'posts_title_3',
                'slug'=>'slug-posts-3',
                'image'=>'',
                'content'=>'text posts text posts 3',
                'category_id'=>3,
                'user_id'=>3,
                'is_publish'=>false,
                'is_recommended'=>true,
            ],
            [
                'title'=>'posts_title_4',
                'slug'=>'slug-posts-4',
                'image'=>'',
                'content'=>'text posts text posts 4',
                'category_id'=>4,
                'user_id'=>4,
                'is_publish'=>false,
                'is_recommended'=>false,
            ],
            [
                'title'=>'posts_title_5',
                'slug'=>'slug-posts-5',
                'image'=>'',
                'content'=>'text posts text posts 5',
                'category_id'=>5,
                'user_id'=>5,
                'is_publish'=>true,
                'is_recommended'=>false,
            ],
        ]);
    }
}
