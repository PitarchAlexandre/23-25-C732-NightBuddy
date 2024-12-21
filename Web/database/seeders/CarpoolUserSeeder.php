<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarpoolUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Récupérer les IDs des covoiturages et des utilisateurs
        $carpoolIds = DB::table('carpools')->pluck('id');
        $userIds = DB::table('users')->pluck('id');

        // On va attribuer entre 1 et 4 utilisateurs à chaque covoiturage
        foreach ($carpoolIds as $carpoolId) {
            $usersForCarpool = $faker->randomElements($userIds->toArray(), $faker->numberBetween(1, 4));

            foreach ($usersForCarpool as $userId) {
                DB::table('carpool_user')->insert([
                    'carpool_id' => $carpoolId,
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
