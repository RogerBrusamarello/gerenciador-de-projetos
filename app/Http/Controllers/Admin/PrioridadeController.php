<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prioridade;

class PrioridadeController extends Controller
{
    public function index(){

        $registros = Prioridade::all();
        return view('admin.prioridades.index',compact('registros'));
    }

    public function adicionar(){
        return view('admin.prioridades.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Prioridade::create($dados);

        return redirect()->route('admin.prioridades');
    }

    public function editar($id){
        $registro = Prioridade::find($id);
        return view('admin.prioridades.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Prioridade::find($id)->update($dados);

        return redirect()->route('admin.prioridades');
    }

    public function deletar($id){
        Prioridade::find($id)->delete();
        
        return redirect()->route('admin.prioridades');
    }
}
