<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Foode Organizer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans" rel="stylesheet" type="text/css">
        
        <!-- Styles -->    
        {!! HTML::style('css/font-awesome.min.css') !!}
        {!! HTML::style('css/bootstrap.min.css') !!}
        {!! HTML::style('css/style.css') !!}
         {!! HTML::style('css/custom.css') !!} 

    </head>
    <body>

        <!--banner-->
        <section id="banner">
        <div class="bg-color">
            <header id="header">
                <div class="container">
                    <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#about">About</a>
                    <a href="#event">Event</a>
                    <a href="#menu-list">Menu</a>
                    <a href="#contact">Book a table</a>
                    </div>
                    <!-- Use any element to open the sidenav -->
                    <span onclick="openNav()" class="pull-right menu-icon">☰</span>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="inner text-center">
                        <h1 class="logo-name">Delicious</h1>
                        <h2>Food To fit your lifestyle & health.</h2>
                        <p>Specialized in Indian Cuisine!!</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- / banner -->

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    <!-- scripts -->
    {{ Html::script('js/jquery.min.js') }}
    {{ Html::script('js/jquery.easing.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/jquery.mixitup.min.js') }}
    {{ Html::script('js/custom.js') }}
    
    </body>
</html>
