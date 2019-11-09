@extends('layout.site')

@section('titulo','Status das Tarefas')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">Tarefas</h3>
    
    <p class="align-items-center">
        <a class="btn btn-info" href="{{ route('admin.tarefas.adicionar') }}">Adicionar Tarefas</a>
    </p>

    <div class="row mx-md-n5">
    @foreach ($registros as $registro)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                {{-- Colocar AS ETAPAS DE TITULO --}}

                <div class="card text-white mb-3" style="max-width: 18rem;">
                    {{-- <div class="card-header">{{ $registro->tarefa->descricao }}</div> --}}
                    <div class="card-body">
                      {{-- <h5 class="card-title">{{ $tarefa->nomeTarefa }}</h5> --}}
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>

                {!! Form::select('prioridades', ['value' => 'descricao']) !!}
                {{-- Colocar um box para poder inserir o nome da tarefa --}}
                {{-- Colocar um box para poder inserir a descricao da tarefa --}}
                {{-- Select para colocar a prioridade no box --}}
                <h5 class="card-title">{{ $registro->descricao }}</h5>
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