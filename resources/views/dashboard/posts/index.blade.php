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
            <a href="/dashboard/posts/create" class="btn btn-primary">Tambah Post Baru</a>
          </div> 
          <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                 {{ session('success') }} 
                </div>
            @endif
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 3%">#</th>
                      <th style="width: 47%">Title</th>
                      <th style="width: 20%">Category</th>
                      <th style="width: 30px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="far fa-eye"></i></a>
                          <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-warning"><i class="far fa-edit"></i></a>
                          <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><i class="fas fa-exclamation-triangle"></i></a>
                        </td>
                      </tr> 
                    @endforeach
                  </tbody>
                </table>
              </div> 
        </div>       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection