<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aufaa Husniati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus quia adipisci temporibus! Dolorem, dolores quam placeat nulla consequuntur officiis modi aperiam quibusdam temporibus non possimus adipisci, expedita distinctio reprehenderit excepturi. Quo doloremque omnis nisi accusamus deserunt non autem repellat ad, ab, porro ducimus minus quasi adipisci alias officiis quaerat vitae eligendi ipsum quis cumque! Officiis, possimus praesentium? Beatae, facilis inventore magni maiores aliquid error obcaecati, repudiandae eius voluptatem harum doloribus magnam facere ratione nam nisi fuga officiis laboriosam nulla."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Upeh",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, repellat dignissimos et fugiat, voluptatibus dolor veritatis perferendis illum necessitatibus ea, reiciendis odio eius assumenda inventore! Aut natus architecto eos facere! Animi est possimus atque perspiciatis maiores voluptatum impedit voluptatem dolor, et eligendi iusto quod nam error alias cumque sit quidem velit nemo cum debitis. Dolores autem error quod delectus optio nulla voluptas voluptates corrupti deleniti! Hic sapiente a tempore asperiores maxime. Ipsam eveniet nam provident vero eos praesentium aperiam nobis sed ad placeat fugiat, voluptate, dolorem impedit harum reiciendis. Sint omnis dolorum commodi cumque velit voluptate, hic soluta quia dolor."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
