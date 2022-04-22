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
        DB::table('subscriptions')->insert([
            [
                'email' => 'qwerty@gmail.com',
                'token' => Str::random(48)
            ],
            [
                'email' => 'asdfg@gmail.com',
                'token' => Str::random(48)
            ],
            [
                'email' => 'zxcvb@gmail.com',
                'token' => Str::random(48)
            ],
            [
                'email' => 'ertyu@gmail.com',
                'token' => Str::random(48)
            ],
            [
                'email' => 'dfghj@gmail.com',
                'token' => Str::random(48)
            ],
        ]);
    }
}
