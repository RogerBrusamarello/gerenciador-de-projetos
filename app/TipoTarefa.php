<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTarefa extends Model
{
    protected $fillable = [
        'id','descricao'
    ];
}
