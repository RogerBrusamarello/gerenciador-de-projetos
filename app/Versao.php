<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versao extends Model
{
    protected $fillable = [
        'id','descricao'
    ];

    public static function projeto()
    {
        return $this->belongsTo('App\Projeto');
    }
}
