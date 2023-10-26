<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $latest_recipes= Recipe::with('galleries')->latest()->get();
        $recipes= Recipe::with('galleries')->get();

        return view('frontend.homepage', compact('latest_recipes','recipes'));
    }
}
