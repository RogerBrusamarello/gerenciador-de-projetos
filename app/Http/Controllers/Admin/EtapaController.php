<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Etapa;
use App\Projeto;

class EtapaController extends Controller
{
    public function index(){

        $registros = Etapa::Where('projeto_id',1)->get();
        return view('admin.etapas.index',compact('registros'));
    }

    public function ver($id){
        $etapa = Etapa::find($id);
        return view('admin.etapas.ver',compact('etapa'));
    }

    public function adicionar($projeto){
        $projeto = Projeto::find($projeto);
        return view('admin.etapas.adicionar', compact('projeto'));
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Etapa::create($dados);
        return redirect()->route('admin.projetos.ver', $req->projeto_id);
    }

    public function editar($id){
        $etapa = Etapa::find($id);
        $projeto = $etapa->projeto;
        return view('admin.etapas.editar',compact('etapa', 'projeto'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        $etapa = Etapa::find($id);
        $etapa->update($dados);
        return redirect()->route('admin.projetos.ver', $etapa->projeto_id);
    }

    public function deletar($id){
        $etapa = Etapa::find($id);
        $projeto = $etapa->projeto;
        $etapa->delete();

        return redirect()->route('admin.projetos.ver', $projeto->id);
    }
}
