@extends('layouts.main')

@section('container')
<div class="container mt-4">
	<div class="row">
	@foreach ($categories as $c)
		<div class="col-md-4">
			<a href="/blog?category={{ $c->slug }}">
				<div class="card text-white bg-dark">
					<img src="https://source.unsplash.com/600x400?{{ $c->name }}" class="card-img" alt="{{ $c->name }}">
					<div class="card-img-overlay d-flex align-items-center">
						<h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $c->name }}</h5>
					</div>
				</div>
			</a>
		</div>
	@endforeach
	</div>
</div>
@endsection