@extends('layouts.admin')

@section('titulo','Nueva Carrera')

@section('contenido')
<form method="post" action="/carreras" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="numero">Número:</label>
    <input type="number" class="form-control" name="numero" id="numero" aria-describedby="emailHelp" placeholder="N°">
    <small id="numeroHelp" class="form-text text-muted">Por favor inserta el número de la carrera</small>
  </div>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Juan *****">
  </div>
  <div class="form-group">
    <label for="logo">Logo:</label>
    <input type="file" class="form-control" name="logo" id="logo">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection