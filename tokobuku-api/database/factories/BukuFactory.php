<?php

namespace Database\Factories;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(),         // Judul buku dengan kalimat acak
            'penulis' => $this->faker->name(),           // Nama penulis acak
            'harga' => $this->faker->randomFloat(2, 10000, 500000),  // Harga buku acak antara 10.000 hingga 500.000
            'stok' => $this->faker->numberBetween(1, 100),  // Stok buku acak antara 1 hingga 100
            'kategori_id' => Kategori::factory()
        ];
    }
}
