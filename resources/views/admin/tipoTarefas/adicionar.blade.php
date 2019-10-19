@extends('layout.site')

@section('titulo','Tipo da Tarefa')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Tipo das Tarefas</h3>
    <div class="align-center">
        <form action="{{ route('admin.tipoTarefas.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.tipoTarefas._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br> 
</div>
@endsection