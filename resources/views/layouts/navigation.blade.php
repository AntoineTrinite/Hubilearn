<link href="../../css/dashboard.css" rel="stylesheet">
    <!-- Navigation Links -->
    <header class="header">
        @if (Route::has('login'))
            <nav x-data="{ open: false }" class="header-nav">
                
                <h1 class="nav-title"><a class="nav-link" href="{{ url('/') }}">HUBILEARN</a></h1>

                <div>
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            <x-responsive-nav-link :href="route('logout')" class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </nav>
        @endif
    </header>
</nav>
