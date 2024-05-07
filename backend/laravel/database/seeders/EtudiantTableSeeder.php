<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etudiant::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 50; $i++)
        {
            Etudiant::create([
                'nom' => $faker->sentence,
                'prenom'=>$faker->sentence,
                'date_naissance'=>$faker->dateTimeBetween('-60 years', '-18 years'),
                'lieu_naissance'=>$faker->city,
                'email'=>$faker->unique()->safeEmail,
                'telephone'=>$faker->e164PhoneNumber,
                'adresse'=>$faker->address,
            ]);

        }
    }
}
