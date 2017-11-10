<div class="form-group">
	{!! Form::label('nombres', 'Nombre del conductor') !!}
	{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('apellidos', 'Apellidos del conductor') !!}
	{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tipodedocumento', 'Tipo de documento') !!}
	{!! Form::text('tipodedocumento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('documento', 'Documento') !!}
	{!! Form::text('documento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fechadenacimiento', 'Fecha de nacimiento') !!}
	{!! Form::date('fechadenacimiento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('genero', 'Genero') !!}
	{!! Form::text('genero', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>