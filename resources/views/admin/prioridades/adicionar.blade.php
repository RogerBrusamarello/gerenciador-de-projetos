@extends('layout.site')

@section('titulo','Prioridades')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Prioridades</h3>
    <div class="align-center">
        <form action="{{ route('admin.prioridades.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.prioridades._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br> 
</div>
@endsection