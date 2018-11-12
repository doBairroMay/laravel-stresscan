<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('cliente')->references('cliente')->on('id');
            $table->integer('servico-cliente')->references('servico-cliente')->on('id');
            $table->date('data');
            $table->integer('funcionario')->references('funcionario')->on('id');
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
        Schema::drop('assistencias');
    }
}
