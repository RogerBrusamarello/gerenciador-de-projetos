<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Versao;

class VersaoController extends Controller
{
    public function index(){

        $registros = Versao::all();
        return view('admin.versao.index',compact('registros'));
    }

    public function adicionar(){
        return view('admin.versao.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Versao::create($dados);

        return redirect()->route('admin.versao');
    }

    public function editar($id){
        $registro = Versao::find($id);
        return view('admin.versao.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Versao::find($id)->update($dados);

        return redirect()->route('admin.versao');
    }

    public function deletar($id){
        Versao::find($id)->delete();
        
        return redirect()->route('admin.versao');
    }
}
