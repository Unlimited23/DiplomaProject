@extends('layouts.app')
@include('modals.inventory.create')
@include('modals.inventory.update')

@section('content')

<div class="container">
	<div class="form-group">
		<section class="col-md-12 centered-table">
			<!-- heading -->
			<div class="row">
				<div class="panel outline-transparent col-md-12">
					<button id="add-product" type="button" class="btn btn-default btn-lg glyphicon glyphicon-plus"></button>

					<input id="inventory-name" type="text" placeholder="Име на инвентар">

					<form class="form-inline my-2 my-lg-0 pull-right">
						<input id="search-inventory" class="" type="text" placeholder="Търси...">
						<button class="btn btn-success btn-outline my-2 my-sm-0" type="submit">Търси</button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="panel col-md-10 col-sm-offset-1">
					<div class="media">
						<div class="media-body">
							<div class="row">
								<div class="col-md-2"><h4><b>Продукт</b><h4></div>
								<div class="col-md-2"><h4><b>Цена</b><h4></div>
								<div class="col-md-2"><h4><b>Количество</b><h4></div>
								<div class="col-md-3 text-center"><h4><b>Срок на годност</b><h4></div>
								<div class="col-md-3 text-center"><h4><b>Здравословен</b><h4></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1">
					<img src="{{ url('/img/001-cow.png') }}" class="side-img" alt="Image"/>
				</div>
				<div class="panel col-md-10">
					<div class="media">
						
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-2">
											<span>Кисело мляко</span>
										</div>
										<div class="col-sm-2">
											<span>0.99 лв</span>
										</div>
										<div class="col-sm-2 text-center">
											<span>5</span>
										</div>
										<div class="col-sm-3 text-center">
											24-09-2017
										</div>
										<div class="col-sm-3">
											<img src="{{ url('/img/vegetarian-mark-90.png') }}" class="pull-right inventory-mark" alt="vegetarian-mark" width="36" height="36"/>
											<button class="btn btn-success outline-success my-2 my-sm-0 pull-right" type="button">Здравословен</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1">
					<img src="{{ url('/img/004-grain.png') }}" class="side-img" alt="Image"/>
				</div>
				<div class="panel col-md-10">
					<div class="media">
						
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-2">
											<span>Овесени ядки</span>
										</div>
										<div class="col-sm-2">
											<span>4.99 лв</span>
										</div>
										<div class="col-sm-2 text-center">
											<span>1</span>
										</div>
										<div class="col-sm-3 text-center">
											24-09-2017
										</div>
										<div class="col-sm-3">
											<img src="{{ url('/img/vegetarian-mark-90.png') }}" class="pull-right inventory-mark" alt="vegetarian-mark" width="36" height="36"/>
											<button class="btn btn-success outline-success my-2 my-sm-0 pull-right" type="button">Здравословен</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button>
				</div>
			</div>


			<div class="row">
				<div class="col-md-1">
					<img src="{{ url('/img/013-cigarettes.png') }}" class="side-img" alt="Image"/>
				</div>
				<div class="panel col-md-10">
					<div class="media">
						
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-2">
											<span>Цигари</span>
										</div>
										<div class="col-sm-2">
											<span>5.99 лв</span>
										</div>
										<div class="col-sm-2 text-center">
											<span>1</span>
										</div>
										<div class="col-sm-3 text-center">
											24-09-2018
										</div>
										<div class="col-sm-3">
										<img src="{{ url('/img/warning.png') }}" class="pull-right inventory-mark" alt="bad-product" width="36" height="36"/>							
										<button id="replace_product" class="btn btn-danger outline-danger my-2 my-sm-0 pull-right" type="button">Замени продукт</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-default btn-lg glyphicon glyphicon-remove"></button>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
							</li>
						</ul>
						<button id="finish-inventory" type="button" class="btn btn-default btn-success btn-lg pull-right">Завърши списъка</button>
					</nav>

				</div>
			</div>
		</section>
	</div>
</div>

@endsection

@section('script')

<script>
	$('#add-product ,#replace_product').on('click', function() {
		$('#create-product').modal();
	});

	$('#paste-product').on('click', function() {
		$('#inventory-product').modal();
	});

	$('#datetimepicker1').datepicker();
</script>

@endsection