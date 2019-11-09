<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Etapa extends Model
{
    protected $fillable = [
        'id','descricao'
    ];

    public static function getTarefas(){
        return DB::select('select * from etapas e inner join tarefas t on e.id = t.etapa_id');
    }
    
    public static function getTitulo($id){
        return DB::select('select descricao from etapas where id = :id', ['id'=>$id]);
    }
}
