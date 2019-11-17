<div class="container">
    <div class="card row">
        <div class="card-body d-flex justify-content-center align-items-center">
            <div class="form-group">
                <label>Nome do Projeto</label>
                <input type="text" class="form-control" name="nomeProjeto" value="{{ isset($registro->nomeProjeto) ? $registro->nomeProjeto : ''}}">
            </div>
            &nbsp;
            <div class="form-group">
                <label>Solicitante</label>
                <input type="text" class="form-control" name="solicitante" value="{{ isset($registro->solicitante) ? $registro->solicitante : ''}}">
            </div>
            &nbsp;
            <div class="form-group">
                <label>Previsao da Entrega</label>
                <input type="date" class="form-control" name="previsaoEntrega" value="{{ isset($registro->previsaoEntrega) ? $registro->previsaoEntrega : ''}}">
            </div>
            &nbsp;
            <div class="form-group">
            {!! Form::label("versao", "Versão") !!}
                {{  Form::select('versaoProjeto',
                    \App\Versao::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                    null, ['class' => 'form-control']) }}
            </div>    
        </div>
        <div class="form-group">
            <label>Descrição do Projeto</label>
            <textarea type="text" class="form-control" name="descricao">{{ isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
        </div>
    </div>
</div>
<br>