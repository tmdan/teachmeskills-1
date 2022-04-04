<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('feedbacks')->insert([
            [
                'body' => 'text 1',
                'user_id'  => 1,
                'is_publish'  => 1,
            ],
            [
                'body' => 'text 2',
                'user_id'  => 1,
                'is_publish'  => 0,
            ],
            [
                'body' => 'text 3',
                'user_id'  => 2,
                'is_publish'  => 1,
            ],
        ]);
    }

}
