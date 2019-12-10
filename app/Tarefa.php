<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tarefa extends Model
{
    protected $fillable = [
        'id', 'nomeTarefa', 'descricao', 'statusTarefa_id', 'prioridade_id', 'etapa_id'
    ];

    public function prioridade() {
        return $this->belongsTo('App\Prioridade', 'prioridade_id');
    }

    public function status() {
        return $this->belongsTo('App\StatusTarefa', 'statusTarefa_id');
    }

    public function etapa() {
        return $this->belongsTo('App\Etapa');
    }

}
