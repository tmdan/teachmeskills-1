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
                'email' => 'nik.r.tms@gmail.com',
                'avatar' => 'test-images/1.jpg',
                'password' => Hash::make('111'),
                'remember_token' => Str::random(48),
                'is_admin' => true
            ],
            [
                'name' => 'Олег',
                'email' => 'oleg@email.com',
                'avatar' => 'test-images/2.jpg',
                'password' => Hash::make('222'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Саша',
                'email' => 'sasha@email.com',
                'avatar' => 'test-images/3.jpg',
                'password' => Hash::make('333'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Вася',
                'email' => 'vasja@email.com',
                'avatar' => 'test-images/4.jpg',
                'password' => Hash::make('444'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ],
            [
                'name' => 'Миша',
                'email' => 'misha@email.com',
                'avatar' => 'test-images/5.jpg',
                'password' => Hash::make('555'),
                'remember_token' => Str::random(48),
                'is_admin' => false
            ]
        ]);
    }
}
