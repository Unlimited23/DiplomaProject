@extends('layouts.app')

@section('table')

<div class="wrapper">
	<section id="inventory-table" class="panel panel-success">
		<div class = "panel-heading">
			<h3 class = "panel-title">
				@yield('header')
			</h3>
		</div>
			

		<div>
		<table class="table table-striped table-hover table-bordered inventory">
			<thead>
		        @yield('head')
			</thead>
			<tfoot>
		        @yield('foot')
			</tfoot>
			<tbody>
			@yield('body')
			</tbody>
		</table>
		</div>
	</section>
</div>

@endsection