<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManutencoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manutencoes', function (Blueprint $table) {

            $table->increments('idManutencao');
            $table->integer('idFuncionario');
            $table->string('descricao');
            $table->integer('idCliente');
            $table->string('endereco');
            $table->integer('idServico');
            $table->date('data');
            $table->float('valor');       

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('manutencoes');
    }
}
