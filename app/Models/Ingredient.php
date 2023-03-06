<?php

namespace App\Models;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'ingredients';

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $guarded = [];
    
    //Relations

    public function pizzas()
	{
		return $this->belongsToMany(Pizza::class, 'pizza_ingredient', 'ingredient_id', 'pizza_id');
	}
}
