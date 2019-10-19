@extends('layout.site')

@section('titulo','Versão')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Versão</h3>
    <div class="align-center">
        <form action="{{ route('admin.versao.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.versao._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br> 
</div>
@endsection