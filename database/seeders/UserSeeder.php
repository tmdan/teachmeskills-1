<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'superadmin',
                'email' => 'email@mail.ru',
                'password' => bcrypt('123'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ],
        ]);
    }
}
