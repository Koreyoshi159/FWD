<nav class="navbar is-dark  has-text-white">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                FWD
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/"
                   class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                    Home
                </a>
                <a href="/contact"
                   class="navbar-item {{ Request::path() === '/contact' ? "is-active" : "" }}">
                    Contact
                </a>
                <a href="/404"
                   class="navbar-item {{ Request::path() === '/404' ? "is-active" : "" }}">
                    404
                </a>
                <a href="/500"
                   class="navbar-item {{ Request::path() === '/500' ? "is-active" : "" }}">
                    500
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        @guest
                            <a class="button is-link" href="{{ route('register') }}">
                                Sign up
                            </a>
                            <a class="button is-light" href="{{ route('login') }}">
                                Login
                            </a>
                        @else
                            <a class="button is-light" href="{{ route('logout') }}">
                                Logout
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
