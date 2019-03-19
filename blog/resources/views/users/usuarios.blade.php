@extends('layouts.admin')

@section('titulo','Usuarios')

@section('contenido')

	<h2>LISTA DE USUARIOS</h2>

	<table class="table">
		<tr>
			<th>#</th>
			<th>NOMBRE</th>
			<th>MATRICULA</th>
			<th>EMAIL</th>
			<th>ROLL</th>
			<th>DIRECCIÓN</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		</tr>
@foreach($usuarios as $usuario)
		<tr>
			<td>{{($loop->index+1)}}</td>
			<td>{{$usuario->nombre}} {{$usuario->paterno}} {{$usuario->materno}}</td>
			<td>{{$usuario->matricula}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->roll}}</td>
			<td><a class="btn btn-primary" href="/nuevaDireccion/{{$usuario->id}}" role="button">Agregar</a></td>
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