<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
    return view('index');
});

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::get('/categories/{id}/posts',[CategoryController::class,'showPostByCategory'])->name('categoryPosts');


