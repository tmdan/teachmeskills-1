<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
    {
        DB::table("subscriptions")->insert([
            [
                "email" => "admin@gmail.com",
                'token' => Str::random(48),
            ],
            [
                "email" => "user1@gmail.com",
                'token' => Str::random(48),
            ],
            [
                "email" => "user2@gmail.com",
                'token' => Str::random(48),
            ],
            [
                "email" => "user3@gmail.com",
                'token' => Str::random(48),
            ],
            [
                "email" => "user4@gmail.com",
                'token' => Str::random(48),
            ],
        ]);
    }
}
