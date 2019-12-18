<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_curso', function (Blueprint $table) {
            $table->bigIncrements('id_curso');
            $table->string('no_curso', 150);
            $table->string('descricao', 200);
            $table->integer('qt_alunos');
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->decimal('qt_horas_curso',10,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_curso');
    }
}
