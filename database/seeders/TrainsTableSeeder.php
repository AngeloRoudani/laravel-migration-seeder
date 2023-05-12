<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 20; $i++ ) {
            
            $train = new Train();
            $train->company = $faker->company();
            $train->started_station = $faker->city();
            $train->departed_hour = $faker->dateTimeBetween('now', '2 days');
            $train->arrival_hour = $faker->dateTimeBetween('+1 days', '3 days');
            $train->code = $faker->randomNumber(5, false);
            $train->wagons = $faker->randomDigitNot(2);
            $train->delay = null;
            $train->cancelled = null;

            $train->save();

        }
    }
}
