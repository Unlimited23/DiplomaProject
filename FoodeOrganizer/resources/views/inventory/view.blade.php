@extends('layouts.app')
@include('modals.inventory')

@section('content')

<div class="container">
	<div class="form group">
		<div class="row">
			<section class="col-md-9">

				<div class="row">
					<div class="panel col-md-12">
						<div class="media">
							<div class="media-left media-middle">
								<a href="#">
									<img src="{{ url('/img/001-cow.png') }}" class="media-object" alt="Image"/>
								</a>
							</div>
							<div class="media-body">
							<h4 class="media-heading">Middle aligned media</h4>

							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="panel col-md-9">
						<div class="media">
							<div class="media-left media-middle">
								<a href="#">
									<img src="{{ url('/img/001-cow.png') }}" class="media-object" alt="Image"/>
								</a>
							</div>
							<div class="media-body">
							<h4 class="media-heading">Middle aligned media</h4>
							...
							</div>
						</div>
					</div>
				</div>

			</section>
		</div>
	</div>
</div>

@endsection