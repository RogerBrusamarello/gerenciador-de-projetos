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
            $table->integerIncrements('id');
            $table->timestamp('dataHoraRegistro');
            $table->decimal('tarefa_id',5,2);
            $table->decimal('user_id',5,2);
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
        Schema::dropIfExists('registro_tarefas');
    }
}
