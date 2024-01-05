<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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

Route::get("/", function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get("/about", function () {
    return view('about', ["name" => "Saputra Uta", "email" => "saputra.uta50@gmail.com", "image" => "saputra.jpg", "title" => "About"]);
});

Route::get("/blog", [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'getDetail']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post By Category: $category->name",
        'posts' => $category->posts->load('user', 'category'),
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('blog', [
        'title' => "Post By Authors: $author->name",
        'posts' => $author->posts->load('category', 'user'),
    ]);
});