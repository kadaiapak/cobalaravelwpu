@extends('layouts.main')

@section('container')
<div class="container mt-4">
        <div class="row justify-content-center">
                <div class="col-md-8">
                        <h1 class="mb-2">{{ $post['title'] }}</h1>
                          <small class="text-muted">
                                        <a href="/authors/{{ $post->author->username }}">{{ $post->author->fullname }}</a> in 
                                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                </p>
                        </small>
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                      
                        {!! $post['body'] !!}    
                        
                        <a href="{{ url('/blog') }}" class="btn btn-danger">Back</a>
                        </div>
                </div>
</div>
@endsection