<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Recipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('galleries')->get();
        return view('frontend.recipe.index', compact('recipes'));
    }

    public function show(Recipe $recipe, $slug)  // Assuming you want to display a specific recipe
    {
        return view('frontend.recipe.detail', compact('recipe'));
    }
}