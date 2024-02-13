<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }

        if(request('author')){
            $author=User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }

        return view('posts',[
            "title" => "All Portofolio" . $title,
            "active" => "Portofolio",
            // "posts" => post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function show(Post $post){

        return view('post', [
            "title" => "Single Post",
            "active" => "Portofolio",
            "post" => $post
        ]);
    }
}
