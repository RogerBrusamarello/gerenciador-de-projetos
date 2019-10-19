@extends('layout.site')

@section('titulo','Status da Tarefa')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Status Tarefa</h3>
    <div class="align-center">
        <form action="{{ route('admin.statusTarefas.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.statusTarefas._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br> 
</div>
@endsection