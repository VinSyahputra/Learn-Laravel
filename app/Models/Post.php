<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Postingan pertama',
            'author' => 'Vin Syahputra',
            'slug' => 'postingan-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quas eos laborum veritatis? Architecto nam quos ea, optio adipisci eveniet nobis et placeat laboriosam? Amet iure eos sint a aliquam?'
        ],
        [
            'title' => 'Postingan kedua',
            'author' => 'Vin Site',
            'slug' => 'postingan-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quas eos laborum veritatis? Architecto nam quos ea, optio adipisci eveniet nobis et placeat laboriosam? Amet iure eos sint a aliquam?'
        ],
        [
            'title' => 'Postingan Ketiga',
            'author' => 'Vin D Cyborg',
            'slug' => 'postingan-ketiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quas eos laborum veritatis? Architecto nam quos ea, optio adipisci eveniet nobis et placeat laboriosam? Amet iure eos sint a aliquam?'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        // karena property static maka menggunakan self, jika bukan maka menggunakan $this->
        // collect merupakan function untuk array agar dapat menggunakan method bawaan dari laravel
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
