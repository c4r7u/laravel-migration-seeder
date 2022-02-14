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
        //
        for($i = 0; $i < 10; $i++) {
            $vehicles = [
                'Bus',
                'Airplane',
                'Train',
                'Ship'
            ];

            $new_travel = new Travel();
            $new_travel->vehicle = $vehicles[rand(0, count($vehicles) - 1)];
            $new_travel->from_city = $faker->city();
            $new_travel->to_city = $faker->city();
            $new_travel->description = 'Lorem ipsum';
            $new_travel->price = rand(100.99, 999.99);
            $new_travel->is_available = rand(0, 1);
            $new_travel->save();
        }
        
    }
}