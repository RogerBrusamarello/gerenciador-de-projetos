@extends('layout.site')

@section('titulo','Login')

@section('conteudo')
<div class="justify-content-center">
    <h3 class="d-flex justify-content-center">Entrar</h3>
    <div class="row justify-content-center">
        <form action="{{ route('site.login.entrar') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de E-mail</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
          </div>

          <button class="justify-content-center btn btn-success" type="submit">Entrar</button>
          <a class="justify-content-center btn btn-success" href=" {{ route('site.login.cadastrar') }}">Cadastro</a>
          
        </form>
    </div>
</div>
@endsection
