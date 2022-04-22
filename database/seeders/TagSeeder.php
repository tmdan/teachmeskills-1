<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'title'=>'tags_title_1',
                'slug'=>'slug-tags-1',
            ],
            [
                'title'=>'tags_title_2',
                'slug'=>'slug-tags-2',
            ],
            [
                'title'=>'tags_title_3',
                'slug'=>'slug-tags-3',
            ],
            [
                'title'=>'tags_title_4',
                'slug'=>'slug-tags-4',
            ],
            [
                'title'=>'tags_title_5',
                'slug'=>'slug-tags-5',
            ],
        ]);
    }
}
