<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('posts')->get();
        return $categories;
    }

    public function showPostByCategory($catId)
    {
        $categories = Category::with('posts')->where('id', '=', $catId)->get();
        return view('category', compact('categories'));
    }
}
