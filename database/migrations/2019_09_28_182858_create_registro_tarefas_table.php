<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_tarefas', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->timestamps('dataHoraRegistro');
            $table->decimal('tarefa_codigo',5,2);
            $table->decimal('user_codigo',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_tarefas');
    }
}
