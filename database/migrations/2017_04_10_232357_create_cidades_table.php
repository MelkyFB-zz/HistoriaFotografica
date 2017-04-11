<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('url_prefeitura');
            $table->string('url_camara');
            $table->string('url_wiki');
            $table->integer('qtd_habitantes');
            $table->integer('num_ibge');
            $table->timestamp('ultimo_senso');
            $table->string('caminho_foto');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->timestamps();
        });
        DB::table('cidades')->insert(
            array(
                'nome' => 'Edealina',
                'descricao' => '',
                'url_prefeitura' => '',
                'url_camara' => '',
                'url_wiki' => '',
                'qtd_habitantes' => 3774,
                'num_ibge'=>0,
                'ultimo_senso'=>'2010-1-1',
                'caminho_foto' => '',
                'estado_id'=>1
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
