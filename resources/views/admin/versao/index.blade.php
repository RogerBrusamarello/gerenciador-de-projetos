@extends('layout.site')

@section('titulo','Versão')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">Versão</h3>

    <p class="align-items-center">
        <a class="btn btn-success" href="{{ route('admin.versao.adicionar') }}">Adicionar Versão</a>
    </p>

    <div class="row mx-md-n5">
    @foreach ($registros as $registro)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                <a href="{{ route('admin.tarefas') }}">
                <h5 class="card-title">{{ $registro->descricao }}</h5>
                </a>
                <div class="float-right">
                    <a href="{{ route('admin.versao.editar',$registro->id) }}">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC8sDxWkT0-hG7ZTUTWOaAtAsAfrdxkOHuo43sagxdXEsMauQOQ&s" alt="editar" width="20px">
                    </a>
                    &nbsp;

                    <a  href="{{ route('admin.versao.deletar',$registro->id) }}">
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
