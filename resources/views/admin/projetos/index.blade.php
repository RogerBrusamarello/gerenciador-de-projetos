@extends('layout.site')

@section('titulo','Projetos')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">Lista de Projetos Cadastrados</h3>
    <p class="align-items-center">
        <a class="btn btn-success" href="{{ route('admin.projetos.adicionar') }}">Adicionar Projetos</a>
    <div class="row mx-md-n5">
    @foreach ($registros as $registro)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                <a href="{{ route('admin.projetos.ver', $registro->id) }}">
                    <img src="data:image/png;base64,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
                    jgQBxfMkaAWNcyXYCbjzJXgUcOdM8BD6z5tgUeywk05/ccb4Dw4kgFXDyRDyAAAAAElFTkSuQmCC" alt="editar" width="120px">
                    {{-- <img src="https://www.trzcacak.rs/myfile/detail/487-4878854_ferramentas-em-png-tools-clip-art.png" alt="editar" width="120px"> --}}
                </a>
                <h5 class="card-title">{{ $registro->nomeProjeto }}</h5>
                <p class="card-text">Solicitante: {{ $registro->solicitante }}</p>
                <p class="card-text">Entrega: {{ date('d/m/Y', strtotime($registro->previsaoEntrega)) }}</p>


                <div class="float-left">
                    <a href="{{ route('admin.projetos.relatorio',$registro->id) }}" target="_blank">
                            <button type="button" class="btn btn-success">Relatório</button>
                    </a>
                <div class="float-right">
                    <ul>
                    <a href="{{ route('admin.projetos.editar',$registro->id) }}">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC8sDxWkT0-hG7ZTUTWOaAtAsAfrdxkOHuo43sagxdXEsMauQOQ&s" alt="editar" width="20px">
                    </a>
                    &nbsp;

                    <a data-toggle="modal" data-target="#exampleModal-{{$registro->id}}">
                        <img src="https://image.flaticon.com/icons/png/512/70/70388.png" alt="apagar" width="20px"><br>
                    </a>
                </div>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        <!-- Modal -->
        <div class="modal fade" id="exampleModal-{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir Projeto?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                        <div class="modal-body">
                            Deseja realmente excluir o projeto?
                        </div>
                    <div class="modal-footer">
                    <a type="button" class="btn btn-info" data-dismiss="modal">Cancelar</a>
                    <a href="{{ route('admin.projetos.deletar',$registro->id) }}" type="button" class="btn btn-danger">Excluir</a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>
<br>

</div>
@endsection
