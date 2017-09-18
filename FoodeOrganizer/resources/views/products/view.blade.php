@extends('layouts.tableView')
@include('modals.products')

@section('header')
	<span class="">Продукти</span>
	<!-- Single button -->
	<div class="btn-group pull-right">
	<button id="add-product" type="button" class="btn btn-default"> 
		Добави <span class="fa fa-plus"></span>
	</button>
	</div>
@endsection

@section('head')

	<th>Име на Продукт</th>
	<th>Описание</th>
	<th>Цена</th>
	<th>Категория Продукт</th>
	<th>Здравословен</th>

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
			{{ $product->product_description}}
		</td>
		<td>
			{{ $product->product_price}} лв.
		</td>
		<td>
			
				@if ($product->product_type == 1)
					Бобови
				@elseif ($product->product_type == 2)
					Зърнени
				@elseif ($product->product_type == 3)
					Млечни
				@elseif ($product->product_type == 4)
					Животински	
				@elseif ($product->product_type == 5)
					Месо
				@elseif ($product->product_type == 6)
					Вегетариански
				@elseif ($product->product_type == 7)
					Вегански
				@elseif ($product->product_type == 8)
					Напитки
				@elseif ($product->product_type == 9)
					Други
				@endif
		</td>
		<td>
			@if ($product->isHealthy)
				Да
			@else 
				Не
			@endif
		</td>
		<td>
			<a href="{{ URL::to('/products/edit/', $product->product_id) }}" class="btn btn-success" role="button">Редактирай</a>

			<a href="{{ URL::to('/products/delete/', $product->product_id) }}" class="btn btn-danger" role="button">Изтрий</a>
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
	// $('#save-inventory').on('click', function() {
	// 	var data = {};
	// 	data['product'] = $('#new-product').val();
	// 	data['quantity'] = $('#product-quantity').val();

	// });
</script>
@endsection