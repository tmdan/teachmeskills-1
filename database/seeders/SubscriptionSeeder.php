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
                'email' => 'firt-subscr@email.com',
                'token' => Str::random(10)
            ],
            [
                'email' => 'second-subscr@email.com',
                'token' => Str::random(10)
            ],
            [
                'email' => 'third-subscr@email.com',
                'token' => Str::random(10)
            ],
            [
                'email' => 'fourth-subscr@email.com',
                'token' => Str::random(10)
            ],
            [
                'email' => 'fifth-subscr@email.com',
                'token' => Str::random(10)
            ]
        ]);
    }
}
