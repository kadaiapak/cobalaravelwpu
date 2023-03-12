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
                    <form class="d-flex" role="search" action="/blog">
                        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-outline-success" type="submit" >Search</button>
                    </form>
                </div>
            </div>
        </nav>