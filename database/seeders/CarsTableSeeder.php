<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Car;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $car = new Car();
            $car->brand = $faker->company();
            $car->model = $faker->randomElement(['clio', 'punto', 'smart', 'r8']);
            //$car->model = $faker->vehicle();
            $car->price = $faker->randomFloat(2, 1, 999999);
            $car->cc = $faker->randomNumber(4);
            $car->year_release = $faker->date('Y-m-d');
            $car->save();
        }
    }
}
