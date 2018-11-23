<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('descricao');
            $table->string('funcionario')->references('funcionarios')->on('nome');
            $table->string('cliente')->references('clientes')->on('nome');
            $table->integer('tiposervico')->references('servicos')->on('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orcamentos');
    }
}
