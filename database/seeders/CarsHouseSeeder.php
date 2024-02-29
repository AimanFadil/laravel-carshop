<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\CarsHouse;

class CarsHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_carshouse = new CarsHouse();
            $new_carshouse->nome = $faker->word(3);
            $new_carshouse->indirizzo = $faker->streetAddress();
            $new_carshouse->tel = $faker->phoneNumber();
            $new_carshouse->tipologia = $faker->streetSuffix();
            $new_carshouse->mail = $faker->email();
            $new_carshouse->social = $faker->word();

            $new_carshouse->save();
        }
    }
}
