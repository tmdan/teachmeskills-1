<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'title' => 'Категория №1',
                'slug' => 'слаг категории №1',
            ],
            [
                'title' => 'Категория №2',
                'slug' => 'слаг категории №2',
            ],
            [
                'title' => 'Категория №3',
                'slug' => 'слаг категории №3',
            ],
            [
                'title' => 'Категория №4',
                'slug' => 'слаг категории №4',
            ],
            [
                'title' => 'Категория №5',
                'slug' => 'слаг категории №5',
            ],
        ]);
    }
}
