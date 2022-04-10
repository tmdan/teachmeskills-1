<?php

namespace Database\Seeders;

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
                'title' => 'тег №1',
                'slug' => 'tag_1',
            ],
            [
                'title' => 'тег №2',
                'slug' => 'tag_2',
            ],
            [
                'title' => 'тег №3',
                'slug' => 'tag_3',
            ]
        ]);
    }
}
