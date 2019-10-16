@extends('layout.site')

@section('titulo','Etapas')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Adicionar Etapa</h3>
    <div class="align-center">
        <form action="{{ route('admin.etapas.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.etapas._form')

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
<br> 
</div>
@endsection