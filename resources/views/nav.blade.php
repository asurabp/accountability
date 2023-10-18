<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://cdn.icon-icons.com/icons2/4014/PNG/64/sales_percentage_store_online_shopping_commerce_monitor_icon_255538.png"
                alt="My Logo" width="40" height="40">
            @guest
                Guest!
            @else
                {{ Auth::user()->name }}
            @endguest
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('issuances.index') }}">Issuances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index') }}">Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.index') }}">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buildups.index') }}">Buildups</a>
                </li>
            </ul>

            {{-- <ul class="navbar-nav ml-auto">
                @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user') }}">User</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                @endif
            </ul> --}}
        </div>
    </div>
</nav>
