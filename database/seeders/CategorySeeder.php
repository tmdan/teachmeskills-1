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
                'title' => 'CategoryTitle1',
                'slug' => 'CategorySlug1',
            ],
            [
                'title' => 'CategoryTitle2',
                'slug' => 'CategorySlug2',
            ],
            [
                'title' => 'CategoryTitle3',
                'slug' => 'CategorySlug3',
            ],
            [
                'title' => 'CategoryTitle4',
                'slug' => 'CategorySlug4',
            ],
            [
                'title' => 'CategoryTitle5',
                'slug' => 'CategorySlug5',
            ],
        ]);
    }
}
