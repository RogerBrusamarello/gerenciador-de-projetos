@extends('layout.site')

@section('titulo','Status das Tarefas')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">Status das Tarefas</h3>

    <p class="align-items-center">
        <a class="btn btn-success" href="{{ route('admin.statusTarefas.adicionar') }}">Adicionar Status Tarefas</a>
    </p>

    <div class="row mx-md-n5">
    @foreach ($registros as $registro)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                <h5 class="card-title">{{ $registro->descricao }}</h5>
                <div class="float-right">
                    <a href="{{ route('admin.statusTarefas.editar',$registro->id) }}">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC8sDxWkT0-hG7ZTUTWOaAtAsAfrdxkOHuo43sagxdXEsMauQOQ&s" alt="editar" width="20px">
                    </a>
                    &nbsp;
                    <a  href="{{ route('admin.statusTarefas.deletar',$registro->id) }}">
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
