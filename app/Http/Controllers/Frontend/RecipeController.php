<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Recipe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $recipes = Recipe::with('galleries');
        if($q = $request->query('search')){
            $q = str_replace('-', ' ', Str::slug($q));

            $recipes = $recipes->whereRaw('MATCH(tilte,slug) AGAINST (? IN NATURAL LANGUAGE MODE)', [$q]);
        }
        $recipes = $recipes->get();

        return view('frontend.recipe.index', compact('recipes'));
    }

    public function show(Recipe $recipe, $slug)  // Assuming you want to display a specific recipe
    {
        return view('frontend.recipe.detail', compact('recipe'));
    }
}