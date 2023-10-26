<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\RecipeRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index(): View
    {
        $recipes = Recipe::get();

        return view('admin.recipes.index', compact('recipes'));
    }

    public function create(): View
    {
        return view('admin.recipes.create');
    }

    public function store(RecipeRequest $request)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->title, '-');
            Recipe::create($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('admin.recipes.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Recipe $recipe): View
    {
        return view('recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe): View
    {
        return view('admin.recipes.edit', compact('recipe'));
    }

    public function update(RecipeRequest $request, Recipe $recipe): RedirectResponse
    {
        if ($request->validated()) {
            $slug = Str::slug($request->title, '-');
            $recipe->update($request->validated() + ['slug'=> $slug]);
        }

        return redirect()->route('admin.recipes.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Recipe $recipe): RedirectResponse
    {
        $recipe->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
