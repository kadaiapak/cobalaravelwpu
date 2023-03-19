 <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Home' ? 'active' : null }}" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'About' ? 'active' : null }}" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Blog' ? 'active' : null }}" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'All Categories' ? 'active' : null }}" href="{{ url('/categories') }}">Categories</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @auth
                        {{ null }}
                        @else
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Registration' ? 'active' : null }}" href="{{ url('/registration') }}">Registration</a>
                        </li>
                        @endauth
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome Back, {{ auth()->user()->fullname }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </ul>
                        </li>
                        @else
                         <li class="nav-item">
                            <a class="nav-link {{ $title == 'Login' ? 'active' : null }}" href="{{ url('/login') }}">Login</a>
                        </li>  
                        @endauth
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                    </ul>
                
                </div>
            </div>
        </nav>