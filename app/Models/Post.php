<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Evinda Retno Jayanti',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Esse totam voluptatibus nostrum perferendis sunt! Deserunt, 
            cum nam fuga porro aliquid obcaecati. 
            Obcaecati et unde, velit earum veniam perferendis ea facere.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Evinda Retno Jayanti',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Provident et minus in? Qui voluptates, unde assumenda eum facere maxime dolores repellendus 
            perferendis veritatis rerum atque officia necessitatibus sapiente temporibus ducimus.',
        ]
        ];
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
