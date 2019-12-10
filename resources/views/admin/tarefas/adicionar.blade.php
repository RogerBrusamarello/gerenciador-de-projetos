@extends('layout.site')

@section('titulo','Tarefa')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">
        <a href="{{route('admin.projetos')}}">Projetos</a> >
        <a href="{{route('admin.projetos.ver', $etapa->projeto->id)}}">{{$etapa->projeto->nomeProjeto}}</a> >
        <a href="{{route('admin.etapas.ver', $etapa->id)}}">{{$etapa->descricao}}</a>>
        Adicionar tarefa
    </h3>
    <div class="align-center">
        <form action="{{ route('admin.tarefas.salvar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="etapa_id" value="{{$etapa->id}}" />
            @include('admin.tarefas._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br>
</div>
@endsection
