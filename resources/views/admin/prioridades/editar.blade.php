@extends('layout.site')

@section('titulo','Prioridades')

@section('conteudo')
<div class="container">
    <h3 class="d-flex justify-content-center">Editando Prioridades</h3>
    <div class="align-center">
        <form action="{{ route('admin.prioridades.atualizar',$registro->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.prioridades._form')

            <button class="btn btn-success">Atualizar</button>
        </form>
    </div>
<br> 
</div>
@endsection