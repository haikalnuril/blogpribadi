<?php

namespace App\Models;


class post
{
    static $portofolio = [        ["title" => "Portofolio 1",
    "slug" => "portofolio-1",
    "app" => "Photoshop",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugit soluta distinctio saepe assumenda necessitatibus cupiditate voluptatem, nostrum dolorum ipsa. Nisi, facere! Libero corrupti adipisci ipsum dolorum dicta sapiente quae reiciendis! Ipsum dolorem fuga natus reprehenderit, laborum eos expedita iusto saepe quos quasi quibusdam sapiente error repudiandae optio cupiditate libero debitis. Porro itaque tempore cum, veritatis praesentium minus explicabo esse quia veniam minima cumque enim iste ipsa, ad, illo dolore blanditiis. Sed maiores deserunt fugiat accusantium quia sit, commodi veritatis dolores minima fuga dolor corporis laboriosam eos recusandae expedita animi ratione qui veniam quas ducimus modi facere, explicabo debitis? Molestiae."
    ],
    [
    "title" => "Portofolio 2",
    "slug" => "portofolio-2",
    "app" => "After Effect",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugit soluta distinctio saepe assumenda necessitatibus cupiditate voluptatem, nostrum dolorum ipsa. Nisi, facere! Libero corrupti adipisci ipsum dolorum dicta sapiente quae reiciendis! Ipsum dolorem fuga natus reprehenderit, laborum eos expedita iusto saepe quos quasi quibusdam sapiente error repudiandae optio cupiditate libero debitis. Porro itaque tempore cum, veritatis praesentium minus explicabo esse quia veniam minima cumque enim iste ipsa, ad, illo dolore blanditiis. Sed maiores deserunt fugiat accusantium quia sit, commodi veritatis dolores minima fuga dolor corporis laboriosam eos recusandae expedita animi ratione qui veniam quas ducimus modi facere, explicabo debitis? Molestiae."
    ]];

    public static function all(){
        return collect (self::$portofolio);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}



