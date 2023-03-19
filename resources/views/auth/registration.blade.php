
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href="{{ ('/frontend/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ ('/frontend/assets/dist/css/sign-in.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="{{ url('/registration') }}" method="post">
    @csrf
    <img class="mb-4" src="{{ ('/frontend/assets/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
      <input  type="text" class="form-control @error('fullname') is-invalid @enderror" id="floatingInput" placeholder="full name" name="fullname" value="{{ old('fullname') }}">
      <label for="floatingInput">Full Name</label>
      @error('fullname')
          <div class="invalid-feedback">
              {{ $message }}
           </div>
      @enderror
    </div>
    <div class="form-floating">
      <input  type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="username" name="username" value="{{ old('username') }}">
      <label for="floatingInput">Username</label>
      @error('username')
          <div class="invalid-feedback">
              {{ $message }}
           </div>
      @enderror
    </div>
    <div class="form-floating">
      <input  type="text" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
      <label for="floatingInput">Email address</label>
      @error('email')
          <div class="invalid-feedback">
              {{ $message }}
           </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
      @error('password')
          <div class="invalid-feedback">
              {{ $message }}
           </div>
      @enderror
    </div>
    <div class="form-floating mb-2">
      <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPasswordDua" placeholder="Confirm Password" name="password_confirmation">
      <label for="floatingPasswordDua">Confirm Password</label>
      @error('password_confirmation')
          <div class="invalid-feedback">
              {{ $message }}
           </div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
  </body>
</html>
