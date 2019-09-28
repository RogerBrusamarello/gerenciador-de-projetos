<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroTarefa extends Model
{
    protected $fillable = [
        'codigo', 'dataHoraRegistro', 'tarefa_codigo', 'user_codigo'
    ];
}
