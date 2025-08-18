<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Evinda', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Evinda Retno Jayanti',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Esse totam voluptatibus nostrum perferendis sunt! Deserunt, 
            cum nam fuga porro aliquid obcaecati. 
            Obcaecati et unde, velit earum veniam perferendis ea facere.',
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Evinda Retno Jayanti',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Provident et minus in? Qui voluptates, unde assumenda eum facere maxime dolores repellendus 
            perferendis veritatis rerum atque officia necessitatibus sapiente temporibus ducimus.',
        ]
    ]]);
});

Route::get('/posts/{id}', function($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Evinda Retno Jayanti',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Esse totam voluptatibus nostrum perferendis sunt! Deserunt, 
            cum nam fuga porro aliquid obcaecati. 
            Obcaecati et unde, velit earum veniam perferendis ea facere.',
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Evinda Retno Jayanti',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Provident et minus in? Qui voluptates, unde assumenda eum facere maxime dolores repellendus 
            perferendis veritatis rerum atque officia necessitatibus sapiente temporibus ducimus.',
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($id) {
            return $post['id'] == $id;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});