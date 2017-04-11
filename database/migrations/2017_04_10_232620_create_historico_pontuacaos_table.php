<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoPontuacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_pontuacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('pontos');
            $table->integer('id_tabela_pontuacao')->unsigned();
            $table->foreign('id_tabela_pontuacao')->references('id')->on('tabela_pontuacaos');
            $table->integer('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id')->on('perfils');
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
        Schema::dropIfExists('historico_pontuacaos');
    }
}
