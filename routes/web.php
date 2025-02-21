<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Andre']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'post-1',
            'title' => 'Post 1',
            'author' => 'Andre',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus soluta veritatis iusto, aliquid delectus expedita consectetur earum harum error dignissimos. Tempora odio sit assumenda reiciendis exercitationem quisquam qui alias?'
        ],
        [
            'id' => 2,
            'slug' => 'post-2',
            'title' => 'Post 2',
            'author' => 'John',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non excepturi commodi exercitationem consectetur magni, optio modi soluta a corrupti explicabo, facere porro nostrum dolore earum maxime eius et saepe natus.'
        ],
        [
            'id' => 3,
            'slug' => 'post-3',
            'title' => 'Post 3',
            'author' => 'Jane',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, quod? Omnis tempore sint quas quidem non, suscipit facere voluptatibus saepe ipsum tempora tenetur aliquam temporibus odit ipsa voluptas nihil atque?'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'post-1',
            'title' => 'Post 1',
            'author' => 'Andre',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus soluta veritatis iusto, aliquid delectus expedita consectetur earum harum error dignissimos. Tempora odio sit assumenda reiciendis exercitationem quisquam qui alias?'
        ],
        [
            'id' => 2,
            'slug' => 'post-2',
            'title' => 'Post 2',
            'author' => 'John',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non excepturi commodi exercitationem consectetur magni, optio modi soluta a corrupti explicabo, facere porro nostrum dolore earum maxime eius et saepe natus.'
        ],
        [
            'id' => 3,
            'slug' => 'post-3',
            'title' => 'Post 3',
            'author' => 'Jane',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, quod? Omnis tempore sint quas quidem non, suscipit facere voluptatibus saepe ipsum tempora tenetur aliquam temporibus odit ipsa voluptas nihil atque?'
        ],
    ];

    $post = Arr::first($posts, function ($posts) use ($slug) {
        return $posts['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
