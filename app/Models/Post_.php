<?php

namespace App\Models;

class Post {
    static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts =  static::all();
        return $posts->firstWhere('slug', $slug);
    }
}