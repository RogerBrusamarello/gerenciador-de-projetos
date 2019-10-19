@extends('layout.site')

@section('titulo','Tipo das Tarefas')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Editando Tipo das Tarefas</h3>
    <div class="align-center">
        <form action="{{ route('admin.tipoTarefas.atualizar',$registro->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.tipoTarefas._form')

            <button class="btn btn-success">Atualizar</button>
        </form>
    </div>
<br> 
</div>
@endsection