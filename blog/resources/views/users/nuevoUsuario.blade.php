@extends('layouts.admin')

@section('titulo','Nuevo Usuario')

@section('contenido')
  <h2>NUEVO USUARIO</h2>

<form method="post" action="/users">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="Nombre" placeholder="Nombre del usuarios">
    <small id="nombre" class="form-text text-muted">Por favor inserta el nombre del usuario</small>
  </div>
  <div class="form-group">
    <label for="paterno">A. Paterno:</label>
    <input type="text" class="form-control" name="paterno" id="paterno">
  </div>
  <div class="form-group">
    <label for="materno">A. Materno:</label>
    <input type="text" class="form-control" name="materno" id="materno" placeholder="Editorial del libro">
  </div>
  <div class="form-group">
    <label for="matricula">Matricula:</label>
    <input type="text" class="form-control" name="matricula" id="matricula" >
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" class="form-control" name="pass" id="pass">
  </div>
  <div class="form-group">
    <label for="roll">Roll:</label>
    <select class="form-control" name="roll" id="roll">
      <option value="0">Selecciona un roll</option>
      <option value="1">admin</option>
      <option value="2">user</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection