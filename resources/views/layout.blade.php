<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">

      <title>@yield('title') - {{ config('app.name', 'Mascotas') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/services')}}">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/mascotas')}}">Mascotas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
