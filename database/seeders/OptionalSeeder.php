<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++){
            $new_optional = new Optional();
    
            $new_optional->name = $faker->word();
            $new_optional->prezzo = $faker->numberBetween(10, 5000);
            $new_optional->descrizione = $faker->text();
    
            $new_optional->save();
        }
    }
}
