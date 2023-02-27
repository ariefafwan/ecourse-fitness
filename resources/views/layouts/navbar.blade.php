<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar" data-aos="fade-up" data-aos-delay="50">
            @if (Route::has('login'))
                    @auth
                    <ul>
                        <a class="btn-book-a-table" href="{{ url('/home') }}">Home</a>
                        <a class="btn-book-a-table" href="{{ route('logout') }}">Logout</a>
                    </ul>
                    @else
                    <ul>
                        <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
                    </ul>
                    @if (Route::has('register'))
                    <ul>
                        <a class="btn-book-a-table" href="{{ route('register') }}">Register</a>
                    </ul>
                        @endif
                    @endauth
            @endif
            
        </nav><!-- .navbar -->        
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
