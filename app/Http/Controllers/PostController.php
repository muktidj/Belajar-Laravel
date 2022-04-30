<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('blog', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    // Tanpa Route Binding
    /*
    public function show($id) {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($id)
        ]);
    }
    */
    //Dengan Route Binding
    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
