@extends('dashboard.layouts.main')
@section('container')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Post Detail</h3>
          </div> 
          <div class="card-body">
            <div class="col-md-8">
              <h1 class="mb-2">{{ $post['title'] }}</h1>
              <div class="button-container mb-3">
                <a href="/dashboard/posts" class="btn btn-success"><i class="fas fa-chevron-left mr-1"></i>Back to all posts</a>
                <a href="" class="btn btn-warning"><i class="nav-icon far fa-edit mr-1"></i>Edit</a>
                <a href="" class="btn btn-danger"><i class="nav-icon fas fa-exclamation-triangle mr-1"></i>Delete</a>
              </div>
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">
              {!! $post['body'] !!}    
      </div>
          </div> 
        </div>       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection