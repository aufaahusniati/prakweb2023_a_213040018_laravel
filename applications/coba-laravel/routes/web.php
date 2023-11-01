<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    // return 'Halaman Home';
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    // return 'Halaman About';
    return view('about', [
        "title" => "About",
        "name" => "Aufaa Husniati",
        "email" => "aufaahsnt21@gmail.com",
        "image" => "aufaa.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
