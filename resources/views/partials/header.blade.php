<header>
    <div class="banner">
        <div class="container">
            <span><a href="">DC POWER VISA</a></span>
            <span><a href="">ADDICTIONAL DC SITES</a></span>
        </div>
    </div>
    <nav>
        <div class="container flexer center-cross between">
            <div class="logo"><img src="{{ asset('../img/dc-logo.png') }}" alt="" class="logo"></div>
            <ul class="navbar flexer center-cross">
                <li><a href="">CHARACTERS</a></li>
                <li class="{{ Request::route()->getName() == 'comic' || Request::route()->getName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">COMICS</a></li>
                <li class="{{ Request::route()->getName() == 'movies' ? 'active' : '' }}"><a href="{{ route('movies') }}">MOVIES</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">GAMES</a></li>
                <li><a href="">COLLECTABLES</a></li>
                <li><a href="">VIDEOS</a></li>
                <li><a href="">FANS</a></li>
                <li><a href="">NEWS</a></li>
                <li><a href="">SHOP</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>

            </div>
        </div>
    </nav>
    <div class="jumbotron">
        
    </div>
</header>
