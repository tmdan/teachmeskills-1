<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        \DB::table('subscriptions')->insert([
            [
                'email' => Str::random(10) . '@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => Str::random(10) . '@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => Str::random(10) . '@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => Str::random(10) . '@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => Str::random(10) . '@gmail.com',
                'token' => Str::random(48),
            ],
        ]);

        /*\DB::table('subscriptions')->insert([
            [
                'email' => Str::random(10).'@gmail.com',
                'token' => Srt::random(48),
            ],
            [
                'email' => Str::random(10).'@gmail.com',
                'token' => Srt::random(48),
            ],
            [
                'email' => Str::random(10).'@gmail.com',
                'token' => Srt::random(48),
            ],
            [
                'email' => Str::random(10).'@gmail.com',
                'token' => Srt::random(48),
            ],
            [
                'email' => Str::random(10).'@gmail.com',
                'token' => Srt::random(48),
            ],
        ]);*/
    }

}
