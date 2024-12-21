<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 15; $i++) {
            DB::table('events')->insert([
                'name' => $faker->sentence($nbWords = 3), // Nom de l'événement
                'date' => $faker->date(), // Date de l'événement
                'location' => $faker->city, // Lieu de l'événement
                'theme_music' => $faker->optional()->word, // Thème musical optionnel
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
