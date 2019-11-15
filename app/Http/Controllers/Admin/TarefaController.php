<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
    public function index()
    {

        $registros = Tarefa::all();
        return view('admin.tarefas.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.tarefas.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Tarefa::create($dados);

        return redirect()->route('admin.tarefas');
    }

    public function editar($id)
    {
        $registro = Tarefa::find($id);
        return view('admin.tarefas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Tarefa::find($id)->update($dados);

        return redirect()->route('admin.tarefas');
    }

    public function deletar($id)
    {
        Tarefa::find($id)->delete();

        return redirect()->route('admin.tarefas');
    }
}
