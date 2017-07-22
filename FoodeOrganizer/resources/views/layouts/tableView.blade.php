<div class="wrapper">
	<section class="panel panel-primary">
		<div class="panel-heading">
			@yield('header')
		</div>

		<div>
		<table class="table table-striped table-hover table-bordered student">
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