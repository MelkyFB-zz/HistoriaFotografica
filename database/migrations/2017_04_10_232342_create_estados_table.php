<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->string('sigla');
            $table->string('url_governo');
            $table->string('url_camara');
            $table->string('url_wiki');
            $table->integer('qtd_cidades');
            $table->string('caminho_foto');
            $table->timestamps();
        });
        DB::table('estados')->insert(
            array(
                'estado' => 'Goiás',
                'sigla' => 'GO',
                'url_governo' => '',
                'url_camara' => '',
                'url_wiki' => '',
                'qtd_cidades' => 254,
                'caminho_foto' => ''
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
        Schema::dropIfExists('estados');
    }
}
