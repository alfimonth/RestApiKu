<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');

        return [
            'nip' => $faker->numerify('#############'),
            'nama' => $faker->name,
            'tanggal_lahir' => $faker->date('Y-m-d', '2002-01-20'),
            'nomor_telepon' => $faker->phoneNumber,
            'email' => $faker->safeEmail,
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
