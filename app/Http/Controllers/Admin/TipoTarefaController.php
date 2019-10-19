<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TipoTarefa;

class TipoTarefaController extends Controller
{
    public function index(){

        $registros = TipoTarefa::all();
        return view('admin.tipoTarefas.index',compact('registros'));
    }

    public function adicionar(){
        return view('admin.tipoTarefas.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        TipoTarefa::create($dados);

        return redirect()->route('admin.tipoTarefas');
    }

    public function editar($id){
        $registro = TipoTarefa::find($id);
        return view('admin.tipoTarefas.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        TipoTarefa::find($id)->update($dados);

        return redirect()->route('admin.tipoTarefas');
    }

    public function deletar($id){
        TipoTarefa::find($id)->delete();
        
        return redirect()->route('admin.tipoTarefas');
    }
}
