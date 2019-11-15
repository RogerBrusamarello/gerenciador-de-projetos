<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tarefa extends Model
{
    protected $fillable = [
        'id', 'nomeTarefa', 'descricao', 'statusTarefa_id', 'prioridade_id', 'etapa_id'
    ];
    
    public static function prioridade() {
        return $this->hasOne('App\Prioridade');
    }
    
    public static function statusTarefa() {
        return $this->hasOne('App\StatusTarefa');
    }

    public static function etapa() {
        return $this->belongsTo('App\Etapa');
    }

}
