@extends('layout.site')

@section('titulo','Tarefa')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Editando Tarefas</h3>
    <div class="align-center">
        <form action="{{ route('admin.tarefas.atualizar',$registro->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.tarefas._form')

            <button class="btn btn-success">Atualizar</button>
        </form>
    </div>
<br> 
</div>
@endsection