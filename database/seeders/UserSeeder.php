<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'name'=>'users_name_1',
                'email'=>'ioplm@gmail.com',
                'password'=>Hash::make('qw12345'),
            ],
            [
                'name'=>'users_name_2',
                'email'=>'tyuhb@gmail.com',
                'password'=>Hash::make('as4523'),
            ],
            [
                'name'=>'users_name_3',
                'email'=>'ertfc@gmail.com',
                'password'=>Hash::make('zx7854'),
            ],
            [
                'name'=>'users_name_4',
                'email'=>'werdx@gmail.com',
                'password'=>Hash::make('er5914'),
            ],
            [
                'name'=>'users_name_5',
                'email'=>'qwedx@gmail.com',
                'password'=>Hash::make('df6719'),
            ],
        ]);
    }
}
