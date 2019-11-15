<div class="container">
    <div class="card row">
        <div class="card-body d-flex justify-content-center align-items-center">
        <div class="form-group">
            <label>Descrição da etapa</label>
            <textarea type="text" class="form-control" name="descricao">{{ isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
            <div class="form-group">
                {!! Form::label("projeto_id", "Projeto:") !!}
                {{  Form::select('projeto_id',
                    \App\Projeto::orderBy('nomeProjeto')->pluck('nomeProjeto', 'id')->toArray(),
                    null, ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
</div>
<br>