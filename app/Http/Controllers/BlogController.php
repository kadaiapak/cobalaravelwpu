<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {

        return view('blog', [
            'title' => 'All Post',
            'posts' => Post::latest()->filter()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('blog_detail', [
            'title' => 'Blog Detail',
            'post' => $post
        ]);
    }
}
