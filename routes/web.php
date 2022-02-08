<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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
    return view('posts', [
        // Eager load relationship before retrieving all posts
        'posts' => Post::latest()->with(['category', 'author'])->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['author', 'category'])
    ]);
});

Route::get('authors/{author:user_name}', function (User $author) {
    return view('posts', [
        // Find authors with respective posts, then eager load posts with relationship
        'posts' => $author->posts->load(['author', 'category'])
    ]);
});
