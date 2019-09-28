<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'codigo', 'nomeTarefa', 'descricao', 'statusTarefa_codigo', 'prioridade_codigo', 'etapa_codigo'
    ];
}
