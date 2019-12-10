@extends('layout.site')

@section('titulo','Tarefa')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">
        <a href="{{route('admin.projetos')}}">Projetos</a> >
        <a href="{{route('admin.projetos.ver', $registro->etapa->projeto->id)}}">{{$registro->etapa->projeto->nomeProjeto}}</a> >
        <a href="{{route('admin.etapas.ver', $registro->etapa->id)}}">{{$registro->etapa->descricao}}</a>>
        Editar tarefa
    </h3>
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
