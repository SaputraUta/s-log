<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Getting Started with PHP',
            'slug' => 'judul-post-pertama',
            'author' => 'Alice Johnson',
            'body' => 'PHP is a server-side scripting language that is widely used for web development.'
        ],
        [
            'title' => 'JavaScript Fundamentals',
            'slug' => 'judul-post-kedua',
            'author' => 'Bob Williams',
            'body' => 'Learn the basics of JavaScript, a powerful scripting language for building dynamic web pages.'
        ],
        [
            'title' => 'Introduction to Python Programming',
            'slug' => 'judul-post-kettiga',
            'author' => 'Charlie Davis',
            'body' => 'Python is a versatile and easy-to-learn programming language, suitable for various applications.'
        ],
        [
            'title' => 'Web Development with ReactJS',
            'slug' => 'judul-post-keempat',
            'author' => 'David Miller',
            'body' => 'Explore ReactJS, a JavaScript library for building user interfaces, and its role in modern web development.'
        ],
        [
            'title' => 'Data Science with Python and Pandas',
            'slug' => 'judul-post-kelima',
            'author' => 'Eva Robinson',
            'body' => 'Discover how to use Python and Pandas for data manipulation and analysis in the field of data science.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $detail_post = static::all();
        return $detail_post->firstWhere('slug', $slug);
    }
}
