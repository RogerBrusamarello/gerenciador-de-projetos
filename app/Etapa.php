<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $fillable = [
        'id','descricao'
    ];

    public static function tarefas() {
        return $this->hasMany(\App\Tarefa::class);
    }
    
    public static function projeto() {
        return $this->belongsTo('App\Projeto');
    }
}
