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
        DB::table('subscription')->insert([
            [
                'email' => 'email1@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'email2@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'email3@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'email4@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'email5@mail.ru',
                'token' => Str::random(48),
            ],
        ]);
    }
}
