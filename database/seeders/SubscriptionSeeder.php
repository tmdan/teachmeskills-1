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
                'email' => '111@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => '222@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => '333@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => '444@gmail.com',
                'token' => Str::random(48),
            ],
            [
                'email' => '555@gmail.com',
                'token' => Str::random(48),
            ],
        ]);

    }

}
