<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
})->middleware('auth');

Route::get("/about", function () {
    return view('about', ["name" => "Saputra Uta", "email" => "saputra.uta50@gmail.com", "image" => "saputra.jpg", "title" => "About"]);
})->middleware('auth');

Route::get("/blog", [PostController::class, 'index'])->middleware('auth');

Route::get('posts/{post:slug}', [PostController::class, 'getDetail'])->middleware('auth');

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');