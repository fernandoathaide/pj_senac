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
            $table->string('no_componente', 45);
            $table->string('descricao', 100);
            $table->integer('qt_horas_componente');
            $table->integer('qt_alunos_mat_componente');
            $table->foreign('id_curso')->references('fk_id_curso')->on('tb_curso');
            $table->foreign('id_docente')->references('fk_id_docente')->on('tb_docente');
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
