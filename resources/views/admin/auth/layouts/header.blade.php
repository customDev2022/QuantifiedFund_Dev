<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Quantified Funds</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">

                @auth
                    @if (Auth::user()->user_type == 'Admin')
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nc-icon nc-chart-pie-35"></i> Dashboard
                            </a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="nav-item">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            this.closest('form').submit();"
                                    class="nav-link">
                                    <i class="nc-icon nc-button-power"></i> Log out
                                </a>
                            </li>
                        </form>
                        {{-- @else --}}
                    @endif
                @else
                    <li class="nav-item ">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="nc-icon nc-mobile"></i> Login
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('register') }}" class="nav-link">
                            <i class="nc-icon nc-badge"></i> Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
