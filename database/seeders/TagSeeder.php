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
                'slug' => 'slag_tega_1',
            ],
            [
                'title' => 'тег №2',
                'slug' => 'slag_tega_2',
            ],
            [
                'title' => 'тег №3',
                'slug' => 'slag_tega_3',
            ],
            [
                'title' => 'тег №4',
                'slug' => 'slag_tega_4',
            ],
            [
                'title' => 'тег №5',
                'slug' => 'slag_tega_5',
            ],
        ]);
    }
}
