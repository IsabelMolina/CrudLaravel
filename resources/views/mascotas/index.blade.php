@extends('layout')
@section('title', 'Mascotas')
@section('content')
  <div class="container">
    <h1>Mascotas</h1>
    <a href="{{url('/mascotas/create')}}" class="btn btn-primary btn-block my-4" >Crear nueva mascotas</a>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Accion</th>
          </tr>

        </thead>
        <tbody>
          @foreach($mascotas as $mascota)
              <tr>
                <th scope="row">{{ $mascota->id }}</th>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->descripcion }}</td>
                <td>
                  <a class='btn btn-warning bt-sm' href="{{url('/mascotas/'.$mascota->id.'/edit')}}">Editar</a>
                  <form method="POST" action="{{ url('/mascotas/'.$mascota->id) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class='btn btn-danger bt-sm'>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
    </div>
  </div>
@endsection
