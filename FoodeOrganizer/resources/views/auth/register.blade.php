@extends('layouts.app')

@section('content')
<section id="banner">
    <div class="bg-color">
        <div class="container">
        @include('layouts.sidemenu')
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                                    <label for="user_email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="user_email" type="text" class="form-control" name="user_email" value="{{ old('user_email') }}" required>

                                        @if ($errors->has('user_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('user_username') ? ' has-error' : '' }}">
                                    <label for="user_username" class="col-md-4 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input id="user_username" type="text" class="form-control" name="user_username" value="{{ old('user_username') }}" required autofocus>

                                        @if ($errors->has('user_username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('user_password') ? ' has-error' : '' }}">
                                    <label for="user_password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="user_password" type="password" class="form-control" name="user_password" required>

                                        @if ($errors->has('user_password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="user_password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
