<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index() {
    $posts=Post::with('category')->get();
    return view('posts',compact('posts'));
}
}
