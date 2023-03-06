<?php

namespace App\Models;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $table = 'pizzas';

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $guarded = [];

    //Relations

    public function ingredients()
	{
		return $this->belongsToMany(Ingredient::class, 'pizza_ingredient', 'pizza_id', 'ingredient_id');
	}
}
