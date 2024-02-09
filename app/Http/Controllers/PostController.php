<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class PostController extends Controller
{
    public function index(){

        return view('posts',[
            "title" => "All Portofolio",
            "active" => "Portofolio",
            // "posts" => post::all()
            "posts" => Post::latest()->filter(request(['search', 'category']))->get()
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
