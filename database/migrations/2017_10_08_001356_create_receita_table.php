<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timetamps('data');
            $table->string('descricao');
            $table->string('valor');
            $table->enum('tipo', ['R', 'D']);
            //$table->foreign('id_tipo_r')->references('id')->on('tipos_receita');
            //$table->foreign('id_conta')->references('id')->on('contas');
            //$table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receitas');
    }
}
