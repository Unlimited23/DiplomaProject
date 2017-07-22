<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Foode Organizer') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet"> 
    <!-- Styles -->    
     {!! HTML::style('css/font-awesome.min.css') !!} 
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('css/custom.css') !!} 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
        </div> -->
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{ Html::script('js/jquery.min.js') }}
    {{ Html::script('js/jquery.easing.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/jquery.mixitup.min.js') }}
    {{ Html::script('js/custom.js') }}
</body>
</html>
