<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
    }
    public static function find($slug): array {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            return abort(404);
        }
        return $post;
    }
}
