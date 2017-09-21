@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">Инвентар 1</div>
                            <div class="col-sm-6 text-right"><button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p><h3>Паста болонезе</h3></p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group history-scrollable" >
                        <li class="list-group-item">Паста</li>
                        <li class="list-group-item">Доматено пюре</li>
                        <li class="list-group-item">Магданоз</li>
                        <li class="list-group-item">Риган</li>
                        <li class="list-group-item">Кайма</li>
                        <li class="list-group-item">Червен пипер</li>
                        <li class="list-group-item">Лук</li>
                        <li class="list-group-item">Кашкавал</li>
                        <li class="list-group-item">Овесени яки</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">Инвентар 2</div>
                            <div class="col-sm-6 text-right"><button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p><h3>&nbsp</h3></p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group history-scrollable" >
                        <li class="list-group-item">Дъвки</li>
                        <li class="list-group-item">Моркови</li>
                        <li class="list-group-item">Кроасан</li>
                        <li class="list-group-item">Ананас</li>
                        <li class="list-group-item">Ориз</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> 
                        <div class="row">
                            <div class="col-sm-6">Инвентар 3</div>
                            <div class="col-sm-6 text-right"><button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p><h3>Картофена супа</h3></p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group history-scrollable" >
                        <li class="list-group-item">Картофи</li>
                        <li class="list-group-item">Фиде</li>
                        <li class="list-group-item">Мляко</li>
                        <li class="list-group-item">Яйца</li>
                        <li class="list-group-item">Копър</li>
                        <li class="list-group-item">Моркови</li>
                        <li class="list-group-item">Лук</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">Инвентар 4</div>
                            <div class="col-sm-6 text-right"><button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p><h3>&nbsp</h3></p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group history-scrollable" >
                        <li class="list-group-item">Сьомга</li>
                        <li class="list-group-item">Маслини</li>
                        <li class="list-group-item">Хляб</li>
                        <li class="list-group-item">Овесени яки</li>
                        <li class="list-group-item">Краставици</li>
                        <li class="list-group-item">Зеле</li>
                        <li class="list-group-item">Кашу</li>
                    </ul>
                </div>
            </div>

            <div class="row">
				<div class="col-sm-12 text-center">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
							</li>
							<li><a href="#">1</a></li>
							<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>



        </div>
    </div>

@endsection