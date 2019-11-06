@extends('layout.site')

@section('titulo','Tarefa')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Tarefa</h3>
    <div class="align-center">
        <form action="{{ route('admin.tarefas.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.tarefas._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br> 
</div>
@endsection