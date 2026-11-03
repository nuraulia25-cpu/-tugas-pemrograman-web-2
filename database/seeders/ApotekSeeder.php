<?php

namespace Database\Seeders;

use App\Models\Apotek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApotekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apotek::factory(50)->create();
    }
}
