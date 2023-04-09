<?php

namespace App\Models;


class Post
{
    private static $blog_posts =
    [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-petama",
            "author" => "Aziz Naufal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, doloribus tempore officia delectus numquam aspernatur voluptatum, laboriosam ab quaerat illum obcaecati dolore, ea maxime suscipit nostrum neque at. Numquam harum quos explicabo mollitia, odio culpa quis expedita vitae, neque, voluptatem eum voluptates? Incidunt, necessitatibus. Dolore, dolor. Similique facilis pariatur quaerat totam delectus accusamus aut porro expedita quidem, facere nam maiores, nihil at neque, alias quibusdam sapiente molestiae repellendus! Debitis expedita iure corporis sunt tempore. Consequuntur quam labore omnis maiores veritatis."

        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus accusamus odio quaerat vero officiis quo quia ad impedit? Dolores deleniti suscipit quisquam? Ut quidem illo voluptatem dolorem ea adipisci tenetur quo amet eveniet nemo earum esse numquam, accusamus vel quod deserunt quia, alias repellendus sint, similique qui explicabo pariatur. Atque nisi voluptas ipsum non error dolore, saepe, ducimus aperiam nesciunt magnam delectus possimus suscipit vel deserunt quas sed excepturi laudantium nobis ad odit cupiditate rerum provident molestias. Minus consectetur maiores numquam, sunt consequatur mollitia non sint praesentium necessitatibus, repudiandae maxime voluptates accusamus? Natus adipisci sapiente cupiditate, perspiciatis necessitatibus eum pariatur?"

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
