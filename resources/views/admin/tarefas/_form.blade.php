<div class="container">
    <div class="card row">
        <div class="card-body d-flex justify-content-center align-items-center">
        <div class="form-group">
            <label>Nome da Tarefa</label>
            <textarea type="text" class="form-control" name="nomeTarefa">{{ isset($registro->nomeTarefa) ? $registro->nomeTarefa : ''}}</textarea>
            <label>Descrição da Tarefa</label>
            <textarea type="text" class="form-control" name="descricao">{{ isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
            {!! Form::label("statusTarefa", "Status da Tarefa:") !!}
                {{  Form::select('statusTarefa_id',
                    \App\StatusTarefa::orderBy('id')->pluck('descricao', 'id')->toArray(),
                    $errors->statusTarefa_id, ['class' => 'form-control']) }}

                {!! Form::label("prioridade_id", "Prioridade:") !!}
                {{  Form::select('prioridade_id',
                    \App\Prioridade::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                    $errors->prioridade_id, ['class' => 'form-control']) }}

                @if(isset($registro))
                    {!! Form::label("etapa_id", "Etapas:") !!}
                    {{  Form::select('etapa_id',
                        $registro->etapa->projeto->etapas->pluck('descricao', 'id')->toArray(),
                        $errors->etapa_id, ['class' => 'form-control']) }}
                @endif
        </div>
    </div>
</div>
<br>
