<?php

namespace Database\Seeders;

use Database\Seeders\IngredientTableSeeder;
use Database\Seeders\PizzaTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            IngredientTableSeeder::class,
            PizzaTableSeeder::class
        ]);
    }
}
