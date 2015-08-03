@extends('layouts.admin')
  @section('content')
    @include('alerts.request')
    
    {!!Form::model($genre,['route'=> ['genero.update',$genre->id],'method'=>'PUT'])!!}
      @include('genero.form.genero')
      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}

    {!!Form::open(['route'=> ['genero.destroy',$genre->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
  @endsection