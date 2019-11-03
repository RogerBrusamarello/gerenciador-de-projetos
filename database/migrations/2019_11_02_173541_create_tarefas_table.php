<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('statusTarefa_id')->unsigned();
            $table->foreign('statusTarefa_id')->references('id')->on('status_tarefas');
            $table->integer('prioridade_id')->unsigned();
            $table->foreign('prioridade_id')->references('id')->on('prioridades');
            $table->string('nomeTarefa');
            $table->string('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
