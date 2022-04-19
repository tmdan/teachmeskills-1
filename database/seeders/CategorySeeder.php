<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\DB;

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
                'title' => 'category_title_1',
                'slug' => 'category_slug_1',
            ],
            [
                'title' => 'category_title_2',
                'slug' => 'category_slug_2',
            ],
            [
                'title' => 'category_title_3',
                'slug' => 'category_slug_3',
            ],
            [
                'title' => 'category_title_4',
                'slug' => 'category_slug_4',
            ],
            [
                'title' => 'category_title_5',
                'slug' => 'category_slug_5',
            ],
        ]);
    }
}
