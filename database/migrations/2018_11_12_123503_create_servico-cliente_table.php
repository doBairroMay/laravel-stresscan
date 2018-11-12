<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico-cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dispositivo')->references('dispositivo')->on('id');
            $table->integer('cliente')->references('cliente')->on('id');
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
        Schema::drop('servico-cliente');
    }
}
