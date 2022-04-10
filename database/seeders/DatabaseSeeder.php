<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\User;
use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Feedback::factory(10)->create();
        City::factory(5)->create();
        Country::factory(0)->create();


    }
}
