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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">   -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {!! HTML::style('css/font-awesome.min.css') !!} 
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/style.css') !!}
    <!-- {!! HTML::style('css/custom.css') !!}  -->
    
</head>
<body>
    <div id="app">
        <section id="banner">
            <div class="bg-color">
                @include('layouts.sidemenu')
                @yield('content')
                @yield('table')
            </div>
            
        </section>
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{ Html::script('js/jquery.min.js') }}
    {{ Html::script('js/jquery.easing.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/jquery.mixitup.min.js') }}
    {{ Html::script('js/custom.js') }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.table').DataTable({
                pageLength: 5,
                language : {
                    url : 'http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Bulgarian.json'
                },
            });
        });

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
        
    </script>
    @yield('script')
</body>
</html>
