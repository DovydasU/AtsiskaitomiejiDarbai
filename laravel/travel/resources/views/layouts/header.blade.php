<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{ route('index')}}" class="logo">
                        <img src="{{ asset('images/photos/logo.png') }}" alt="">
                    </a>
                    <ul class="nav">
                        <li><a href="{{ route('index')}}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('about')}}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('deals')}}" class="{{ request()->routeIs('deals') ? 'active' : '' }}">Deals</a></li>
                        <li><a href="{{ route('reservation')}}" class="{{ request()->routeIs('reservation') ? 'active' : '' }}">Reservation</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>