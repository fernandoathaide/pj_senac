<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTadocentecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tadocentecurso', function (Blueprint $table) {
            $table->bigIncrements('fk_id_docente');
            $table->bigIncrements('fk_id_curso');
            $table->date('dt_inclusao');
            $table->date('dt_exclusao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tadocentecurso');
    }
}
