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
                'name' => 'Maksim',
                'email' => 'maksim@mail.ru',
                'password' => Hash::make(Str::random(48)),
            ],
            [
                'name' => 'Ivan',
                'email' => 'ivan@mail.ru',
                'password' => Hash::make(Str::random(48)),
            ],
            [
                'name' => 'Kirill',
                'email' => 'kirill@mail.ru',
                'password' => Hash::make(Str::random(48)),
            ],
            [
                'name' => 'Darya',
                'email' => 'darya@mail.ru',
                'password' => Hash::make(Str::random(48)),
            ],
            [
                'name' => 'Volga',
                'email' => 'volga@mail.ru',
                'password' => Hash::make(Str::random(48)),
            ],
        ]);
    }
}
