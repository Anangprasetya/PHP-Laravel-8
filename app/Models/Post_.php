<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Anangprasetya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit inventore et eaque commodi, asperiores at saepe! Perferendis, ducimus possimus obcaecati suscipit nisi commodi quo corporis recusandae aperiam totam voluptate unde ea eum sapiente necessitatibus veritatis sed sunt architecto dolorem delectus. Aliquid temporibus, provident iure maiores sunt omnis reprehenderit aliquam sapiente corporis, magnam expedita officiis pariatur dicta itaque nemo excepturi dolorem maxime quod. Veritatis vel voluptatibus molestiae deserunt earum ratione nostrum fugit, iure assumenda consectetur officia! Dolor vitae architecto sit mollitia."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "DoDwi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum! Fuga culpa similique omnis non? Ipsa nisi non odit mollitia optio blanditiis iusto labore modi atque! Saepe delectus odit suscipit illo officiis officia iusto quae. Architecto reiciendis delectus impedit quia ea iusto voluptas iste consectetur tempora, ullam laudantium tempore autem assumenda fuga minus! Nisi repellat assumenda rem exercitationem quis est nostrum autem similique deleniti dolores fugit amet expedita, totam ratione maiores quod hic dolorem repudiandae. Deleniti ab eveniet nesciunt accusamus sed fuga ratione incidunt quisquam. Quam atque ratione obcaecati aut magni nobis ad, similique distinctio eaque, libero ex corrupti laudantium architecto dolores aliquid saepe est assumenda recusandae repellendus deleniti voluptatem asperiores blanditiis eum? Ipsa sequi impedit minima ea, a repellat?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
