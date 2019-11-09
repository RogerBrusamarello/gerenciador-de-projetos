<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tarefa extends Model
{
    protected $fillable = [
        'id', 'nomeTarefa', 'descricao', 'statusTarefa_id', 'prioridade_id', 'etapa_id'
    ];
    
    public static function getPrioridades(){
        return DB::select('select * from tarefas t inner join prioridades p on t.prioridade_id = p.id');
    }

    public static function getStatusTarefa(){
        return DB::select('select * from tarefas t inner join status_tarefas st on t.statusTarefa_id = st.id');
    }
}
