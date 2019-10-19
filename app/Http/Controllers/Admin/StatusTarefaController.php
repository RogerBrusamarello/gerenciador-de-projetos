<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StatusTarefa;

class StatusTarefaController extends Controller
{
    public function index(){

        $registros = StatusTarefa::all();
        return view('admin.statusTarefas.index',compact('registros'));
    }

    public function adicionar(){
        return view('admin.statusTarefas.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        StatusTarefa::create($dados);

        return redirect()->route('admin.statusTarefas');
    }

    public function editar($id){
        $registro = StatusTarefa::find($id);
        return view('admin.statusTarefas.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        StatusTarefa::find($id)->update($dados);

        return redirect()->route('admin.statusTarefas');
    }

    public function deletar($id){
        StatusTarefa::find($id)->delete();
        
        return redirect()->route('admin.statusTarefas');
    }
}
