<?php


use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page',[
        "title" => "Home",
        'active'=>"Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'active'=>"About",
        "name" => "Haikal Nuril Abiyit",
        "email" => "haikal.nuril23@gmail.com",
        "image" => "nurilll.png"
    ]);
});





Route::get('/portofolio', [PostController::class, 'index']);

// halaman single post

Route::get('portofolio/{post:slug}', [PostController::class, 'show']);


route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active'=>"Category",
        'categories'=> Category::all()
    ]);
});


route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post By category : $category->name",
        'active'=>"Portofolio",
        'posts'=> $category ->posts->load('author', 'category')
    ]);
} );

route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title'=> "Post By Author : $author->name",
        'active'=>"Portofolio",
        'posts'=>$author->posts->load('author', 'category')
    ]);
});


route::get('/login', [LoginController::class, 'index']);

route::get('/register', [RegisterController::class, 'index']);