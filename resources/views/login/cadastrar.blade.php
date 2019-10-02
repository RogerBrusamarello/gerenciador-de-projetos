@extends('layout.site')

@section('titulo','Cadastro')

@section('conteudo')
<div class="justify-content-center">
    <h3 class="d-flex justify-content-center">Cadastro</h3>
    <div class="row justify-content-center form-group">
        <form action="{{ route('site.login.cadastro') }}" method="POST">
        {{ csrf_field() }}


        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder=" Informe seu nome">
        </div>

        <div class="form-group">
            <input type="password" name="senha" class="form-control" placeholder="Informe sua senha">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Digite seu E-mail">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="cpf" placeholder="Digite seu CPF">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço">
        </div>

        <button class="justify-content align-center btn btn-success" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
@endsection
