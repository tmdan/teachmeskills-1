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
                'name' => 'Лена',
                'email' => 'helen@mail.ru',
                'password' => Hash::make('111111zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Юля',
                'email' => 'julia@mail.ru',
                'password' => Hash::make('222222zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Егор',
                'email' => 'egor@mail.ru',
                'password' => Hash::make('333333zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Антон',
                'email' => 'anthony@mail.ru',
                'password' => Hash::make('444444zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Вероника',
                'email' => 'veronika@mail.ru',
                'password' => Hash::make('555555zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Admin',
                'email' => 'schuca120@mail.ru',
                'password' => Hash::make('666666zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => true
            ],
            [
                'name' => 'Administrator',
                'email' => '1111@maaa.ru',
                'password' => Hash::make('777777zZ'),
                'remember_token' => Str::random(48),
                'is_admin' => true
            ],
        ]);
    }
}
