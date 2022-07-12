<?php

namespace App\Models;



class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "johanes kp",
            "body" => "Sementara itu, kalimat memiliki beberapa jenis yang membedakannya satu sama lain. Berikut jenis-jenis kalimat dalam bahasa Indonesia yang merdeka.com rangkum dari Bola",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "johanes kp",
            "body" => "Sementara itu, kalimat memiliki beberapa jenis yang membedakannya satu sama lain. Berikut jenis-jenis kalimat dalam bahasa Indonesia yang merdeka.com rangkum dari Bola"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
