<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'login', 'uses' => 'Site\LoginController@index']);
Route::get('/cadastrar', ['as' => 'site.login.cadastrar', 'uses' => 'Site\LoginController@cadastrar']);
Route::get('/cadastro', ['as' => 'site.login.cadastro', 'uses' => 'Site\LoginController@cadastro']);
Route::get('/sair', ['as' => 'site.login.sair', 'uses' => 'Site\LoginController@sair']);
Route::post('/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\LoginController@entrar']);


//Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/projetos', ['as' => 'admin.projetos', 'uses' => 'Admin\ProjetoController@index']);
    Route::get('/admin/projetos/adicionar', ['as' => 'admin.projetos.adicionar', 'uses' => 'Admin\ProjetoController@adicionar']);
    Route::post('/admin/projetos/salvar', ['as' => 'admin.projetos.salvar', 'uses' => 'Admin\ProjetoController@salvar']);
    Route::get('/admin/projetos/editar/{id}', ['as' => 'admin.projetos.editar', 'uses' => 'Admin\ProjetoController@editar']);
    Route::put('/admin/projetos/atualizar/{id}', ['as' => 'admin.projetos.atualizar', 'uses' => 'Admin\ProjetoController@atualizar']);
    Route::get('/admin/projetos/deletar/{id}', ['as' => 'admin.projetos.deletar', 'uses' => 'Admin\ProjetoController@deletar']);   
    
    Route::get('/admin/tarefas', ['as' => 'admin.tarefas', 'uses' => 'Admin\TarefaController@index']);
    Route::get('/admin/tarefas/adicionar', ['as' => 'admin.tarefas.adicionar', 'uses' => 'Admin\TarefaController@adicionar']);
    Route::post('/admin/tarefas/salvar', ['as' => 'admin.tarefas.salvar', 'uses' => 'Admin\TarefaController@salvar']);
    Route::get('/admin/tarefas/editar/{id}', ['as' => 'admin.tarefas.editar', 'uses' => 'Admin\TarefaController@editar']);
    Route::put('/admin/tarefas/atualizar/{id}', ['as' => 'admin.tarefas.atualizar', 'uses' => 'Admin\TarefaController@atualizar']);
    Route::get('/admin/tarefas/deletar/{id}', ['as' => 'admin.tarefas.deletar', 'uses' => 'Admin\TarefaController@deletar']);

    Route::get('/admin/etapas', ['as' => 'admin.etapas', 'uses' => 'Admin\EtapaController@index']);
    Route::get('/admin/etapas/adicionar', ['as' => 'admin.etapas.adicionar', 'uses' => 'Admin\EtapaController@adicionar']);
    Route::post('/admin/etapas/salvar', ['as' => 'admin.etapas.salvar', 'uses' => 'Admin\EtapaController@salvar']);
    Route::get('/admin/etapas/editar/{id}', ['as' => 'admin.etapas.editar', 'uses' => 'Admin\EtapaController@editar']);
    Route::put('/admin/etapas/atualizar/{id}', ['as' => 'admin.etapas.atualizar', 'uses' => 'Admin\EtapaController@atualizar']);
    Route::get('/admin/etapas/deletar/{id}', ['as' => 'admin.etapas.deletar', 'uses' => 'Admin\EtapaController@deletar']);

    Route::get('/admin/statusTarefas', ['as' => 'admin.statusTarefas', 'uses' => 'Admin\StatusTarefaController@index']);
    Route::get('/admin/statusTarefas/adicionar', ['as' => 'admin.statusTarefas.adicionar', 'uses' => 'Admin\StatusTarefaController@adicionar']);
    Route::post('/admin/statusTarefas/salvar', ['as' => 'admin.statusTarefas.salvar', 'uses' => 'Admin\StatusTarefaController@salvar']);
    Route::get('/admin/statusTarefas/editar/{id}', ['as' => 'admin.statusTarefas.editar', 'uses' => 'Admin\StatusTarefaController@editar']);
    Route::put('/admin/statusTarefas/atualizar/{id}', ['as' => 'admin.statusTarefas.atualizar', 'uses' => 'Admin\StatusTarefaController@atualizar']);
    Route::get('/admin/statusTarefas/deletar/{id}', ['as' => 'admin.statusTarefas.deletar', 'uses' => 'Admin\StatusTarefaController@deletar']);

    Route::get('/admin/tipoTarefas', ['as' => 'admin.tipoTarefas', 'uses' => 'Admin\TipoTarefaController@index']);
    Route::get('/admin/tipoTarefas/adicionar', ['as' => 'admin.tipoTarefas.adicionar', 'uses' => 'Admin\TipoTarefaController@adicionar']);
    Route::post('/admin/tipoTarefas/salvar', ['as' => 'admin.tipoTarefas.salvar', 'uses' => 'Admin\TipoTarefaController@salvar']);
    Route::get('/admin/tipoTarefas/editar/{id}', ['as' => 'admin.tipoTarefas.editar', 'uses' => 'Admin\TipoTarefaController@editar']);
    Route::put('/admin/tipoTarefas/atualizar/{id}', ['as' => 'admin.tipoTarefas.atualizar', 'uses' => 'Admin\TipoTarefaController@atualizar']);
    Route::get('/admin/tipoTarefas/deletar/{id}', ['as' => 'admin.tipoTarefas.deletar', 'uses' => 'Admin\TipoTarefaController@deletar']);

    Route::get('/admin/prioridades', ['as' => 'admin.prioridades', 'uses' => 'Admin\PrioridadeController@index']);
    Route::get('/admin/prioridades/adicionar', ['as' => 'admin.prioridades.adicionar', 'uses' => 'Admin\PrioridadeController@adicionar']);
    Route::post('/admin/prioridades/salvar', ['as' => 'admin.prioridades.salvar', 'uses' => 'Admin\PrioridadeController@salvar']);
    Route::get('/admin/prioridades/editar/{id}', ['as' => 'admin.prioridades.editar', 'uses' => 'Admin\PrioridadeController@editar']);
    Route::put('/admin/prioridades/atualizar/{id}', ['as' => 'admin.prioridades.atualizar', 'uses' => 'Admin\PrioridadeController@atualizar']);
    Route::get('/admin/prioridades/deletar/{id}', ['as' => 'admin.prioridades.deletar', 'uses' => 'Admin\PrioridadeController@deletar']);

    Route::get('/admin/versao', ['as' => 'admin.versao', 'uses' => 'Admin\VersaoController@index']);
    Route::get('/admin/versao/adicionar', ['as' => 'admin.versao.adicionar', 'uses' => 'Admin\VersaoController@adicionar']);
    Route::post('/admin/versao/salvar', ['as' => 'admin.versao.salvar', 'uses' => 'Admin\VersaoController@salvar']);
    Route::get('/admin/versao/editar/{id}', ['as' => 'admin.versao.editar', 'uses' => 'Admin\VersaoController@editar']);
    Route::put('/admin/versao/atualizar/{id}', ['as' => 'admin.versao.atualizar', 'uses' => 'Admin\VersaoController@atualizar']);
    Route::get('/admin/versao/deletar/{id}', ['as' => 'admin.versao.deletar', 'uses' => 'Admin\VersaoController@deletar']);
    
    //);