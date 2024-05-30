<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index') }}"><span><img
                    src="{{ setting('site_logo') != null ? asset(setting('site_logo')) : '' }}" alt="logo"></span>
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link e" href="{{ route('index') }}" id="navbardrop">Home</a>

                </li>
                <li class="nav-item">
                    <a class='nav-link' href='{{ route('about') }}'>About Us</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href={{ route('service') }}>Services</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href={{ route('faq') }}>FAQ</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href='{{ route('pricing') }}'>Pricing</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href={{ route('contact') }}>Contact</a>
                </li>
                <li class="lh-55px"><a href="#" class="btn login-btn ml-50">Login!</a></li>
            </ul>
        </div>
    </div>
</nav>
