@extends('app')

@section('title', 'Registro de usuarios')

@section('content')
    <!-- Contenido de la página -->

    <h2>Iniciar sesión</h2>

    {{-- Formulario de incio de sesión --}}
    <form method="post" action="">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
      </form>
@endsection
