@extends('layouts.tableView')
@include('modals.inventory')
<section id="inventory-banner">
	<div class="bg-color">
		@include('layouts.sidemenu')
	</div>
</section>

@section('header')
	<span class="">Последно пазаруване</span>
	<!-- Single button -->
	<div class="btn-group pull-right">
	<button id="add-product" type="button" class="btn btn-default"> 
		Добави <span class="fa fa-plus"></span>
	</button>
	</div>
@endsection

@section('head')

	<th>Продукт</th>
	<th>Количество</th>
	<th>Описание</th>
	<th>Срок на годност</th>

@endsection

@section('foot')
@endsection

@section('body')

	@foreach($products as $product)
	<tr>
		<td>
			{{ $product->product_name }}
		</td> 
		<td>
			{{ $product->pivot->quantity}}
		</td>
		<td>
			{{ $product->product_description}}
		</td>
		<td>
			{{ $product->product_expiry_date}}
		</td>
	</tr>
	@endforeach
@endsection

@section('script')
<script>
	//showing modal form
	$('#add-product').on('click', function() {
		$('#inventory-product').modal();
	});

	//adding new product
	$('#save-inventory').on('click', function() {
		var data = {};
		data['product'] = $('#new-product').val();
		data['quantity'] = $('#product-quantity').val();

	});
</script>
@endsection