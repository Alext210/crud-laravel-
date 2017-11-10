@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de conductores
			<a href="{{ route('conductores.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
	</div>
	<br/>
	@include('conductores.fragment.info')
	<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Conductores</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($conductores as $conductor)
				<tr>
					<td>{{ $conductor->id }}</td>
					<td>
						<strong>{{ $conductor->nombres }}</strong>
						{{ $conductor->apellidos }}
					</td>
					<td width="20px">
						<a href="{{ route('conductores.show', $conductor->id) }}" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
						<a href="{{ route('conductores.edit', $conductor->id) }}" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						<form action="{{ route('conductores.destroy', $conductor->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">
								Borrar
							</button> 
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $conductores->render() !!}
	</div>
	<div class=" col-sm-4">
		<!--@include('conductores.fragment.aside')-->
	</div>
@endsection 