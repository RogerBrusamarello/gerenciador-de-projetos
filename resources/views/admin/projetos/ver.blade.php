@extends('layout.site')

@section('titulo','Projetos')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">
        <a href="{{route('admin.projetos')}}">Projetos</a> > {{$projeto->nomeProjeto}}
    </h3>
    <p class="align-items-center">
        <a class="btn btn-success" href="{{ route('admin.etapas.adicionar', $projeto->id) }}">Adicionar Etapas</a>
    </p>
    <div class="row mx-md-n5">
    @foreach ($projeto->etapas as $etapa)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                <a href="{{ route('admin.etapas.ver', $etapa->id) }}">
                    <h5 class="card-title">{{ $etapa->descricao }}</h5>
                </a>
                <div class="float-right">
                    <a href="{{ route('admin.etapas.editar',$etapa->id) }}">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC8sDxWkT0-hG7ZTUTWOaAtAsAfrdxkOHuo43sagxdXEsMauQOQ&s" alt="editar" width="20px">
                    </a>
                    &nbsp;
                    <a  href="{{ route('admin.etapas.deletar',$etapa->id) }}">
                        <img src="https://image.flaticon.com/icons/png/512/70/70388.png" alt="apagar" width="20px"><br>
                    </a>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
    @endforeach
<br>

</div>
@endsection
