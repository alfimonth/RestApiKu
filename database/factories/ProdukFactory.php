<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
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
            'nama_produk' => 'Produk ' . $i,
            'stok' => rand(10, 100),
            'harga' => rand(1000, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
