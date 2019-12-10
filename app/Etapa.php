<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $fillable = [
        'id','descricao', 'projeto_id'
    ];

    public function tarefas() {
        return $this->hasMany(\App\Tarefa::class);
    }

    public function projeto() {
        return $this->belongsTo('App\Projeto');
    }
}
