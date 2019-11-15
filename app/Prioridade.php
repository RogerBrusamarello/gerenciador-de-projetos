<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridade extends Model
{
    protected $fillable = [
        'id', 'descricao'
    ];

    public static function tarefa()
    {
        return $this->belongsTo('App\Tarefa');
    }
}
