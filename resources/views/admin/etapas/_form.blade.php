<div class="container">
        <div class="card row">
            <div class="card-body d-flex justify-content-center align-items-center">
            <div class="form-group">
                <input type="hidden" name="projeto_id" value="{{$projeto->id}}">
                <label>Descrição da etapa</label>
                <textarea type="text" class="form-control" name="descricao">{{ isset($etapa->descricao) ? $etapa->descricao : ''}}</textarea>
            </div>
        </div>
    </div>
    <br>
