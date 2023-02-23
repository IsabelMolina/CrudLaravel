@extends('layout')
@section('title', 'Crear nueva mascota')
@section('content')
  <div class="container">
    <h1>Crear</h1>
    <form action="{{url('/pets')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Ingresar nombre">
      </div>
      <div class="form-group">
        <label for="description">Descripion</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Ingresar descripcion">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" >Agregar</button>
    </form>
  </div>
@endsection
