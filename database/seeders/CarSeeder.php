<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_car = new Car();
            $new_car->modello = $faker->streetName();
            $new_car->prezzo = $faker->numberBetween(10000, 5000000);
            $new_car->alimentazione = $faker->word();
            $new_car->anno = $faker->year();
            $new_car->descrizione = $faker->text();
            $new_car->numero_telaio = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $new_car->trazione = $faker->word();
            $new_car->porte = $faker->numberBetween(3, 5);
            $new_car->carrozzeria = $faker->word();
            $new_car->cavalli = $faker->numberBetween(60, 500);
            $new_car->cilindrata = $faker->numberBetween(1000, 5000);
            $new_car->save();
        }
    }
}
