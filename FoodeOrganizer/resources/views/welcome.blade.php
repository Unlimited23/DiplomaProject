@extends('layouts.app')

@section('content')
<!--banner-->

    <div class="container">
        <div class="row">
            <div class="inner text-center">
                <h1 class="welcome-header">Foode Organizer</h1>
                <h2>Food To fit your lifestyle & health.</h2>
                <p>Specialized in Vegetarian Cuisine!!</p>
                <span class="lead">
                    <a class="btn btn-success btn-lg" href="{{ url('/inventory') }}" role="button">Започни</a>
                </span>
            </div>
        </div>
    </div>

<!-- / banner -->
@endsection