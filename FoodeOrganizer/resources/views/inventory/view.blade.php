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

	<th>Име</th>
	<th>Продукт</th>
	<th>Количество</th>

@endsection

@section('foot')
@endsection

@section('body')
	@foreach($usersProd as $item)
	<tr>
		<td>
			{{ $item->user_username }} {{ $item->user_fname }} {{ $item->user_lname }}
		</td> 
		<td>
			{{ $item->inventory->first()->parent_product_id }}
		</td>
		<td>
			{{ $item->inventory->first()->quantity }}
		</td>
	</tr>
	@endforeach
@endsection