@extends('layout')
@section('title', 'Editar mascota')
@section('content')
  <div class="container">
    <h1>Editar</h1>
    <form action="{{url('/mascotas/'.$mascota->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre" value="{{old('nombre', $mascota->nombre)}}">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripcion" value="{{old('descripcion', $mascota->descripcion)}}">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" >Agregar</button>
    </form>
  </div>
@endsection
