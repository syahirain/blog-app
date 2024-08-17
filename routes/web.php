<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('main');
});


Route::get('/blog/{slug}', function ($slug) {
    $post = Post::leftJoin('users', 'blog_posts.blog_author_id', '=', 'users.id')->where('slug', $slug)->firstOrFail();
    return view('blog_post', ['post' => $post]);
});