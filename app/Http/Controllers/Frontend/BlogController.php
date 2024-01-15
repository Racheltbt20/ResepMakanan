<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        $categories = Category::get();

        return view('frontend.blog.index', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {
        $categories = Category::get();

        return view('frontend.blog.detail', compact('post', 'categories'));
    }

    public function category(Category $category) 
    {
        $posts = Post::where('category_id', $category->id)->get();
        $categories = Category::get();

        return view('frontend.blog.index', compact('posts', 'categories', 'category'));

    }
}
