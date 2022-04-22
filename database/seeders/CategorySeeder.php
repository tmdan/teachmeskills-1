<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'title' => 'categories_title_1',
                'slug' => 'slug-categories-1',
            ],
            [
                'title' => 'categories_title_2',
                'slug' => 'slug-categories-2',
            ],
            [
                'title' => 'categories_title_3',
                'slug' => 'slug-categories-3',
            ],
            [
                'title' => 'categories_title_4',
                'slug' => 'slug-categories-4',
            ],
            [
                'title' => 'categories_title_5',
                'slug' => 'slug-categories-5',
            ],
        ]);
    }
}
