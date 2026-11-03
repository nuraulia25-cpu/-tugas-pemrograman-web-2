<?php

namespace Database\Factories;

use App\Models\Apotek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Apotek>
 */
class ApotekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_obat' => fake()->randomElement([
                'Paracetamol',
                'Amoxicillin',
                'Ibuprofen',
                'Antasida',
                'Omeprazole',
                'Cetirizine',
                'CTM',
                'Vitamin C',
                'OBH Combi',
                'Promag',
                'Bodrex',
                'Panadol',
                'Mixagrip',
                'Diapet',
                'Antangin',
                'Tolak Angin',
                'Betadine',
                'Neurobion',
                'Salonpas',
                'Komix'
            ]),
            'kategori' => fake()->randomElement(['Tablet', 'Kapsul', 'Sirup', 'Salep', 'Vitamin',]),
            'stok' => fake()->numberBetween(1, 100),
            'harga' => fake()->numberBetween(5000, 50000),
            'tanggal_expired' => fake()->date(),
        ];
    }
}
