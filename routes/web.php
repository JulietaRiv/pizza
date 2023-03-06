<?php

use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\PizzasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzasController::class, 'index'])->name('pizzas');
Route::get('/pizza/{pizza?}', [PizzasController::class, 'form'])->name('pizza');
Route::post('/storePizza', [PizzasController::class, 'store'])->name('storePizza');
Route::get('/pizzas/delete/{pizza}', [PizzasController::class, 'destroy'])->name('deletePizza');

Route::get('/ingredients', [IngredientsController::class, 'index'])->name('ingredients');
Route::get('/ingredient', [IngredientsController::class, 'form'])->name('ingredient');
Route::post('/storeIngredient', [IngredientsController::class, 'store'])->name('storeIngredient');
Route::get('/ingredient/delete/{ingredient}', [IngredientsController::class, 'destroy'])->name('deleteIngredient');
