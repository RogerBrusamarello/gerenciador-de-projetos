<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusTarefa extends Model
{
    protected $fillable = [
        'id','descricao'
    ];

    public function tarefa()
    {
        return $this->belongsTo('App\Tarefa');
    }
}
