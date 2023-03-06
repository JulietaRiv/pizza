<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Ingredient::truncate();
		Ingredient::insert([
            ['name' => 'mozzarela', 'cost' => 1],
            ['name' => 'jam', 'cost' => 0.5],
            ['name' => 'onion', 'cost' => 0.5],
            ['name' => 'mushroom', 'cost' => 2],
            ['name' => 'tomato', 'cost' => 0.8],
            ['name' => 'pepperoni', 'cost' => 0.7],
            ['name' => 'pineapple', 'cost' => 2],
            ['name' => 'cucumber', 'cost' => 0.5],
            ['name' => 'carrot', 'cost' => 0.7],
            ['name' => 'olives', 'cost' => 2.1],
            ['name' => 'shrimp', 'cost' => 2.5],
            ['name' => 'crab', 'cost' => 2.7],
            ['name' => 'egg', 'cost' => 0.4],
            ['name' => 'bacon', 'cost' => 1.9],
            ['name' => 'peper', 'cost' => 1.5],
            ['name' => 'chicken', 'cost' => 1],
            ['name' => 'sausages', 'cost' => 1.2],
            ['name' => 'basil', 'cost' => 0.8],
            ['name' => 'oregano', 'cost' => 0.5],
            ['name' => 'provolone', 'cost' => 1.5]
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
