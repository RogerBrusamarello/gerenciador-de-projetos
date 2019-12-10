<?php

namespace App\Http\Controllers\Admin;

use App\Etapa;
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

    public function adicionar($id)
    {
        $etapa = Etapa::find($id);
        return view('admin.tarefas.adicionar', compact('etapa'));
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Tarefa::create($dados);
        return redirect()->route('admin.etapas.ver', $req->etapa_id);
    }

    public function editar($id)
    {
        $registro = Tarefa::find($id);
        return view('admin.tarefas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        $tarefa = Tarefa::find($id);
        $tarefa->update($dados);

        return redirect()->route('admin.etapas.ver', $tarefa->etapa_id);
    }

    public function deletar($id)
    {
        $tarefa = Tarefa::find($id);
        $etapa = $tarefa->etapa;
        $tarefa->delete();

        return redirect()->route('admin.etapas.ver', $tarefa->etapa_id);
    }
}
