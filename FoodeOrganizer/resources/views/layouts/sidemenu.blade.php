<header id="header">
    <nav class="navbar navbar-default navbar-toggleable-md navbar-light bg-faded">
        <div class="collapse navbar-collapse">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Начало
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    
                @if (Route::has('login'))
                    @if (Auth::check())
                        <li><a href="{{ url('/inventory') }}">Инвентар</a></li>
                        <li><a href="{{ url('/products') }}">Продукти</a></li>
                        <!-- <li><a href="{{ url('/profile') }}">Профил</a></li> -->
                        
                    @endif
                @endif
                        <!-- <li><a href="{{ url('/recipes') }}">Рецепти</a></li>                    -->
                        <li><a href="{{ url('/bmiCalculator') }}">ИТМ Калкулатор</a></li>
                @if (Route::has('login'))
                    @if (Auth::check())
                        <li><a href="{{ url('/history') }}">История на инвентара</a></li>
                    @endif
                @endif
                </ul>
                        
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                @if (Route::has('login'))
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-expanded="false">
                                Здравейте, {{{ Auth::user()->user_fname }}} {{{ Auth::user()->user_lname }}} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="fa fa-btn fa-sign-out">
                                        Отпиши се
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>   
                    @else
                        <li><a href="{{ url('/login') }}">Впиши се</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    @endif
                @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- collapsed menu -->
    <div class="container">

        <div id="mySidenav" class="sidenav">
            <!-- <div id="sidenavSearch" class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-success-sm" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div> -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{ url('/products') }}">Profile</a>
            <a href="{{ url('/products') }}">Purchase History</a>
            <a href="{{ url('/products') }}">Recipes</a>
            <a href="{{ url('/products') }}">BMI Calculator</a>
            @if (Route::has('login'))
                @if (Auth::check())
                    <a href="{{ url('/inventory') }}">Inventory</a>
                    <a href="{{ url('/products') }}">Products</a>
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
            <!-- <a href="javascript:void(0)" onclick="closeNav()">Exit</a> -->
        </div>
        <!-- Use any element to open the sidenav -->
        <!-- <span id="collapsed-menu" onclick="openNav()" class="pull-right menu-icon">☰</span> -->
    </div>
</header>