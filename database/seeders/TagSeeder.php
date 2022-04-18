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
                'title' => 'TagTitle1',
                'slug' => 'TagSlug1',
            ],
            [
                'title' => 'TagTitle2',
                'slug' => 'TagSlug2',
            ],
            [
                'title' => 'TagTitle3',
                'slug' => 'TagSlug3',
            ],
            [
                'title' => 'TagTitle4',
                'slug' => 'TagSlug4',
            ],
            [
                'title' => 'TagTitle5',
                'slug' => 'TagSlug5',
            ],
        ]);
    }
}
