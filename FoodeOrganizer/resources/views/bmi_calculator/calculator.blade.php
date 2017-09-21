@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">

            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="row">
                            Калкулатор за телесна маса
                        </div>
                    </div>

                    <!-- panel body -->
                    <div class="panel-body">

                        <div id="calculator" class="col-xs-6">
                            <div class="row">
                                <label for="user_height" class="col-md-4 control-label">Височина (см.)</label>
                                <div class="col-sm-6">
                                    <input id="user_email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label for="user_height" class="col-md-4 control-label">Тегло (кг.)</label>
                                <div class="col-sm-6">
                                    <input id="user_email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label for="user_height" class="col-md-4 control-label">Възраст</label>
                                <div class="col-sm-6">
                                    <input id="user_email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label for="user_height" class="col-md-4 control-label">Пол</label>
                                <div class="col-sm-6">
                                    <input name="csex" id="csex1" value="m"  type="radio"> Мъж
                                    <input name="csex" id="csex2" value="f" type="radio"> Жена
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10">
                                    <button id="finish-inventory" type="button" class="btn btn-default btn-success btn-lg pull-right">Изчисли</button>
                                </div>
                            </div>
                        </div>
                        
                        <div id="bmi" class="col-xs-6">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">
                                    <div class="row">
                                        Вашият индекс на телесна маса е
                                    </div>
                                </div>

                                <!-- panel body -->
                                <div class="panel-body">
                                    <h1>28.65 кг/м^2</h1>
                                </div>
                            </div>
                        </div>                                          
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection