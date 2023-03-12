<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::latest();


        if(request('search')) {
            $posts->where('title', 'like', '%' .request('search') . '%')
            ->orwhere('body', 'like', '%' .request('search') . '%' ); 
        }

        return view('blog', [
            'title' => 'All Post',
            'posts' => $posts->get()
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
