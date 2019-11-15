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
                    \App\StatusTarefa::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                    null, ['class' => 'form-control']) }}

                {!! Form::label("prioridade", "Prioridade:") !!}
                {{  Form::select('prioridade_id',
                    \App\Prioridade::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                    null, ['class' => 'form-control']) }}

                {!! Form::label("etapa", "Etapa:") !!}
                {{  Form::select('etapa_id',
                    \App\Etapa::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                    null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
<br>
