<div class="container">
    <div class="card row">
        <div class="card-body d-flex justify-content-center align-items-center">
        <div class="form-group">
            <label>Descrição da etapa</label>
            <textarea type="text" class="form-control" name="descricao">{{ isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
            <textarea type="text" class="form-control" name="descricao">{{ $etapas->projeto->id }}</textarea>
        </div>
    </div>
</div>
<br>