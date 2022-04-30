<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Blogpost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//tidak menggunakan controller -> closure
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Ukhti Humayra",
        "email" => "ukhtinasution@gmail.com",
        "belajar" => "Microsoft Excel"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

//menggunakan controller

Route::get('/blog', [PostController::class, 'index']);

// Halaman single blog tanpa route model binding
//Route::get('/blog/{slug}', [PostController::class, 'show']);

//menggunakan route model binding :slug
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
