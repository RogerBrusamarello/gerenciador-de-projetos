<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'id', 'nomeProjeto', 'descricao', 'solicitante', 'previsaoEntrega', 'versaoProjeto'
    ];
}
