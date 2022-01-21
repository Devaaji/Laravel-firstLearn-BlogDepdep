<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Deva Aji Saputra",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem ratione, ullam quidem saepe voluptatum et laboriosam debitis similique dolores facere. Odit id amet illo numquam perferendis repellat, sequi ipsam sunt earum architecto dicta. Vitae, delectus totam. Nemo adipisci et possimus aut minima, ea natus iusto quas, eveniet facere cupiditate ducimus magni velit blanditiis ipsam repellendus optio modi. Nesciunt veritatis consequatur et, quae impedit unde natus quas. Natus dolore perferendis ducimus vitae cumque aperiam temporibus, labore rerum, maiores aliquam, quos fuga!"   
        ],
        [
        "title" => "Judul Post depdep",
        "slug" => "judul-post-kedua",
        "author" => "Depdep",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem ratione, ullam quidem saepe voluptatum et laboriosam debitis similique dolores facere. Odit id amet illo numquam perferendis repellat, sequi ipsam sunt earum architecto dicta. Vitae, delectus totam. Nemo adipisci et possimus aut minima, ea natus iusto quas, eveniet facere cupiditate ducimus magni velit blanditiis ipsam repellendus optio modi. Nesciunt veritatis consequatur et, quae impedit unde natus quas. Natus dolore perferendis ducimus vitae cumque aperiam temporibus, labore rerum, maiores aliquam, quos fuga!"   
        ],
        [
        "title" => "Judul Post Ketiga",
        "slug" => "judul-post-ketiga",
        "author" => "Depdep",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem ratione, ullam quidem saepe voluptatum et laboriosam debitis similique dolores facere. Odit id amet illo numquam perferendis repellat, sequi ipsam sunt earum architecto dicta. Vitae, delectus totam. Nemo adipisci et possimus aut minima, ea natus iusto quas, eveniet facere cupiditate ducimus magni velit blanditiis ipsam repellendus optio modi. Nesciunt veritatis consequatur et, quae impedit unde natus quas. Natus dolore perferendis ducimus vitae cumque aperiam temporibus, labore rerum, maiores aliquam, quos fuga!"   
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
       

        return $posts->firstWhere('slug', $slug);
    }
}
