@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo conductor
			<a href="{{ route('conductores.index') }}" class="btn btn-primary pull-right">Volver al listado</a>
		</h2> 

		@include('conductores.fragment.error')
		
		{!! Form::open(['route' => 'conductores.store']) !!}
			
			@include('conductores.fragment.form')
			
		{!! Form::close() !!}

	</div>
	<div class=" col-sm-4">
		mensaje
	</div>
@endsection 