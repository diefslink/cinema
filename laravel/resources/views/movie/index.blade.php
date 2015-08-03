@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Pelicula</th>
			</thead>
			@foreach($movies as $movie)
			<tbody>
				<td>{{$name->name}}</td>
				<td>{{$path->path}}</td>
				<td>{{$cast->cast}}</td>
				<td>{{$direction->direction}}</td>
				<td>{{$duration->duration}}</td>
				<td>
				{!!link_to_route('movie.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>

	@endsection