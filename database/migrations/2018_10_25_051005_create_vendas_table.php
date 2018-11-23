<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('idVenda');
            $table->integer('idCliente')->references('clientes')->on('id');
            $table->integer('idFuncionario')->references('funcionarios')->on('id');
            $table->integer('idServico')->references('servicos')->on('id');
            $table->date('data');
            $table->float('valor');
            $table->integer('idPagamento')->references('pagamento')->on('id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendas');
    }
}
