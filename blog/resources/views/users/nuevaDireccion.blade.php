@extends('layouts.admin')

@section('titulo','Nueva Dirección')

@section('contenido')
  <h2>NUEVA DIRECCIÓN</h2>
  <h3>USUARIO:{{$user->nombre}} {{$user->paterno}} {{$user->materno}}</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/direcciones">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="estado">Estado:</label>
    <input type="text" class="form-control" name="estado" id="estado" aria-describedby="estado" placeholder="estado del usuario">
  </div>
  <div class="form-group">
    <label for="ciudad">Ciudad:</label>
    <input type="text" class="form-control" name="ciudad" id="paterno">
  </div>
  <div class="form-group">
    <label for="colonia">Colonia:</label>
    <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Editorial del libro">
  </div>
  <div class="form-group">
    <label for="cp">C.P:</label>
    <input type="text" class="form-control" name="cp" id="cp" >
  </div>
  <div class="form-group">
    <label for="calle">Calle:</label>
    <input type="text" class="form-control" name="calle" id="calle">
  </div>
  <div class="form-group">
    <label for="numero">Número:</label>
    <input type="text" class="form-control" name="numero" id="numero">
  </div>
  <input type="hidden" name="user_id" value="{{$user->id}}">
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection