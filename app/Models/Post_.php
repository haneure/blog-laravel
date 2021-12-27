<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Posts 1",
            "slug" => "posts-1",
            "author" => "Christian Halim",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit recusandae inventore, nulla error perferendis deserunt facilis pariatur. Obcaecati repudiandae omnis, eos molestiae, error aliquam odio asperiores autem laudantium ipsam officiis. Obcaecati itaque laboriosam laudantium eveniet ut est repudiandae, quas fuga nesciunt numquam non. Explicabo quaerat nobis expedita asperiores tempore dolore obcaecati eum eveniet aspernatur. Quae sed, molestiae, ab corrupti sint ipsa vero eos necessitatibus expedita alias reiciendis aperiam voluptates sit harum cum. Dignissimos recusandae laboriosam neque repellendus, doloremque deserunt rerum!"
        ],
        [
            "title" => "Posts 2",
            "slug" => "posts-2",
            "author" => "Kirigaya Kazuto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus autem vero quod. Repellendus vel quam, deleniti minima ad magni adipisci ipsa sed tenetur officiis sit non corporis voluptatum iure consequuntur quos. Repudiandae, reprehenderit! Molestiae, tempore! Nisi accusantium quaerat non vel dicta ipsa ut esse nesciunt in omnis repellat libero nihil molestias quas optio voluptate tenetur aliquid debitis natus incidunt, minima totam, sequi itaque. At, saepe corporis reiciendis eveniet aspernatur eligendi quod reprehenderit cumque praesentium, asperiores alias consectetur molestiae itaque explicabo laborum facilis tempora neque! Enim iste et atque, illum, laborum quam magni non deserunt dignissimos eligendi illo qui aut delectus!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
