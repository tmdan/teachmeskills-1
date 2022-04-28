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
                'title' => 'tag_title_1',
                'slug' => 'tag_slug_1',
            ],
            [
                'title' => 'tag_title_2',
                'slug' => 'tag_slug_2',
            ],
            [
                'title' => 'tag_title_3',
                'slug' => 'tag_slug_3',
            ],
            [
                'title' => 'tag_title_4',
                'slug' => 'tag_slug_4',
            ],
            [
                'title' => 'tag_title_5',
                'slug' => 'tag_slug_5',
            ],
        ]);
    }
}
