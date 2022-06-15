<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nova Dwi Lestari",
        "email" => "novavae@outlook.com",
        "image" => "nova.jpeg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "This My First Blog",
            "slug" => "this-is-first-blog",
            "author" => "Nova Dwi Lestari",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ullam nam unde tempore, a amet atque sit consequatur soluta sint quis ea enim praesentium iusto impedit rerum? Deserunt harum labore iste id magnam eligendi sequi facere maxime, possimus distinctio deleniti impedit dolorem quaerat aut similique aliquam obcaecati recusandae neque pariatur nulla omnis qui libero magni vel? Illo illum distinctio ipsum, vel, laudantium nihil reprehenderit eligendi dicta voluptates labore iusto animi odit consequatur, quia error quas saepe. Unde dolore explicabo ipsa?"
        ],
        [
            "title" => "This My Second Blog",
            "slug" => "this-is-second-blog",
            "author" => "Vae",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ullam nam unde tempore, a amet atque sit consequatur soluta sint quis ea enim praesentium iusto impedit rerum? Deserunt harum labore iste id magnam eligendi sequi facere maxime, possimus distinctio deleniti impedit dolorem quaerat aut similique aliquam obcaecati recusandae neque pariatur nulla omnis qui libero magni vel? Illo illum distinctio ipsum, vel, laudantium nihil reprehenderit eligendi dicta voluptates labore iusto animi odit consequatur, quia error quas saepe. Unde dolore explicabo ipsa?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ullam nam unde tempore, a amet atque sit consequatur soluta sint quis ea enim praesentium iusto impedit rerum? Deserunt harum labore iste id magnam eligendi sequi facere maxime, possimus distinctio deleniti impedit dolorem quaerat aut similique aliquam obcaecati recusandae neque pariatur nulla omnis qui libero magni vel? Illo illum distinctio ipsum, vel, laudantium nihil reprehenderit eligendi dicta voluptates labore iusto animi odit consequatur, quia error quas saepe. Unde dolore explicabo ipsa?"
        ],
    ];


    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}',function($slug){
    $blog_posts = [
        [
            "title" => "This My First Blog",
            "slug" => "this-is-first-blog",
            "author" => "Nova Dwi Lestari",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ullam nam unde tempore, a amet atque sit consequatur soluta sint quis ea enim praesentium iusto impedit rerum? Deserunt harum labore iste id magnam eligendi sequi facere maxime, possimus distinctio deleniti impedit dolorem quaerat aut similique aliquam obcaecati recusandae neque pariatur nulla omnis qui libero magni vel? Illo illum distinctio ipsum, vel, laudantium nihil reprehenderit eligendi dicta voluptates labore iusto animi odit consequatur, quia error quas saepe. Unde dolore explicabo ipsa?"
        ],
        [
            "title" => "This My Second Blog",
            "slug" => "this-is-second-blog",
            "author" => "Vae",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ullam nam unde tempore, a amet atque sit consequatur soluta sint quis ea enim praesentium iusto impedit rerum? Deserunt harum labore iste id magnam eligendi sequi facere maxime, possimus distinctio deleniti impedit dolorem quaerat aut similique aliquam obcaecati recusandae neque pariatur nulla omnis qui libero magni vel? Illo illum distinctio ipsum, vel, laudantium nihil reprehenderit eligendi dicta voluptates labore iusto animi odit consequatur, quia error quas saepe. Unde dolore explicabo ipsa?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ullam nam unde tempore, a amet atque sit consequatur soluta sint quis ea enim praesentium iusto impedit rerum? Deserunt harum labore iste id magnam eligendi sequi facere maxime, possimus distinctio deleniti impedit dolorem quaerat aut similique aliquam obcaecati recusandae neque pariatur nulla omnis qui libero magni vel? Illo illum distinctio ipsum, vel, laudantium nihil reprehenderit eligendi dicta voluptates labore iusto animi odit consequatur, quia error quas saepe. Unde dolore explicabo ipsa?"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"]===$slug){
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});



Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);


Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');