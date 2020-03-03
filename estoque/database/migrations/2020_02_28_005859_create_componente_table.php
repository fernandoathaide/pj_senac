<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_curso', 150);
            $table->string('descricao', 200);
            $table->integer('qt_alunos');
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->decimal('qt_horas_curso',10,2);
            $table->foreign('id_curso')->references('fk_id_curso')->on('tadocentecurso');
            $table->foreign('id_curso')->references('fk_id_curso')->on('tbcomponente');
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
        Schema::dropIfExists('componente');
    }
}
