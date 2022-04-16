<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Halaman Pertama",
            "slug" => "judul-halaman-pertama",
            "author" => "Mukti DJ",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, porro? Consectetur, quaerat? Vero veritatis inventore ex consequatur ea amet sit neque, dolor provident at porro quaerat quibusdam, iure quo est."
        ],
        [
            "title" => "Halaman Kedua",
            "slug" => "judul-halaman-kedua",
            "author" => "DJ Itkum",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, porro? Consectetur, quaerat? Vero veritatis inventore ex consequatur ea amet sit neque, dolor provident at porro quaerat quibusdam, iure quo est."
        ],

    ];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// Halaman single blog
Route::get('/blog/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Halaman Pertama",
            "slug" => "judul-halaman-pertama",
            "author" => "Mukti DJ",
            "body" => "Kenalan dulu ya, saya Mukti Dwi Jatmoko. Sekarang bekerja sebagai System analyst dan merangkap menjadi Project Manager beginner di eoa tech, salah satu entitas divisi IT dari eoagold yang bergerak dibidang logam mulia. Sehari-hari pekerjaan saya adalah membantu peradaban eoa dalam membuat aplikasi yang dapat mempercepat proses bisnis mereka. Harapannya membuat sebuah blog ini, agar ilmu yang saya punya dan pengalaman sehari-hari dalam kerjaan, kehidupan dan lain-lain bisa menjadi sebuah solusi , inspirasi, wawasan baru buat pembaca. Enjoy."
        ],
        [
            "title" => "Halaman Kedua",
            "slug" => "judul-halaman-kedua",
            "author" => "DJ Itkum",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, porro? Consectetur, quaerat? Vero veritatis inventore ex consequatur ea amet sit neque, dolor provident at porro quaerat quibusdam, iure quo est."
        ],

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
