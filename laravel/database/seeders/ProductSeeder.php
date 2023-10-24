<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Concrete towel',
            'Garlic toothpaste',
            'Invisibility cloak'
        ];

        foreach ($names as $name) {
            Product::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
