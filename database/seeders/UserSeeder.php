<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Иван',
                'email' => 'ivan@email.com',
                'password' => Hash::make("111"),
                'remember_token' => Str::random(10)
            ],
            [
                'name' => 'Олег',
                'email' => 'oleg@email.com',
                'password' => Hash::make("222"),
                'remember_token' => Str::random(10)
            ],
            [
                'name' => 'Саша',
                'email' => 'sasha@email.com',
                'password' => Hash::make("333"),
                'remember_token' => Str::random(10)
            ],
            [
                'name' => 'Вася',
                'email' => 'vasja@email.com',
                'password' => Hash::make("444"),
                'remember_token' => Str::random(10)
            ],
            [
                'name' => 'Миша',
                'email' => 'misha@email.com',
                'password' => Hash::make("555"),
                'remember_token' => Str::random(10)
            ]
        ]);
    }
}
