@extends('layout')
@section('title', 'Editar mascota')
@section('content')
  <div class="container">
    <h1>Editar</h1>
    <form action="{{url('/pets/'.$pet->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Ingresar nombre" value="{{old('name', $pet->name)}}">
      </div>
      <div class="form-group">
        <label for="description">Descripion</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Ingresar description" value="{{old('description', $pet->description)}}">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" >Agregar</button>
    </form>
  </div>
@endsection
