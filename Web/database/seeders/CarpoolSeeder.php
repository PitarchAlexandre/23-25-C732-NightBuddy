<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarpoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // On récupère les IDs des événements et des utilisateurs (conducteurs) existants
        $eventIds = DB::table('events')->pluck('id');
        $userIds = DB::table('users')->pluck('id');

        for ($i = 0; $i < 15; $i++) {
            DB::table('carpools')->insert([
                'event_id' => $faker->randomElement($eventIds), // Choisir un événement au hasard
                'driver_id' => $faker->randomElement($userIds), // Choisir un conducteur au hasard
                'max_seats' => $faker->numberBetween(1, 5), // Nombre de places entre 1 et 5
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
