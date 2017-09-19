@extends('layouts.app')
@include('modals.inventory')

@section('content')

<div class="container">
	<div class="form-group">
		<section class="col-md-9 centered-table">
			<!-- heading -->
			<div class="row">
				<div class="panel outline-transparent col-md-12">
					<button type="button" class="btn btn-default btn-lg glyphicon glyphicon-plus"></button>
					

					<form class="form-inline my-2 my-lg-0 pull-right">
						<input class="" type="text" placeholder="Search...">
						<button class="btn btn-success btn-outline my-2 my-sm-0" type="submit">Търси</button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="panel col-md-11">
					<div class="media">
						<div class="media-left media-middle">
							<a href="#">
								<img src="{{ url('/img/001-cow.png') }}" class="media-object" alt="Image"/>
							</a>
						</div>
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12 text-center">
									<span>Кисело мляко</span>
									<img src="{{ url('/img/vegetarian-mark-90.png') }}" class="pull-right inventory-mark" alt="vegetarian-mark" width="36" height="36"/>
									<button class="btn btn-success outline-success my-2 my-sm-0 pull-right" type="button">Здравословен</button>
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
				<div class="panel col-md-11">
					<div class="media">
						<div class="media-left media-middle">
							<a href="#">
								<img src="{{ url('/img/004-grain.png') }}" class="media-object" alt="Image"/>
							</a>
						</div>
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12 text-center">
									<span>Овесени ядки</span>
									<img src="{{ url('/img/vegetarian-mark-90.png') }}" class="pull-right inventory-mark" alt="vegetarian-mark" width="36" height="36"/>
									<button class="btn btn-success outline-success my-2 my-sm-0 pull-right" type="button">Здравословен</button>
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
				<div class="panel col-md-11">
					<div class="media">
						<div class="media-left media-middle">
							<a href="#">
								<img src="{{ url('/img/009-coffee-cup.png') }}" class="media-object" alt="Image"/>
							</a>
						</div>
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12 text-center">
									<span>Кафе</span>
									<img src="{{ url('/img/vegetarian-mark-90.png') }}" class="pull-right inventory-mark" alt="vegetarian-mark" width="36" height="36"/>
									<button class="btn btn-success outline-success my-2 my-sm-0 pull-right" type="button">Здравословен</button>
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
				<div class="panel col-md-11">
					<div class="media">
						<div class="media-left media-middle">
							<a href="#">
								<img src="{{ url('/img/013-cigarettes.png') }}" class="media-object" alt="Image"/>
							</a>
						</div>
						<div class="media-body">
							<div class="row vcenter">
								<div class="col-sm-12 text-center">
									<span>Цигари</span>
									<img src="{{ url('/img/warning.png') }}" class="pull-right inventory-mark" alt="bad-product" width="36" height="36"/>
									<button id="replace_product" class="btn btn-danger outline-danger my-2 my-sm-0 pull-right" type="button">Замени продукт</button>
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
							<li><a href="#">3</a></li>
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
	$('#replace_product').on('click', function() {
		$('#inventory-product').modal();
	});
</script>

@endsection