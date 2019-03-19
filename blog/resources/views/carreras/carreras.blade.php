@extends('layouts.admin')

@section('titulo','Carreras')

@section('contenido')

	<h2>LISTA DE CARRERAS</h2>

	<table class="table">
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>CARRERA</th>
			<th>LOGO</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		</tr>
@foreach($carreras as $carrera)
		<tr>
			<td>{{($loop->index+1)}}</td>
			<td>{{$carrera->numero}}</td>
			<td>{{$carrera->nombre}}</td>
			<td>{{$carrera->logo}}</td>
			<td><a class="btn btn-primary" href="/carreras/{{$carrera->id}}/edit" role="button">Editar</a></td>
			<td>
				<form method="post" action="/carreras/{{$carrera->id}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="_method" value="DELETE">
					<input class="btn btn-danger" type="submit" name="Value" value="Eliminar">
				</form>
			</td>
		</tr>
@endforeach
	</table>

@endsection