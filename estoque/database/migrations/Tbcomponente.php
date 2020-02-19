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
        Schema::create('tbcomponente', function (Blueprint $table) {
            $table->integer('id_componente',50);
            $table->integer('fk_id_curso',50);
            $table->integer('fk_id_docente');
            $table->varchar('qt_horas_componente',45);
            $table->varchar('descricao',45);
            $table->decimal('qt_horas_componente',45);
            $table->integer('qt_alunos_mat_componente',45);
            $table->foreign('id_componente')->references('fk_id_componente')->on('tasolicitacaomaterial');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcomponente');
    }
}
