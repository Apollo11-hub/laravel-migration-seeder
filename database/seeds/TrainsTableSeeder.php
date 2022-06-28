<?php

use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for($i=0 ; $i < 100; $i++ ){
         $newTrain = new Train();
         $newTrain->company_name = $faker->company();
         $newTrain->departure_station = $faker->city();
         $newTrain->arrival_station = $faker->city();
         $newTrain->departure_time = $faker->time();
         $newTrain->arrival_time = $faker->time();
         $newTrain->train_alphacode = $faker->regexify('[A-Z]{7}[0-9]{4}');
         $newTrain->train_carriage =$faker->numberBetween(8,12);

         $newTrain->save();
        };

        // $newTrain = new Train();
        // $newTrain->company_name = 'Trenitalia';
        // $newTrain->departure_station = 'Frattamaggiore';
        // $newTrain->arrival_station = 'Napoli Centrale';
        // $newTrain->departure_time = '09:00:00';
        // $newTrain->arrival_time = '10:00:00';
        // $newTrain->train_alphacode = 'a4335f';
        // $newTrain->train_carriage = '15';

        // $newTrain->save();
    }
}
