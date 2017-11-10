@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			{{ $conductor->nombres }}
			<a href="{{ route('conductores.edit', $conductor->id) }}" class="btn btn-primary pull-right">Editar</a>
		</h2>
		<p>
			<strong>Apellidos: </strong>
			{{ $conductor->apellidos }}
		</p>
		<p>
			<strong>Tipo de documento: </strong>
			{{ $conductor->tipodedocumento }}
		</p>
		<p>
			<strong>Documento: </strong>
			{{ $conductor->documento }}
		</p>
		<p>
			<strong>Fecha de nacimiento: </strong>
			{{ $conductor->fechadenacimiento }}
		</p>
		<p>
			<strong>Genero: </strong>
			{{ $conductor->genero }}
		</p>
	</div>
	<div class=" col-sm-4">
		<!--@include('conductores.fragment.aside')-->
	</div>
@endsection 