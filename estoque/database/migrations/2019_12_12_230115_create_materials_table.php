<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_material', function (Blueprint $table) {
            $table->bigIncrements('id_material');
            $table->string('descricao',100);
            $table->string('tipo',45);
            $table->integer('quantidade');
            $table->string('metrica',10);
            $table->date('dt_validade');
            $table->foreign('id_material')->references('fk_id_material')->on('tasolicitacaomaterial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_material');
    }
}
