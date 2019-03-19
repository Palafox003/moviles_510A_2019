@extends('layouts.admin')

@section('titulo','Nueva Carrera')

@section('contenido')
<h2>EDITAR CARRERA:</h2>
<form method="post" action="/carreras/{{$carrera->id}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="numero">Número:</label>
    <input type="number" class="form-control" name="numero" value="{{$carrera->numero}}" id="numero" aria-describedby="emailHelp" placeholder="N°">
    <small id="numeroHelp" class="form-text text-muted">Por favor inserta el número de la carrera</small>
  </div>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" value="{{$carrera->nombre}}" id="nombre" placeholder="Juan *****">
  </div>
  <div class="form-group">
    <label for="logo">Logo:</label>
    <input type="text" class="form-control" name="logo" value="{{$carrera->logo}}" id="logo">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection