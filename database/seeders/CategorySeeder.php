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
                'slug' => 'slag_kategorii_1',
            ],
            [
                'title' => 'Категория №2',
                'slug' => 'slag_kategorii_2',
            ],
            [
                'title' => 'Категория №3',
                'slug' => 'slag_kategorii_3',
            ],
            [
                'title' => 'Категория №4',
                'slug' => 'slag_kategorii_4',
            ],
            [
                'title' => 'Категория №5',
                'slug' => 'slag_kategorii_5',
            ],
        ]);
    }
}
