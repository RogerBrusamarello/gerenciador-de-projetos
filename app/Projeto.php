<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'codigo', 'nomeProjeto', 'descricao', 'solicitante', 'previsaoEntrega', 'versaoProjeto'
    ];
}
