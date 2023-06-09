<?php

namespace App\Http\Controllers;

use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Posts',
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.posts.create', [
            'title' => 'Create Post',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => ' required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required' 
        ]);
        
        $validatedData['user_id'] = auth()->user()->id;
        // function strip tags yaitu functi yang menghapus tag html yang ada pada isi content
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New Post Added :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('dashboard.posts.show', [
            'title' => 'Post Detail',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
            return response()->json(['slug' => $slug]);
    }
}
