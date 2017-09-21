@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">Вписване</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                                    <label for="user_email" class="col-md-4 control-label">Е-мейл адрес</label>

                                    <div class="col-md-6">
                                        <input id="user_email" type="email" class="form-control" name="user_email" value="{{ old('user_email') }}" required autofocus>

                                        @if ($errors->has('user_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('user_password') ? ' has-error' : '' }}">
                                    <label for="user_password" class="col-md-4 control-label">Парола</label>

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
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомни ме
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                            Впиши се
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Забравена парола
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
