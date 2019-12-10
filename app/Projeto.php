<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'id', 'nomeProjeto', 'descricao', 'solicitante', 'previsaoEntrega', 'versaoProjeto'
    ];

    public function etapas() {
        return $this->hasMany('App\Etapa', 'projeto_id', 'id');
    }

    public function versao() {
        return $this->hasOne('App\Versao');
    }
}
