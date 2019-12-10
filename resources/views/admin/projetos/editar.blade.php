@extends('layout.site')

@section('titulo','Projetos')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Editando Projeto</h3>
    <div class="align-center">
        <form action="{{ route('admin.projetos.atualizar',$registro->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.projetos._form')

            <button class="btn btn-success">Atualizar</button>
        </form>
    </div>
<br>
</div>
@endsection
