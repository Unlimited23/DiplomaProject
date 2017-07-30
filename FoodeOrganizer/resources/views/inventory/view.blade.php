@extends('layouts.tableView')

<section id="inventory-banner">
	<div class="bg-color">
		@include('layouts.sidemenu')
	</div>
</section>

@section('header')
	<span class="label label-info">Последно пазаруване</span>
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