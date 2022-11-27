@extends('layouts.auth-master')

@section('content')
<form action="/login" method="POST" class="formulario">
  @csrf
  @include('layouts.partials.messages')
  <h1 class="text-center">Login</h1>
      <div class="form-body">
        <img src="{{asset('assets/img/219983.png')}}" alt="user-login">
        <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">

        <p class="text">Bienvenido</p>
        <form class="login-form">
          <input type="text" name="username" placeholder="Usuario" autocomplete="off">
          <input type="password" name="password" placeholder="contraseña">
          <button>Iniciar sesion</button>
          <p class="count">¿No tienes cuenta? <a class="link" href="/register">Registrate</a></p>
        </form>
      </div>
      <button class="btn btn-danger">Hola</button>
      </div>
@endsection
