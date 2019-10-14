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
//});