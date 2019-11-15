@extends('layout.site')

@section('titulo','Tarefas')

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
                <div class="card bg-light  mb-3" style="max-width: 18rem;">
                    {{-- Colocar AS ETAPAS DE TITULO --}}
                    {{-- <div class="card-header">{{ $registro-> }}</div> --}}

                    <div class="card-body">
                      <h5 class="card-title">{{ $registro->nomeTarefa }}</h5>
                    </div>
                  </div>
                <div class="float-right">
                    <a href="{{ route('admin.tarefas.editar',$registro->id) }}">
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
