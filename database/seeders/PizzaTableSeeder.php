<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Pizza;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Pizza::truncate();
        DB::table('pizza_ingredient')->truncate();
        $names = ['Hawaian', 'Pepperoni', 'Heavy', 'Exotic', 'Margarita'];
        for ($x = 0; $x < 5; $x++){

            $ingredients = Ingredient::select('id', 'cost')->inRandomOrder()->limit(6)->get();
            $ids = [];
            $costs = 0;
            foreach ($ingredients as $ingredient){
                $ids[] = $ingredient->id;
                $costs += $ingredient->cost;
            }
            
            $pizza = Pizza::create([
                'name' => $names[$x],
                'price' => $costs * 2
            ]);
            
            $pizza->ingredients()->attach(array_values($ids));
        }
        Schema::enableForeignKeyConstraints();
    }
}
