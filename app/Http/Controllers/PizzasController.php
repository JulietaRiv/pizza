<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaRequest;
use App\Models\Ingredient;
use App\Models\Pizza;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class PizzasController extends Controller
{
    public function index()
	{
		return view('pizzas.index', ['pizzas' => Pizza::all()]);
	}

	public function form(Pizza $pizza = null)
	{
		return view('pizzas.form', ['pizza' => $pizza, 'ingredients' => Ingredient::all()]);
	}

	public function store(PizzaRequest $request)
	{
        $ingredients = Ingredient::select('cost')->whereIn('id', $request->ingredients)->get();
        $costs = 0;
        foreach ($ingredients as $ingredient){
            $costs += $ingredient->cost;
        }
        
        $pizza = $request->id? Pizza::find($request->id): new Pizza();    
        $pizza->name = $request->name;
        $pizza->price = $costs * 2;
        $pizza->save();
        
        $pizza->ingredients()->sync($request->ingredients);

		return redirect()->route('pizzas')->with('success, Pizza was stored successfully');
	}

	public function destroy(Pizza $pizza)
	{
        if ($pizza->delete()){
            return redirect()->route('pizzas')->with('success', 'Pizza deleted successfully');
        } else {
            return redirect()->route('pizzas')->with('error', 'Something went wrong, the pizza wasnt deleted');
        }
	}
}
