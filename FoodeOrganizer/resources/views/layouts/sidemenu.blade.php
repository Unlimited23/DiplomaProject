<header id="header">
    <div class="container">
        <div id="mySidenav" class="sidenav">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default-sm" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">Shop</a>
            <a href="#about">Purchase History</a>
            <a href="#event">Recipies</a>
            <a href="#menu-list">Products</a>
            @if (Route::has('login'))
                @if (Auth::check())
                    <a href="{{ url('/inventory') }}">Inventory</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            @endif
            <a href="javascript:void(0)" onclick="closeNav()">Exit</a>
        </div>
        <!-- Use any element to open the sidenav -->
        <span onclick="openNav()" class="pull-right menu-icon">☰</span>
    </div>
</header>