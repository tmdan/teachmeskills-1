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
                'title' => 'Тэг 1',
                'slug' => 'tag_1'
            ],
            [
                'title' => 'Тэг 2',
                'slug' => 'tag_2'
            ],
            [
                'title' => 'Тэг 3',
                'slug' => 'tag_3'
            ],
            [
                'title' => 'Тэг 4',
                'slug' => 'tag_4'
            ],
            [
                'title' => 'Тэг 5',
                'slug' => 'tag_5'
            ],
        ]);
    }
}
