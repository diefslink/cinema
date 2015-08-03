@extends('layouts.admin')
  @section('content')
    @include('alerts.request')
    
    {!!Form::model($movie,['route'=> ['movie.update',$movie->id],'method'=>'PUT'])!!}
      @include('movie.form.movie')
      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}

    {!!Form::open(['route'=> ['movie.destroy',$movie->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
  @endsection