<div class="container">
    <div class="card row">
        <div class="card-body d-flex justify-content-center align-items-center">
        <div class="form-group">
            <label>Descrição do Tipo das Tarefas</label>
            <textarea type="text" class="form-control" name="descricao">{{ isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
        </div>
    </div>
</div>
<br>