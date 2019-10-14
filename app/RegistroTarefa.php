<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroTarefa extends Model
{
    protected $fillable = [
        'id', 'dataHoraRegistro', 'tarefa_id', 'user_id'
    ];
}
