<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Etapa;

class EtapaController extends Controller
{
    public function index(){

        $registros = Etapa::all();
        return view('admin.etapas.index',compact('registros'));
    }

    public function adicionar(){
        return view('admin.etapas.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Etapa::create($dados);

        return redirect()->route('admin.etapas');
    }

    public function editar($id){
        $registro = Etapa::find($id);
        return view('admin.etapas.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Etapa::find($id)->update($dados);

        return redirect()->route('admin.etapas');
    }

    public function deletar($id){
        Etapa::find($id)->delete();
        
        return redirect()->route('admin.etapas');
    }
}
