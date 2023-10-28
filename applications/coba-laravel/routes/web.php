<?php

use Illuminate\Support\Facades\Route;

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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name"=> "Aufaa Husniati",
        "email" => "aufaahsnt21@gmail.com",
        "image" => "aufaa.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Aufaa Husniati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, accusantium voluptate accusamus ratione tenetur ut dolore ipsum et, ea, incidunt officia quas. Aut rerum sapiente repudiandae accusantium maxime, quam rem excepturi sunt soluta eveniet consequatur provident, saepe incidunt atque veritatis laborum consequuntur adipisci, totam inventore. Minus dolore vitae neque aliquam, inventore ex sapiente autem quaerat consectetur eaque mollitia aperiam nisi, dolorem cum iste? Adipisci sit quasi minus est nobis. Quis excepturi quas cumque, est quo earum aperiam molestias aut perspiciatis?"
        ],
        
        [
        
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Upeh",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores ex harum voluptatum nihil dicta blanditiis corrupti nostrum minus optio consequatur deleniti quae laborum, corporis quidem in dolore repellendus accusamus earum voluptas necessitatibus reprehenderit nemo repudiandae aut. Odit ipsam eveniet veniam temporibus ex officia animi inventore beatae aspernatur! Dolorum ducimus, provident iusto repellendus officia tempora magni soluta neque commodi quasi facilis eos nisi sit accusantium voluptates reprehenderit minima ipsum expedita voluptas. Delectus rerum nihil harum distinctio, unde a qui consequuntur tempore quod itaque possimus magnam ipsa veritatis doloribus ut provident deleniti rem illum voluptate consequatur animi? Odio culpa aliquid a non."
        ],
    ];

    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});


// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Aufaa Husniati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, accusantium voluptate accusamus ratione tenetur ut dolore ipsum et, ea, incidunt officia quas. Aut rerum sapiente repudiandae accusantium maxime, quam rem excepturi sunt soluta eveniet consequatur provident, saepe incidunt atque veritatis laborum consequuntur adipisci, totam inventore. Minus dolore vitae neque aliquam, inventore ex sapiente autem quaerat consectetur eaque mollitia aperiam nisi, dolorem cum iste? Adipisci sit quasi minus est nobis. Quis excepturi quas cumque, est quo earum aperiam molestias aut perspiciatis?"
        ],
        
        [
        
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Upeh",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores ex harum voluptatum nihil dicta blanditiis corrupti nostrum minus optio consequatur deleniti quae laborum, corporis quidem in dolore repellendus accusamus earum voluptas necessitatibus reprehenderit nemo repudiandae aut. Odit ipsam eveniet veniam temporibus ex officia animi inventore beatae aspernatur! Dolorum ducimus, provident iusto repellendus officia tempora magni soluta neque commodi quasi facilis eos nisi sit accusantium voluptates reprehenderit minima ipsum expedita voluptas. Delectus rerum nihil harum distinctio, unde a qui consequuntur tempore quod itaque possimus magnam ipsa veritatis doloribus ut provident deleniti rem illum voluptate consequatur animi? Odio culpa aliquid a non."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) 
        if($post["slug"] === $slug) {
            $new_post = $post;
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});