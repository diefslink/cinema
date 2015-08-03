@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Genero</th>
			</thead>
			@foreach($genres as $genre)
			<tbody>
				<td>{{$genre->genre}}</td>
				<td>
				{!!link_to_route('genero.edit', $title = 'Editar', $parameters = $genre->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>

	@endsection