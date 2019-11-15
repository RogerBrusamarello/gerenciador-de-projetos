@extends('layout.site')

@section('titulo','Projetos')

@section('conteudo')

<div class="container">
    <h3 class="d-flex justify-content-center">Projetos</h3>
    <p class="align-items-center">
        <a class="btn btn-info" href="{{ route('admin.projetos.adicionar') }}">Adicionar Projetos</a>
    <div class="row mx-md-n5">
    @foreach ($registros as $registro)
        <div class="card">
            <div class="card-body justify-content-center" style="width: 15rem;">
                <a href="{{ route('admin.etapas') }}">
                <img src="https://www.trzcacak.rs/myfile/detail/487-4878854_ferramentas-em-png-tools-clip-art.png" alt="editar" width="120px">
                </a>
                <h5 class="card-title">{{ $registro->nomeProjeto }}</h5>
                <p class="card-text">Solicitante: {{ $registro->solicitante }}</p>
                <p class="card-text">Previsão de Entrega: {{ date('d-m-Y', strtotime($registro->previsaoEntrega)) }}</p>
                <div class="float-right">
                    <a href="{{ route('admin.projetos.editar',$registro->id) }}">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC8sDxWkT0-hG7ZTUTWOaAtAsAfrdxkOHuo43sagxdXEsMauQOQ&s" alt="editar" width="20px">
                    </a>
                    &nbsp;

                    <a data-toggle="modal" data-target="#exampleModal">
                        <img src="https://image.flaticon.com/icons/png/512/70/70388.png" alt="apagar" width="20px"><br>
                    </a>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
