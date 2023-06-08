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
        static $i = 0;
        $i++;
        return [
            'nip' => '87432184678',
            'nama' => 'Pegawai ' . $i,
            'tgl_lahir' => '2002-01-20',
            'no_telp' => '812198541',
            'email' => 'example@gmail.com',
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
