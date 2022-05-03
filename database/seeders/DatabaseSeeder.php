<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategorySeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();


        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            CommentSeeder::class,
            PostTagSeeder::class,
            SubscriptionSeeder::class,
            UserSeeder::class,
        ]);

    }
}
