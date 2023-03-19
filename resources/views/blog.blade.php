@extends('layouts.main')

@section('container')
<form class="d-flex" role="search" action="/blog">
	@if (request('category'))
		<input type="hidden" name="category" value="{{ request('category') }}">
	@endif
	<input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search" value="{{ request('search') }}">
	<button class="btn btn-outline-success" type="submit" >Search</button>
</form>
@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
	<div class="card-body">
		<div class="containert text-center">
			<h5 class="card-title"><a href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
			<small class="text-muted">
				<p>By. 
					<a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->fullname }}</a> in 
					<a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
					{{ $posts[0]->created_at->diffForHumans() }}
				</p>
			</small>
			<p class="card-text">{{ $posts[0]->excerpt }}</p>
			<a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
		</div>
	</div>
</div>

<div class="container">
	<h5>{!! $title !!}</h5>
	<div class="row">
		@foreach ($posts->skip(1) as $p)
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="position-absolute p-3 text-white" style="background-color: rgba(0,0,0,0.7)">
						<a href="/blog?category={{ $p->category->slug }}" class="text-decoration-none text-white">
						{{ $p->category->name }}
						</a>
				</div>
				<img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
				<div class="card-body">
				<h5 class="card-title">{{ $p->title }}</h5>
				<small class="text-muted">
					<p>By. 
					<a href="/authors/{{ $p->author->username }}">{{ $p->author->fullname }}</a>
					{{ $p->created_at->diffForHumans() }}
					</p>
				</small>
				<p class="card-text">{{ $p->excerpt }}</p>
				<a href="/blog/{{ $p['slug'] }}" class="btn btn-primary">Read more</a>
			</div>
		</div>
	</div>
	@endforeach
    </div>
</div>

@else
<div class="container">
	<p class="tet-center fs-4">No Post</p>
</div>
@endif
@endsection