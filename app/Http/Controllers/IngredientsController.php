<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index()
	{
		return view('ingredients.index', ['ingredients' => Ingredient::all()]);
	}

	public function form(Ingredient $ingredient = null)
	{
		return view('ingredients.form', ['ingredient' => $ingredient]);
	}

	public function store(Request $request)
	{
		Ingredient::create([
			'name' => $request->name,
			'cost' => $request->cost,
		]);
		return redirect()->route('ingredients')->with('success, Ingredient was stored successfully');
	}

	public function destroy(Ingredient $ingredient)
	{
		if (count($ingredient->pizzas) > 0){
            return redirect()->route('ingredients')->with('error', 'This ingredient is used in at least one pizza, so it cant be deleted');
        } else {
            $ingredient->delete();
            return redirect()->route('ingredients')->with('success', 'Ingredient deleted successfully');
        }
	}
}
