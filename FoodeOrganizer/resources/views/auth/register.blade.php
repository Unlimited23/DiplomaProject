@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">Регистрация</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                                    <label for="user_email" class="col-md-4 control-label">Е-мейл адрес</label>

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
                                    <label for="user_username" class="col-md-4 control-label">Потребителско Име</label>

                                    <div class="col-md-6">
                                        <input id="user_username" type="text" class="form-control" name="user_username" value="{{ old('user_username') }}" required autofocus>

                                        @if ($errors->has('user_username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('user_fname') ? ' has-error' : '' }}">
                                    <label for="user_fname" class="col-md-4 control-label">Име</label>

                                    <div class="col-md-6">
                                        <input id="user_fname" type="text" class="form-control" name="user_fname" value="{{ old('user_fname') }}" required autofocus>

                                        @if ($errors->has('user_fname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_fname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('user_username') ? ' has-error' : '' }}">
                                    <label for="user_lname" class="col-md-4 control-label">Фамилия</label>

                                    <div class="col-md-6">
                                        <input id="user_lname" type="text" class="form-control" name="user_lname" value="{{ old('user_lname') }}" required autofocus>

                                        @if ($errors->has('user_lname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('user_lname') }}</strong>
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
                                    <label for="password-confirm" class="col-md-4 control-label">Потвърди Парола</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="user_password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                            Регистрация
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
