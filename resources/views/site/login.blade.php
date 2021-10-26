@extends('site.master.layout')

@section('content')
    
<div class="container py-5 text-center">
        <h1>Login</h1>
    <form class="form-signin py-5">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Digite seu Email" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Digite sua Senha" required>
      <div class="checkbox mb-3">
      <br>
      <label>
          <input type="checkbox" value="remember-me">Lembrar-me</label>
      </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
    </form>
</div>
@endsection