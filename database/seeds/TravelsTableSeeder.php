<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){

            $travel = new Travel();
    
            $travel->destination = $faker->state();
            $travel->resort_name = $faker->word();
            $travel->origin_airport = $faker->state();
            $travel->duration_days =  $faker->numberBetween(7,14);
            $travel->insured = $faker->boolean();
            $travel->rating = $faker->numberBetween(0,10);
            $travel->price = $faker->randomFloat(2,100,500);
            $travel->departure_date = $faker->dateTimeBetween('now','+40 week');
    
            $travel->save();
        }
    }
}
