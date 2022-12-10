@extends('layout')
@section('title', 'Crear nueva mascota')
@section('content')
  <div class="container">
    <h1>Crear</h1>
    <form action="{{url('/mascotas')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripcion">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" >Agregar</button>
    </form>
  </div>
@endsection
