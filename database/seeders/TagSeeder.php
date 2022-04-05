<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->insert([
            [
                'title' => 'тег №1',
                'slug' => 'слаг тега №1',
            ],
            [
                'title' => 'тег №2',
                'slug' => 'слаг тега №2',
            ],
            [
                'title' => 'тег №3',
                'slug' => 'слаг тега №3',
            ],
            [
                'title' => 'тег №4',
                'slug' => 'слаг тега №4',
            ],
            [
                'title' => 'тег №5',
                'slug' => 'слаг тега №5',
            ],
        ]);
    }
}
