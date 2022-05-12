<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 1000; $i++) {
            $train = new Train();
            $train->fill([
                'company' => $faker->word(),
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'date' => $faker->date(),
                'train_code' => $faker->ean8(),
                'number_carriages' => $faker->numberBetween(2,25),
                'is_in_time' => $faker->boolean(),
                'is_deleted' => $faker->boolean(),
            ])->save();
        }
    }
}
