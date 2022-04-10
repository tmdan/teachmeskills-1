<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Категория №1',
                'slug' => 'category_1',
            ],
            [
                'title' => 'Категория №2',
                'slug' => 'category_2',
            ],
            [
                'title' => 'Категория №3',
                'slug' => 'category_3',
            ]
        ]);
    }
}
