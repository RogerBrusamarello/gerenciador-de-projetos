<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $fillable = [
        'id','descricao'
    ];

    public function tarefas(){
        return $this->hasMany(Tarefa::class);
    }
}
