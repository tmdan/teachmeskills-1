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
                'title' => 'tag 1',
                'slug' => 'tag-1'
            ],
            [
                'title' => 'tag 2',
                'slug' => 'tag-2'
            ],
            [
                'title' => 'tag 3',
                'slug' => 'tag-3'
            ],
            [
                'title' => 'tag 4',
                'slug' => 'tag-4'
            ],
            [
                'title' => 'tag 5',
                'slug' => 'tag-5'
            ]
        ]);
    }
}
