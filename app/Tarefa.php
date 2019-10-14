<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'id', 'nomeTarefa', 'descricao', 'statusTarefa_id', 'prioridade_id', 'etapa_id'
    ];
}
