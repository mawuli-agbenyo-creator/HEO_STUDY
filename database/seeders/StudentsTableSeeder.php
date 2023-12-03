<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('students')->insert([
                'full_name' => $faker->name,
                'date_of_birth' => $faker->date,
                'email' => $faker->unique()->safeEmail,
                'mobile_number' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['Male', 'Female']), // Make gender nullable
                'zip' => $faker->postcode,
                'level' => $faker->randomElement([100, 200, 300, 400]),
                'university' => $faker->word,
                'course' => $faker->word,
                'address_type' => $faker->randomElement(['Permanent', 'Temporary']),
                'nationality' => $faker->country,
                'state' => $faker->state,
                'district' => $faker->city,
                'block_number' => $faker->randomNumber,
                'passport' => null, // Assuming a file path is stored, you might want to use a file storage system.
                'guardian_name' => $faker->name,
                'guardian_phone_number' => $faker->phoneNumber,
                'emergency' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
