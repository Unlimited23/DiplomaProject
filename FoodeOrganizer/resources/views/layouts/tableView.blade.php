@extends('layouts.app')

@section('table')

<div class="wrapper">
	<section id="tableView" class="panel panel-success">
		<div class="panel-heading">
			@yield('header')
		</div>

		<!-- <div class="panel-body">
			<form action="#" method="GET" id="frm-search">
				<table>
					<tr>
						<td><input type="search" name="search" class="form-control" placeholder="Search..."></td>
					</tr>
				</table>
			</form>
		</div> -->

		<div class="panel body">
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