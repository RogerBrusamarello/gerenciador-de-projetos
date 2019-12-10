@extends('layout.site')

@section('titulo','Tarefas')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">
        <a href="{{route('admin.projetos')}}">Projetos</a> >
        <a href="{{route('admin.projetos.ver', $etapa->projeto->id)}}">{{$etapa->projeto->nomeProjeto}}</a> >
        <a href="{{route('admin.etapas.ver', $etapa->id)}}">{{$etapa->descricao}}</a>>
        Tarefas
    </h3>

    <p class="align-items-center">
        <a class="btn btn-success" href="{{ route('admin.tarefas.adicionar', $etapa->id) }}">Adicionar Tarefas</a>
    </p>

    <div class="row mx-md-n5">
    @foreach ($etapa->tarefas as $registro)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                <div class="card bg-light  mb-3" style="max-width: 18rem;">
                    {{-- Colocar AS ETAPAS DE TITULO --}}
                    {{-- <div class="card-header">{{ $registro-> }}</div> --}}

                    <div class="card-body">
                      <h5 class="card-title">{{ $registro->nomeTarefa }}</h5>
                        <p>{{ $registro->descricao }}</p>
                        <span class="badge badge-pill badge-primary">{{ $registro->status->descricao }}</span>
                    </div>
                </div>
                <div class="float-right">
                    <a href="{{ route('admin.tarefas.editar',$registro->id) }}">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC8sDxWkT0-hG7ZTUTWOaAtAsAfrdxkOHuo43sagxdXEsMauQOQ&s" alt="editar" width="20px">
                    </a>
                    &nbsp;

                    <a  href="{{ route('admin.tarefas.deletar',$registro->id) }}">
                        <img src="https://image.flaticon.com/icons/png/512/70/70388.png" alt="apagar" width="20px"><br>
                    </a>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
    @endforeach
</div>
<br>

</div>
@endsection
