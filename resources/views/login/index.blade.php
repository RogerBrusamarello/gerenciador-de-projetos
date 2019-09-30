@extends('layout.site')

@section('titulo','Login')

@section('conteudo')
<div class="justify-content-center">
    <h3 class="d-flex justify-content-center">Entrar</h3>
    <div class="row justify-content-center">
        <form action="{{ route('site.login.entrar') }}" method="POST">
        {{ csrf_field() }}
        <div class="input">
            <input type="text" name="email" placeholder="Digite seu E-mail">
        </div>

        <div class="input">
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>

        <button class="justify-content-center btn-success" type="submit">Entrar</button>
        </form>
    </div>
</div>
@endsection
