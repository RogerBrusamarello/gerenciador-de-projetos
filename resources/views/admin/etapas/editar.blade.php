@extends('layout.site')

@section('titulo','Etapas')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Editando Etapas</h3>
    <div class="align-center">
        <form action="{{ route('admin.etapas.atualizar',$etapa->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.etapas._form')

            <button class="btn btn-success">Atualizar</button>
        </form>
    </div>
<br>
</div>
@endsection
