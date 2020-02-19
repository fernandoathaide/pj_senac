<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesolicitacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasolicitacaomaterial', function (Blueprint $table) {
            $table->integer('fk_id_componente');
            $table->integer('fk_id_material');
            $table->integer('qt_material_uso');
            $table->integer('qt_material_sobra');
            $table->varchar('desc_intercorrencia',200);
            $table->datetime('dth_solicitacao');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasolicitacaomaterial');
    }
}
