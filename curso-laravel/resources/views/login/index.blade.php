@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
  <div class="container">
      <h3 class="center">Entrar no sistema</h3>
      <div class="row">
        <form class="" action="{{route('site.login.entrar')}}" method="post">
          {{ csrf_field() }}

          <div class="input-field">
            <label for="email">Email</label>
            <input type="text" name="email">
          </div>
          <div class="input-field">
            <label for="senha">Senha</label>
            <input type="password" name="senha">
          </div>

          <button class="btn deep-orange">Entrar</button>
        </form>
      </div>
  </div>


@endsection
