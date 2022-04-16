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
                'title' => 'tag name 1',
                'slug' => 'tag-name-1'
            ],
            [
                'title' => 'tag name 2',
                'slug' => 'tag-name-2'
            ],
            [
                'title' => 'tag name 3',
                'slug' => 'tag-name-3'
            ],
            [
                'title' => 'tag name 4',
                'slug' => 'tag-name-4'
            ],
            [
                'title' => 'tag name 5',
                'slug' => 'tag-name-5'
            ]
        ]);
    }
}
