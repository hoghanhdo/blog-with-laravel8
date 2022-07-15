<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with(['category', 'author'])
                        ->latest()
                        ->filter(request(['search', 'category', 'author']))
                        ->paginate()
                        ->withQueryString() // to included ?category white paginating
        ]);
    }

    public function show(Post $post)
    {
        $post->load(['comments', 'comments.author']);
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
