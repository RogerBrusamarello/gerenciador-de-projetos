@extends('layout.site')

@section('titulo','Projetos')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Projeto</h3>
    <div class="align-center">
        <form action="{{ route('admin.projetos.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.projetos._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br>
</div>
@endsection
