@extends('layouts.tableView')

@section('header')
	<a href="{!! URL::to('createCourse/') !!}" class="btn btn-default" role="button">Нов Курс</a>
@endsection

@section('head')

	<th>Име</th>
	<th>Операции</th>

@endsection

@section('foot')
@endsection

@section('body')
	@foreach($courses as $course)
	<tr>
		<td>{{ $course->course_name }}</td>
		<td>
			<a href="{{ URL::to('editCourse', $course->course_id) }}" class="btn btn-success" role="button">Редактирай</a>

			<a href="{{ URL::to('deleteCourse', $course->course_id) }}" class="btn btn-danger" role="button">Изтрий</a>
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')

@endsection