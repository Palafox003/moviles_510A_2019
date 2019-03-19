@extends('layouts.admin')

@section('titulo','Libros')

@section('contenido')

	<h2>LISTA DE LIBROS</h2>

	<table class="table">
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>AUTOR</th>
			<th>EDITORIAL</th>
			<th>ISBN</th>
			<th>EDICIÓN</th>
			<th>CARRERA</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		</tr>
@foreach($libros as $libro)
		<tr>
			<td>{{($loop->index+1)}}</td>
			<td>{{$libro->id}}</td>
			<td>{{$libro->nombre}}</td>
			<td>{{$libro->autor}}</td>
			<td>{{$libro->editorial}}</td>
			<td>{{$libro->isbn}}</td>
			<td>{{$libro->edicion}}</td>
			<td>{{$libro->carrera()->first()->nombre}}</td>
			<td><a class="btn btn-primary" href="#" role="button">Editar</a></td>
			<td>
				<form method="post" action="#">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="_method" value="DELETE">
					<input class="btn btn-danger" type="submit" name="Value" value="Eliminar">
				</form>
			</td>
		</tr>
@endforeach
	</table>

@endsection