<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importazione Models
use App\Models\Train;

//Importazione Helpers
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
        //se volessi creare 10 treni aggiungo ciclo for e rilancio il comando php artisan db:seed --class=TrainsTableSeeder nel terminale
        for ($i = 0; $i < 10; $i++ ) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
                while ($newTrain->departure_station == $newTrain->arrival_station) {
                    $newTrain->arrival_station = $faker->city();
                }
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival = $faker->dateTimeBetween('+1 week', '+2 weeks'); //per non sovrapporre arrival e departure time utilizzo + e +
            $newTrain->code = strtoupper($faker->bothify('??##??'));
            $newTrain->carragies = $faker->numberBetween(2, 15);
            $newTrain->on_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();

            $newTrain->save();
        }
    }
}