<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_docentes', function (Blueprint $table) {
            $table->bigIncrements('id_docente');
            $table->string('nome',150);
            $table->integer('matricula')->unique();
            $table->foreign('id_docente')->references('fk_id_docente')->on('ta_docente_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_docentes');
    }
}
