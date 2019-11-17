<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'id', 'nomeProjeto', 'descricao', 'solicitante', 'previsaoEntrega', 'versaoProjeto'
    ];

    public static function etapas() {
        return $this->hasMany('App\Etapas');
    }

    public static function versao() {
        return $this->hasOne('App\Versao');
    }
}
