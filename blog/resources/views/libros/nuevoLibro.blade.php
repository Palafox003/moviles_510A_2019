@extends('layouts.admin')

@section('titulo','Nuevo Libro')

@section('contenido')
<form method="post" action="/libros">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="Nombre" placeholder="Nombre del libro">
    <small id="nombre" class="form-text text-muted">Por favor inserta el nombre del libro</small>
  </div>
  <div class="form-group">
    <label for="autor">Autor:</label>
    <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor del libro">
  </div>
  <div class="form-group">
    <label for="editorial">Editorial:</label>
    <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial del libro">
  </div>
  <div class="form-group">
    <label for="isnb">ISBN:</label>
    <input type="text" class="form-control" name="isbn" id="isnb" placeholder="ISBN del libro">
  </div>
  <div class="form-group">
    <label for="edicion">Edición:</label>
    <input type="text" class="form-control" name="edicion" id="edicion">
  </div>
  <div class="form-group">
    <label for="carrera">Carrera:</label>
    <select class="form-control" name="carrera_id" id="carrera">
      <option value="0">Selecciona una carrera</option>
@foreach($carreras as $carrera)
      <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
@endforeach
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection