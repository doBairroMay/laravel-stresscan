<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico-dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('servico')->references('servico')->on('id');
            $table->integer('cliente')->references('cliente')->on('id');
            $table->integer('dispositivo')->references('dispositivo')->on('id');
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
        Schema::drop('servico-dispositivo');
    }
}
