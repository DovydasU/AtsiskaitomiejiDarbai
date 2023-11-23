<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('index')}}" class="logo">
                        <img src="images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('index')}}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('about')}}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('deals')}}" class="{{ request()->routeIs('deals') ? 'active' : '' }}">Deals</a></li>
                        <li><a href="{{ route('reservation')}}" class="{{ request()->routeIs('reservation') ? 'active' : '' }}">Reservation</a></li>
                        <li>@if (Route::has('login'))
                          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                              @auth
                                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                              @else
                                  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
          
                                  @if (Route::has('register'))
                                      <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                  @endif
                              @endauth
                          </div>
                      @endif</li>
                    </ul>   
                    {{-- <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> --}}
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>