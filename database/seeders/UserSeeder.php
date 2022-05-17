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
                'name' => 'Максим',
                'email' => 'maksim@mail.ru',
                'password' => Hash::make('111111zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Оля',
                'email' => 'volha@mail.ru',
                'password' => Hash::make('222222zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Иван',
                'email' => 'ivan@mail.ru',
                'password' => Hash::make('333333zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Даша',
                'email' => 'darya@mail.ru',
                'password' => Hash::make('444444zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Кирилл',
                'email' => 'Kirill@mail.ru',
                'password' => Hash::make('555555zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@mail.ru',
                'password' => Hash::make('666666zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => true
            ],
            [
                'name' => 'Administrator',
                'email' => 'administrator@mail.ru',
                'password' => Hash::make('777777zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => true
            ],
        ]);
    }
}
