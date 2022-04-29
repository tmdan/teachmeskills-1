<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            PostTagSeeder::class,
            SubscriptionSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
