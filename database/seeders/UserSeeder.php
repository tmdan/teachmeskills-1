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
                'remember_token' => Str::random(48)
            ],
            [
                'name' => 'Юля',
                'email' => 'julia@mail.ru',
                'password' => Hash::make('222222zZ'),
                'remember_token' => Str::random(48)
            ],
            [
                'name' => 'Егор',
                'email' => 'egor@mail.ru',
                'password' => Hash::make('333333zZ'),
                'remember_token' => Str::random(48)
            ],
            [
                'name' => 'Антон',
                'email' => 'anthony@mail.ru',
                'password' => Hash::make('444444zZ'),
                'remember_token' => Str::random(48)
            ],
            [
                'name' => 'Вероника',
                'email' => 'veronika@mail.ru',
                'password' => Hash::make('555555zZ'),
                'remember_token' => Str::random(48)
            ],
        ]);
    }
}
