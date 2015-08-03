<div class="form-group">
	{!!Form::label('movie','Movie: ')!!}
	{!!Form::text('movie',null, ['id'=>'movie','class'=>'form-control', 'placeholder' => 'Nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('path','Path: ')!!}
	{!!Form::text('path',null, ['id'=>'path','class'=>'form-control', 'placeholder' => 'Ingresa un path para esta pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('cast','Cast: ')!!}
	{!!Form::text('cast',null, ['id'=>'cast','class'=>'form-control', 'placeholder' => 'Ingresa el Cast de esta pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('direction','Direction: ')!!}
	{!!Form::text('direction',null, ['id'=>'direction','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del director'])!!}
</div>
<div class="form-group">
	{!!Form::label('duration','Duracion: ')!!}
	{!!Form::text('duration',null, ['id'=>'duration','class'=>'form-control', 'placeholder' => 'Ingressa la duracion de esta pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('genre_id','Genero: ')!!}
	{!!Form::text('genre_id',null, ['id'=>'genre_id','class'=>'form-control', 'placeholder' => 'Ingressa el genero de esta pelicula'])!!}
</div>