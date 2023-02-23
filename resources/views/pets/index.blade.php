@extends('layout')
@section('title', 'Mascotas')
@section('content')
  <div class="container">
    <h1>Mascotas</h1>
    <a href="{{url('/pets/create')}}" class="btn btn-primary btn-block my-4" >Crear nueva mascotas</a>
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
          @foreach($pets as $pet)
              <tr>
                <th scope="row">{{ $pet->id }}</th>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->description }}</td>
                <td>
                  <a class='btn btn-warning bt-sm' href="{{url('/pets/'.$pet->id.'/edit')}}">Editar</a>
                  <form method="POST" action="{{ url('/pets/'.$pet->id) }}" class="d-inline">
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
