@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar conductor
			<a href="{{ route('conductores.index') }}" class="btn btn-primary pull-right">Volver al listado</a>
		</h2> 

		@include('conductores.fragment.error')

		{!! Form::model($conductor, ['route' => ['conductores.update', $conductor->id], 'method' => 'PUT']) !!}
			
			@include('conductores.fragment.form')
			
		{!! Form::close() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('conductores.fragment.aside')
	</div>
@endsection 