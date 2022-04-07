<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert([
            [
                'name' => 'Minsk',
                'population' => 2020600,
                'country_id' => 1,
            ],
            [
                'name' => 'Brest',
                'population' => 354318,
                'country_id' => 1,
            ],
            [
                'name' => 'Logoysk',
                'population' => 15442,
                'country_id' => 1,
            ],
            [
                'name' => 'Moscow',
                'population' => 12635466,
                'country_id' => 2,
            ],
            [
                'name' => 'Kiev',
                'population' => 2967000,
                'country_id' => 3,
            ],
        ]);
    }
}
